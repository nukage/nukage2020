var nukage;
$(function () {
    nukage = {
      loadAnimate: function(className, preDelay, delay, animationName){
        console.log('loadAnimate');
        $(className).each(function(index){
                var self = this
                setTimeout(function () {
                      $(self).addClass(animationName);
                }, index*delay + preDelay);
              });
            },

      skrollr: function(){
        console.log('SKROLLR');
        skrollr.init({
         
          // smoothScrolling: false,
          // mobileDeceleration: 0.004
        });
      },

      combinedScroll: function() {
        $(document).ready(function () {
          console.log ('combineScroll Loaded')
          // Hook up the current state to the nav bar
          $('.nav-sub-menu').onePageNav();
        });
      },

      headroom: function() {
 
            // grab an element
            var myElement = document.querySelector(".navbar");
            // construct an instance of Headroom, passing the element
            var headroom  = new Headroom(myElement);
            // initialise
            headroom.init();
      },
        
        gallery: function (){
            
                // Init fancyBox
                    $().fancybox({
                        selector: ".element-item:visible > a",
                        buttons : [
                            'download',
                            'thumbs',
                            'close'
                          ]
                    });
                    
                    // Init Isotope
                    var $grid = $(".grid").isotope({
                      itemSelector: '.element-item' 
                      

                      // options
                  });
                    
                    // Filter items on button click
                    $(".filter-button-group").on("click", "button", function() {
                        $grid.isotope({ filter: $(this).attr("data-filter") });
                    });
                    $('.accordian-h3').click(function (e) {
                        // console.log('HEYYYYY')
                        $(".grid").isotope('layout');
                    });
                    

        },
        faq: function () {
            // Initialize FAQ accordion
            // console.log('faq');
            console.log('we are loaded')
            $(".accordion").accordion({
                heightStyle: "content",
                collapsible: true,
                // active: false,
                // icons: {
                //     "header": "ui-icon-plus",
                //     "activeHeader": "ui-icon-minus"
                // }
            });

            $('.accordian-h3').click(function (e) {
                // $('.bullet-circle').removeClass('open');
                // $(this).find($('.bullet-circle')).addClass('open');
                // $grid('layout');
            });

            // var incomingHash = location.hash;
            // // Deep anchor link for london faq page
            // if (incomingHash.length && $(incomingHash).length) {
            //     // smooth scroll to the faq from hash
            //     $('html, body').animate({
            //         scrollTop: $(incomingHash).offset().top - 60
            //     }, 800);

            //     // open the faq answer if presale
            //     if ($("#accordion-presale h4").is(incomingHash)) {
            //         // console.log('presale: ', $(incomingHash).index("#accordion-presale h4"));
            //         $('#accordion-presale').accordion("option", "active", $(incomingHash).index("#accordion-presale h4"));

            //         // open the faq answer if regular
            //     } else if ($("#accordion h4").is(incomingHash)) {
            //         // console.log('regular', $(incomingHash).index("#accordion h4"));
            //         $('#accordion').accordion("option", "active", $(incomingHash).index("#accordion h4"));

            //     } else {
            //         return;
            //     }
            // }

            // $(document).ready(function () {
            //     $('.faq-list').removeClass('fade');
            // });

        },
        mainModal: function (elem, modalBG, btn, modalContent) {
            // console.log('Malchimpmodal Loaded')
            $(elem).on('click', function (e) {
              e.preventDefault();
              // console.log('partners');
              $(modalBG)
              .css('display', 'flex')
              .hide()
              .fadeIn(200);
              $(modalContent).addClass('slide-in-blurred-bottom');
              $(modalContent).removeClass('roll-out-bottom');             });
      
            // CLOSE MODAL
            // const btn = '.modal-close';
            const modal = modalBG;
           // const modalContent = '.modal-box';
      
            // close modals if click bg or x-button
            $(modal).on('click', function (e) {
              var clicked = $(e.target);
              if (clicked.is($(btn)) || clicked.parents().is($(btn))) {
                $(modal).fadeOut(200).promise().done(function () {
                  $(this).removeAttr('style');
                  $(modalContent).removeClass('slide-in-blurred-bottom');
 
 
                 
                });
      
              // don't close if clicking around in the form or other modal content
              } else if (clicked.is($(modalContent)) || clicked.parents().is($(modalContent))) {
      
              } else {
                $(modal).fadeOut(200).promise().done(function () {
                  $(this).removeAttr('style');
                  $(modalContent).removeClass('slide-in-blurred-bottom');
                });
              }
            });
          }
    }

    nukage.faq();
    nukage.gallery();
    nukage.loadAnimate('.fade-anim', 100, 200, 'fade-in' );
    nukage.loadAnimate('.slide-in-anim', 1000, 100, 'slide-in-blurred-bottom' );
    nukage.mainModal('.sign-up-nav-link', '.modal-mc-bg', '.modal-close', '.modal-mc');
    nukage.combinedScroll();
    nukage.headroom();
    // nukage.skrollr();


});

