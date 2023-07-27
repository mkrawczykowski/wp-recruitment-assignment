import './index.scss';
import '@splidejs/splide/css/core';
import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', () => {
  const section = document.querySelector(".wp-admin");
  console.log(section);

  const observer = new MutationObserver(function (mutations_list) {
    mutations_list.forEach(function (mutation) {
      mutation.addedNodes.forEach(function (added_node) {
        if (added_node.id == 'splide-slider') {
          console.log('Gandalf: He is here!')
          var splide = new Splide('.splide', {
            type: 'fade',
            rewind: false,
            arrows: true,
            pagination: false
          });

          splide.mount();

          observer.disconnect();
        }
      });
    });
  });

  observer.observe(section, { subtree: false, childList: true });

})