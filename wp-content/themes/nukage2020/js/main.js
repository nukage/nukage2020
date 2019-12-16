var nukage;
$(function () {
    nukage = {
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
                        itemSelector: '.element-item',
                        layoutMode: 'masonry'

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

        }
    }

    nukage.faq();
    nukage.gallery();

});

