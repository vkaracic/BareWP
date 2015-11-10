'use strict';

$(document).ready(function() {
    // Add nav-jump class to your navigation and each anchor will jump
    // to the element with the ID as same as the anchor's class name.
    $('.nav-jump a').click(function() {
        $('html body').animate({
            scrollTop: $('#'+this.className).offset().top
        }, 1000);
    });

});