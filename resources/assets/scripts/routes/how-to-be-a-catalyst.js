import faqs from '../components/faqs';

/**
 * @author Keith Murphy | nomadmystics@gmail.com
 * @return {Object}
 */

export default {
  init() {},
  finalize() {
    // create the dynamic accordion effect for this pages faq
    faqs.activateAccordion();
  },
};
