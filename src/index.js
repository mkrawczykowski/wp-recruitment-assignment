import './sass/index.scss';
import './js/language-switcher.js';
import './js/hamburger.js';
import '@splidejs/splide/css/core';
import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', () => {
  var splide = new Splide('.splide', {
    type: 'fade',
    rewind: true,
    arrows: false,
  });

  splide.mount();
})
