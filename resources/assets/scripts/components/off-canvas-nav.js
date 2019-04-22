/**
 * @author Keith Murphy | nomadmystics@gmail.com
 * @description This will build the off canvas nav events
 */
export default {
  activate: () => {
    // DOM Elements
    const navOffCanvasOpenSpan = window.document.getElementById('js-off-canvas-open-span');
    const navOffCanvasCloseSpan = window.document.getElementById('js-off-canvas-close-span');
    const navPrimaryMenuContainer = window.document.getElementById('nav-primary-menu-container');

    // Open the off canvas navigation
    navOffCanvasOpenSpan.addEventListener('click', (event) => {
      console.log(event);
      // Common CSS properties
      navPrimaryMenuContainer.style.transition = 'all .5s ease-in-out';

      navPrimaryMenuContainer.classList.remove('to-close');
      navPrimaryMenuContainer.classList.add('to-open');
    }, false);

    // Close the off canvas navigation
    navOffCanvasCloseSpan.addEventListener('click', () => {
      navPrimaryMenuContainer.classList.remove('to-open');
      navPrimaryMenuContainer.classList.add('to-close');
    }, false);
  },
}
