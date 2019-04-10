/**
 * @author Keith Murphy | nomadmystics@gmail.com
 * @description This will build the off canvas nav events
 */
export default {
  activate: () => {
    const navOffCanvasOpenSpan = window.document.getElementById('js-off-canvas-open-span');
    const navPrimaryMenuContainer = window.document.getElementById('nav-primary-menu-container');
    let start = 0;

    navOffCanvasOpenSpan.addEventListener('click', (event) => {
      console.log(event);
      // window.requestAnimationFrame(() => {
      //   navPrimaryMenuContainer.style.transform = ''
      // });

      const openNav = () => {
        // let roundedTimestamp = Math.round(timestamp);
        // console.log(roundedTimestamp);
        // if (!start) start = timestamp;
        // let progress = timestamp - start;

        // const transformStyle = window.getComputedStyle(navPrimaryMenuContainer).transform;
        // const translateX = transformStyle.replace(/[^\d.]/g, '');

        // navPrimaryMenuContainer.style.transform = 'translateX(' + Math.min(Math.round(progress / 100), 100) + '%)';
        let translate = 0;
        translate += start + 20;
        navPrimaryMenuContainer.style.transform = `translateX(${translate}%)`;
        // console.log(translateX);
        console.log(translate);
        if (translate < 100) {
          window.requestAnimationFrame(openNav);
        } else {
          navPrimaryMenuContainer.style.transform = 'translateX(0)';
        }
      };

      window.requestAnimationFrame(openNav);
    }, false);
  },
}
