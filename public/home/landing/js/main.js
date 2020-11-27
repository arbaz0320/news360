jQuery(document).ready( function($) {

    // Menu toggle

    $('.open_nav').click( function() {
        $('.header_nav_box, .header_start_box').toggleClass('show');
    });

    // from resources/js/localize.js
    localizePack("/landing/localization/landing");
    // ---

    $('.lang_link').click( function () {
        var link = $(this);
        // from resources/js/localize.js
        changeLanguage(link.attr('data-content'));
        // ---
        document.location.reload();
    });
});
