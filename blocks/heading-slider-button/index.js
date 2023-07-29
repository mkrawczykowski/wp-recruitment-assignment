import './index.scss';
import '@splidejs/splide/css/core';
import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', () => {

  var splide = new Splide('.splide', {
    type: 'fade',
    rewind: false,
    arrows: true,
    pagination: false
  });

  splide.mount();


})