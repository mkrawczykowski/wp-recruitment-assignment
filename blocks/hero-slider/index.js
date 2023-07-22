import './index.scss';
import Swiper from 'swiper';

document.addEventListener('DOMContentLoaded', () => {
  const swiper = new Swiper('.swiper', {
    speed: 400,
    spaceBetween: 100,
  });
})