/**
 * @author Keith Murphy | nomadmystics@gmail.com
 * @description This will build the off canvas nav events
 */
export default {
  activate: () => {
    const navOffCanvasOpenSpan = window.document.getElementById('js-off-canvas-open-span');
    const navOffCanvasCloseSpan = window.document.getElementById('js-off-canvas-close-span');
    const navPrimaryMenuContainer = window.document.getElementById('nav-primary-menu-container');

    navOffCanvasOpenSpan.addEventListener('click', () => {
      navPrimaryMenuContainer.style.animationPlayState = 'running';
    }, false);

    navOffCanvasCloseSpan.addEventListener('click', () => {
      navPrimaryMenuContainer.style.animationPlayState = 'running';
    }, false);
  },
}
