var nukage;
$(function () {
    nukage = {
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

            // $('.question').click(function (e) {
            //     $('.bullet-circle').removeClass('open');
            //     $(this).find($('.bullet-circle')).addClass('open');
            // });

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

});

