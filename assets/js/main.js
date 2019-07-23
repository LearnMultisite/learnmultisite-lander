'use strict';

// Remove preload class once page is fully loaded

window.addEventListener('load', function() {
  Array.from(document.getElementsByTagName('body')).forEach(function(el) {
    el.classList.remove('preload');
  });
});

// Add class to navigation when scrolling down

document.addEventListener('scroll', function() {
  const header = document.querySelector('.header-main');
  if (window.scrollY >= 20) {
    header.classList.add('fade-in');
  } else {
    header.classList.remove('fade-in');
  }
});

// Add class when mobile navigation icon is clicked

Array.from(document.getElementsByClassName('nav-toggle')).forEach(function(el) {
  el.addEventListener('click', function() {
    Array.from(document.getElementsByTagName('body')).forEach(function(el) {
      el.classList.toggle('no-scroll');
    });
    Array.from(document.getElementsByClassName('header-main')).forEach(function(el) {
      el.classList.toggle('active');
    });
  });
});

// Prevent background from scrolling on mobile when navigation is toggled

document.addEventListener('touchmove', function(evt) {
  evt.preventDefault();
});

var signupButtons     = document.getElementsByClassName( 'signupbutton' );
var signupForm        = document.getElementById( 'mc_embed_signup' );
var closeSignupButton = document.getElementById( 'close-signup' );

for ( var i = 0; i < signupButtons.length; i++ ) {
  signupButtons[i].addEventListener( 'click', function( event ) {
    event.preventDefault();
    signupForm.className += 'showme';
  } )
}

closeSignupButton.addEventListener( 'click', function() {
  signupForm.classList.remove( 'showme' );
} )