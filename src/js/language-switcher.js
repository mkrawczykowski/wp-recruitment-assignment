document.addEventListener('DOMContentLoaded', () => {
  const switchers = document.querySelectorAll('.pll-parent-menu-item');

  switchers.forEach(switcher => {
    switcher.addEventListener('click', () => {
      switcher.classList.toggle('active');
    })
  })
})