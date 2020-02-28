$(document).ready(function() {

    $('.hamburger').click(function() {

      $('#hamb-rotating').toggleClass('rotated');
      $('ul').slideToggle('opening');
      $(this).toggleClass('open');

    });



    $('.open-sub-menu').click(function(){

      $('#chevr-rotating').toggleClass('rotated');
      $('.sub-menu').slideToggle('sub-opening');
      $('.sub-menu').toggleClass('sub-opening');

    });

});
