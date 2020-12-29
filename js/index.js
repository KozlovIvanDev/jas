$(window).on("load", function () {

  $(".loader .inner").fadeOut(500, function () {
    $(".loader").fadeOut(750);
  });

})

window.addEventListener("scroll", function () {
  const header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0)
})

  var headerHeight = $('header').outerHeight();

  $(".nav__link").click(function(e){

    $(this).addClass('current').siblings().removeClass('current')

    var linkHref = $(this).attr('href');

    $('html, body').animate({
      scrollTop: $(linkHref).offset().top - headerHeight
    }, 1000);

     e.preventDefault();
  });

const navSlide = () => {
  const ham = document.querySelector('.ham');
  const nav = document.querySelector('.nav');
  const navLinks = document.querySelectorAll('.nav__link')

  ham.addEventListener('click', () => {
    //Анімуєм навігацію
    nav.classList.toggle('nav-active');

    //Анімуєм посилання
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = '';
      } else {
        link.style.animation = `navLinkFade 0.5s ease-in-out forwards ${index / 7 + 0.5}s`;
      }
    })
    //Анімуєм бургер
    ham.classList.toggle('toggle');
  })
}
navSlide();

const typedTextSpan = document.querySelector(".title_typed");
const cursorSpan = document.querySelector(".cursor");

// var entities = {
//   '📅': '&#128197;',
//   '💭': '&#128173;',
//   '🎯': '&#127919;'
// }

const textArray = ["Учнів", "Батьків", "Вчителів"];
const typingDelay = 100;
const erasingDelay = 100;
const newTextDelay = 1000; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if (!cursorSpan.classList.contains("typing"))
      cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } else {
    cursorSpan.classList.remove("typing");
    setTimeout(erase, newTextDelay);
  }
}

function erase() {
  if (charIndex > 0) {
    if (!cursorSpan.classList.contains("typing"))
      cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(
      0,
      charIndex - 1
    );
    charIndex--;
    setTimeout(erase, erasingDelay);
  } else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if (textArrayIndex >= textArray.length) textArrayIndex = 0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function () {
  // On DOM Load initiate the effect
  if (textArray.length) setTimeout(type, newTextDelay + 250);
});
$(document).ready(function () {

  $(".services-item").tilt({
    maxTilt: 5,
    glare: true,
    maxGlare: .2
  });

});