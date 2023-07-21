document.addEventListener('DOMContentLoaded', () => {

  const toggleClassOnClick = (selector) => {
    const elements = document.querySelectorAll(selector);
    elements.forEach(element => {
      element.addEventListener('click', () => {
        element.classList.toggle('active');
      })
    })
  }

  toggleClassOnClick('.pll-parent-menu-item');
  toggleClassOnClick('#js-hamburger');
})





