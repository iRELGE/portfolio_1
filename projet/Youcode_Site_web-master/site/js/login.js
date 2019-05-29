/**
 * Variables
 */
const signupButton = document.getElementById('signup-button'),
  loginButton = document.getElementById('login-button'),
  userForms = document.getElementById('user_options-forms')

/**
 * Add event listener to the "Sign Up" button
 */
// Back to top and Count number 
$('.count').each(function () {
  $(this).prop('Counter', 0).animate({
    Counter: $(this).text()
  }, {
    duration: 2400,
    easing: 'swing',
    step: function (now) {
      $(this).text(Math.ceil(now));
    }
  });
});
$(window).scroll(function () {
  var backToTopButton = $(".back-to-top");
  if ($(window).scrollTop() >= 200) {
    backToTopButton.css("bottom", "0px");
  } else {
    backToTopButton.attr('style', '');
  }
  backToTopButton.click(function () {
    $('body,html').stop().animate({
      scrollTop: 0
    }, "slow");
  });
  return false;
});
//************************************** */

signupButton.addEventListener('click', () => {
  userForms.classList.remove('bounceRight')
  userForms.classList.add('bounceLeft')
}, false)

/**
 * Add event listener to the "Login" button
 */
loginButton.addEventListener('click', () => {
  userForms.classList.remove('bounceLeft')
  userForms.classList.add('bounceRight')
}, false)