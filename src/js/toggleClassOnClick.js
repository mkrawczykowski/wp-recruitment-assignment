document.addEventListener('DOMContentLoaded', () => {

  const toggleClassOnClick = (selector, classNameToAdd, secondSelector, secondClassNameToAdd) => {
    const elements = document.querySelectorAll(selector);
    elements.forEach(element => {
      element.addEventListener('click', () => {
        element.classList.toggle(classNameToAdd);
        if (secondSelector) {
          console.log(secondSelector);
          const secondaryElements = document.querySelectorAll(secondSelector);

          secondaryElements.forEach(secondaryElement => {
            secondaryElement.classList.toggle(secondClassNameToAdd);
          })
        }
      })
    })
  }

  toggleClassOnClick('.pll-parent-menu-item', 'active');
  toggleClassOnClick('#js-hamburger', 'active', '#main-menu', 'active');
})





