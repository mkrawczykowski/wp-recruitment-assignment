document.addEventListener('DOMContentLoaded', () => {
  const hamburger = document.getElementById('js-hamburger');
  const mainMenu = document.getElementById('js-main-menu');
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    mainMenu.classList.toggle('active');

    if (hamburger.classList.contains('active')) {
      document.body.style.overflow = 'hidden';
    }
    if (!hamburger.classList.contains('active')) {
      document.body.style.removeProperty('overflow');
    }
  })

})
