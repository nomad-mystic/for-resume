import offCanvasNav from '../components/off-canvas-nav';
import footer from '../components/footer';

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    offCanvasNav.activate();

    // Remove contact href will screen is larger then mobile
    footer.addRemoveAttributes();
  },
};
