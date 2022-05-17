$(document).ready(function () {
  $(".btn-register").click(function () {
    $(".content-login").css('display', 'none')
    $(".content-register").css('display', 'block')
  });

  $(".btn-login-header").click(function () {
    $(".content-register").css('display', 'none')
    $(".content-login").css('display', 'block')
  });
});