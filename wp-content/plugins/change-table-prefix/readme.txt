=== Change Table Prefix ===
Contributors: manishkrag
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=soumi.das1990@gmail.com&item_name=Change%20Table%20Prefix&return=http://wordpress.org/extend/plugins/change-table-prefix/
Tags: Prefix, database prefix,wp_,table prefix, random table prefix, custom table prefix, WordPress table prefix, change WordPress table prefix, WordPress database security, how to increase WordPress DB security
Requires at least: 3.0
Tested up to: 5.0
Stable tag: 2.0

Increase Your Website Database Security

== Description ==

Latest version compatible with WordPress multisite installation <a href="http://www.youngtechleads.com/wordpress-change-table-prefix/">here</a>

This plugin is mainly useful if you have not changed the database prefix at the time of installation and want to change post installation to make your website more secure and protected from SQL injections. With the use of this plug-in you can easily replace your database default prefix to any other prefix in single click.

As in most of the cases adminer are not changing the WordPress default database table prefix, it is easy for any hackers to inject to your database as all the default tables names are know for all. But if you modify your database tables prefix then your tables names are become unknown to outside world.

Plug-in URL: <a href="http://www.youngtechleads.com/change-wordpress-table-prefix/" target="_blank">Change Table Prefix</a>

= Features =
* Can change database tables prefix in post installation.
* Tables prefix will change by single click.
* Works well for multi site present in a single database.
* Both the custom and random generated prefix facility available.
* Minimize the SQL injection.

== Installation ==

* Upload `change-table-prefix` to the `/wp-content/plugins/` directory.
* Activate the plug-in through the 'Plugins' menu in WordPress.
* Configure the new prefix in Settings -> Change Table Prefix.

== Changelog ==
= 2.0 =
* Tested with upto WP 5.0.x
* Take any combination of letters, numbers and (_) with first character always alphanumeric.
* Check first character is always alphanumeric or not.
* Blank submission of custom table prefix will change prefix with randomly generated 5 characters and a message appears that custom table prefix can not be empty.
= 1.4 =
* Tested with upto WP 4.5.2
* Disable direct access.
* Added Last time table prefix change details.
* Added maintenance mode feature during table prefix change.
= 1.2 =
* Fixed issues. Tested with 4.2
= 1.0 =
* This is the first version