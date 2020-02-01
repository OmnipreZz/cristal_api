$(document).ready(function () {
  $('.js-scrollTo').on('click', function () { // Au clic sur un élément
      var page = $(this).attr('href');
      $('html, body').animate({ scrollTop: $(page).offset().top }, 1000); // Go
      return false;
  });
});