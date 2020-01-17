<?php
/*
 *Plugin Name: Change Table Prefix
 *Description: This plug-in will allow you to change your database prefix after installation.
 *Author: Manish Kumar Agarwal
 *EmailId: manishkrag@yahoo.co.in/skype:soumibgb
 *Version: 2.0
 */

defined( 'ABSPATH' ) or die( 'Sorry! You have no permission to access the page' );

/*Call 'change_prefix' function to Add a submenu link under Profile tab.*/
add_action( 'admin_menu', 'change_prefix' );

/**
 * Function Name: change_prefix
 * Description: Add a submenu link under Settings tab.
 *
 */
function change_prefix() { 
	add_options_page( 'Change Table Prefix', 'Change Table Prefix', 'manage_options', 'change-prefix', 'change_prefix_form' );
}

function change_prefix_form() {
	global $wpdb, $table_prefix;
	
	/* Enqueue plugin style and script files */
	wp_register_style( 'ctp_style', plugins_url( 'css/ctp-style.css', __FILE__ ) );
	wp_enqueue_style( 'ctp_style' );
	wp_enqueue_script( 'ctp_script', plugins_url( 'js/ctp-js.js', __FILE__ ), 'jquery' );
	
	?>
	
	<div class='wrap'>
		<h2>Wordpress Database Table Prefix Changing</h2>
		<p>This plugin will change your site database table prefix to protect from SQL Injection attacks.</p>
		<p><strong>Your current table prefix is:</strong> <?php echo $table_prefix; ?></p>
		
		<!--Last Prefix Changed Date Time -->
		<?php 
		$ctp_last_prefix_change = get_option('ctp_last_prefix_change' );
		if ( '' != $ctp_last_prefix_change ) {
		?>
		<p><strong>You have last successfully changed your site database table prefix by this plugin : 
		<?php echo $ctp_last_prefix_change;  ?></strong></p>
		<?php } ?>
	
		<p>Your next table prefix will be random generated 5 characters long alpha string followed by underscore(_) if below checkbox unchecked.</p>
		<p style="color: #ff0000;"><strong>Warning:</strong> Please make sure to take backup of your site database and wp-config.php file is in writable mode before start table prefix change.</p>
			
			<?php
			// set as maintenance mode
			if( isset( $_POST['site-maintenance-mode'] ) ) {
				if ( isset( $_POST['maintenance-enabled'] ) && ( $_POST['maintenance-enabled'] == 1 ) ) {
					update_option( 'ctp_maintenance_enabled','1' );
				} else {
					update_option( 'ctp_maintenance_enabled','0' );
				}
			}
			?>
			<form method="post" action="">
				 <table class="form-table">
					<tr valign="top">
                        <td>
						    <strong> Enable site as maintenance mode </strong>
							&nbsp;
                            <?php $ctp_maintenance_enabled = esc_attr( get_option('ctp_maintenance_enabled') ); ?>
                            <input type="checkbox" name="maintenance-enabled" value="1" <?php checked( $ctp_maintenance_enabled, 1 ); ?> >
							&nbsp;
							<input id="site-maintenance-mode" type="submit" name="site-maintenance-mode" value="Save Settings"/>
                            <?php if($ctp_maintenance_enabled) : ?>
                                <p class="description"><?php echo ctp_maintenance_message('maintence_mode_enabled'); ?></p>
								<p style="color: #ff0000;"><b>Important Note:</b> Please uncheck the <b>Enable site as maintenance mode</b> checkbox and save the settings after successfully change table prefix.</p>
                            <?php endif; ?>
                        </td>
                    </tr>
				</table> 
			</form>
			
		<form id="option-form" method="post" name="change-prefix" action="">
			<input id="checkbox" type="checkbox" name="checkbox-prefix" value="1"/>
			<span class="italic">Would you like to your own custom prefix.</span>
			<br />
			<input class="hide" id="new-prefix" type="text" name="new-prefix" pattern="[a-zA-Z0-9_]+" value="" placeholder="Enter Custom Prefix"/><span style="color: #ff0000;">It contains only combinations of lowercase letters (a-z), uppercase letters (A-Z), numbers (0-9) or underscore(_) and first character is always alphanumeric.</span>
			<br />
			<input id="change-prefix" type="submit" name="change-prefix-do" value="Click To Change Table Prefix"/>
			<?php wp_nonce_field('change_table_prefix','name_of_nonce_field'); ?>
		</form>
	</div>
	
	<?php
	/**
	 * Check whether the form submitted or not.
	 */
	if( isset($_POST['change-prefix-do'])  && wp_verify_nonce($_POST['name_of_nonce_field'],'change_table_prefix') ) {
	
	//Last Successfully Table Prefix Change
		update_option( 'ctp_last_prefix_change',date( 'F j, Y, g:i A T' ) );
		
		$old_table_prefix = $table_prefix;
		$old_prefix_length = strlen( $old_table_prefix );
		
		if ( isset( $_POST['checkbox-prefix'] ) && ( $_POST['checkbox-prefix'] == 1 ) ) {
			$table_new_prefix = wp_strip_all_tags( trim( $_POST['new-prefix'] ) );
			if( '' == $table_new_prefix  ) {
				echo "<p class='message'>Custom table prefix can not be empty.</p>";
				$characters = 'abcdefghijklmnopqrstuvwxyz';

				//Length of the table prefix
				$random_string_length = 5;
				$string = '';

				//Generate random string
				for ( $i = 0; $i < $random_string_length; $i++ ) {
					$string .= $characters[rand(0, strlen($characters) - 1)];
				}

				//Append '_' with the newly generated string
				$table_new_prefix = $string . '_';
			}

			global $wpdb;
			$error = $wpdb->set_prefix( $table_new_prefix );
			if ( is_wp_error( $error ) )
				wp_die( '<strong style="color: #ff0000;">ERROR</strong>: table prefix can only contain numbers, letters, and underscores.' );
			
		} else {
			//Charecters present in table prefix
			$characters = 'abcdefghijklmnopqrstuvwxyz';
			
			//Length of the table prefix
			$random_string_length = 5;
			$string = '';
			
			//Generate random string
			for ($i = 0; $i < $random_string_length; $i++) {
				$string .= $characters[rand(0, strlen($characters) - 1)];
			}
			
			//Append '_' with the newly generated string
			$table_new_prefix = $string . '_';
		}

		//Check whether first character is alphanumeric or not
		if (preg_match('/^[a-zA-Z0-9]+$/', $table_new_prefix['0'])) {
			
			echo "<p class='success'>Your new table prefix is: <b>", $table_new_prefix, "</b></p>";
			
			//Get the table resource
			$get_tables_sql = 'SHOW TABLES FROM ' . DB_NAME;
			$old_tables = $wpdb->get_results( $get_tables_sql, ARRAY_N );
			
			//Count the number of tables
			$table_count = 0;

			//Rename all the tables name
			foreach ( $old_tables as $old_table ) {
				
				//Get table name with old prefix
				$table_old_name = $old_table[0];

				if ( strpos( $table_old_name, $old_table_prefix ) === 0 ) {
					//Get table name with new prefix
					$table_new_name = $table_new_prefix . substr( $table_old_name, $old_prefix_length );

					//Write query to rename tables name
					$sql = "RENAME TABLE `$table_old_name` TO `$table_new_name`";

					//Execute the query
					if ( false === $wpdb->query( $sql ) ) {
						$error = 1;
						echo "<p class='error'>", $table_old_name, " table name not updated.</p>";
					} else {
						$table_count++;
					}
				} else {
					continue;
				}
			}
			if ( @$error == 1 ) {
				echo "<p class='error'>Please change the above tables prefix to ", $table_new_prefix, " manualy.</p>";
			} else {
				echo "<p class='success'>", $table_count, " tables prefix updated successfully.</p>";
			}

			//Update the wp-config.php file
			$path = '../wp-config.php';
			$configFile = file( $path );
			foreach ( $configFile as $line_num => $line ) {
				switch ( substr( $line, 0, 16 ) ) {
					case '$table_prefix  =':
						$configFile[$line_num] = str_replace( $old_table_prefix, $table_new_prefix, $line );
						break;
				}
			}

			//making the the config readable to change the prefix
			@chmod( $path, 0777 );
			if ( is_writeable( $path ) ) {
				$handle = fopen( $path, 'w' );
				foreach ( $configFile as $line ) {
					fwrite( $handle, $line );
				}
				fclose( $handle );
				
				echo '<p class="success">wp-config.php file updated successfully.</p>';
			} else {
				echo "<p class='error'>File Not Writeable: Please open wp-config.php file in your favurite editor and search 
					  for variable", $table_prefix, " and assign ", $table_new_prefix, " to the same variable.";
			}

			//Create query to update option table
			$update_option_table_query = "UPDATE " . $table_new_prefix . "options 
										  SET option_name='" . $table_new_prefix . "user_roles' 
										  WHERE option_name='" . $old_table_prefix . "user_roles' 
										  LIMIT 1";
			
			//Execute the update query to update option table user_roles row
			if ( false === $wpdb->query($update_option_table_query) ) {
				echo "<p class='error'>Changing value: ",
					 $old_table_prefix,
					 "user_roles in table ",
					 $table_new_prefix,
					 "options to  ",
					 $table_new_prefix,
					 "user_roles</p>";
					 
				echo "<p class='error'>End of updating options table data with above error.</p>";
			} else {
				echo "<p class='success'>Updated options table data successfully.</p>";
			}

			//Create query to update user_meta table
			$custom_sql = "SELECT user_id, meta_key 
							FROM " . $table_new_prefix . "usermeta 
							WHERE meta_key 
							LIKE '" . $old_table_prefix . "%'";

			$meta_keys = $wpdb->get_results( $custom_sql );

			//Update all the meta_key field value which having the old table prefix in user_meta table
			foreach ( $meta_keys as $meta_key ) {
				
				//Create new meta key
				$new_meta_key = $table_new_prefix . substr( $meta_key->meta_key, $old_prefix_length );
				
				$update_user_meta_sql = "UPDATE " . $table_new_prefix . "usermeta 
										SET meta_key='" . $new_meta_key . "' 
										WHERE meta_key='" . $meta_key->meta_key . "' 
										AND user_id=" . $meta_key->user_id;
				
				$wpdb->query($update_user_meta_sql);
			
			}
			echo "<p class='success'>Updated usermeta table data successfully.</p>";
		}
		else
			echo "<p class='error'>First character is always alphanumeric.</p>";
	}
}


	
	// Activate WordPress Maintenance Mode
	function wp_maintenance_mode(){
		if ( !current_user_can('edit_themes') || !is_user_logged_in() ){
			wp_die('<h1 style="color:red">Website under Maintenance</h1><br />We are performing scheduled maintenance, will be back shortly!');
		}
	}
	
	// Check for maintenance mode 
	$is_maintenance_mode = get_option('ctp_maintenance_enabled');
	
	if ( 1 == $is_maintenance_mode) {
		add_action( 'get_header', 'wp_maintenance_mode' );
	}

	function ctp_maintenance_message($type) {
		switch($type) {
			case 'maintenance_message':
			$default = "<h1>Website Under Maintenance</h1><p>Our Website is currently undergoing scheduled maintenance. Please check back soon.</p>";
			break;
			case 'maintence_mode_enabled' :
			$default = "Maintenance Mode is currently active. To make sure that it works, open your web page in different browser or simply log out. Logged in users are not affected by the Maintenance Mode.";
			break;
			default:
			$default = false;
			break;
		}

		return $default;
	}

// Deactive the plugin & remove the option
register_deactivation_hook( __FILE__, 'ctp_delete_plugin' );

function ctp_delete_plugin() {
		delete_option( 'ctp_maintenance_enabled' );
		delete_option( 'ctp_last_prefix_change' );
}