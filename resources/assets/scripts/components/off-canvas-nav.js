/**
 * @author Keith Murphy | nomadmystics@gmail.com
 * @description This will build the off canvas nav events
 */
export default {
  activate: () => {
    const navPrimary = window.document.getElementById('js-nav-primary');

    navPrimary.addEventListener('click', (event) => {
      if (event.target && event.target.id === 'js-off-canvas-open') {
        console.log(event);
      }
    }, false)

  }
}
