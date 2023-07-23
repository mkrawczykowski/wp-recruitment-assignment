import './index.scss';
import Swiper from 'swiper';
import 'swiper/css';

document.addEventListener('DOMContentLoaded', () => {
  const swiper = new Swiper('.swiper', {
    speed: 400,
    crossFade: true,
    effect: 'fade',
    autoplay: {
      delay: 500,
      disableOnInteraction: false,
    },
  });
  swiper.disable()
})