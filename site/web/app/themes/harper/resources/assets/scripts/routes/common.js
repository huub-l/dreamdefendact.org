import stickybits from 'stickybits';
import AOS from 'aos';
import lozad from 'lozad';

export default {
  init() {
    stickybits('.sticky', {useStickyClasses: true});
    AOS.init();
    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any nav burgers
    if ($navbarBurgers.length > 0) {

      // Add a click event on each of them
      $navbarBurgers.forEach(function ($el) {
        $el.addEventListener('click', function () {

          // Get the target from the "data-target" attribute
          var target = $el.dataset.target;
          var $target = document.getElementById(target);

          // Toggle the class on both the "navbar-burger" and the "navbar-menu"
          $el.classList.toggle('is-active');
          $target.classList.toggle('is-active');

        });
      });
    }
    if (!('IntersectionObserver' in window)) {
      var script = document.createElement("script");
      script.src = "https://raw.githubusercontent.com/w3c/IntersectionObserver/master/polyfill/intersection-observer.js";
      document.getElementsByTagName('head')[0].appendChild(script);
    }
    const observer = lozad(); // lazy loads elements with default selector as '.lozad'
    observer.observe();
  },
  finalize() {

  },
};
