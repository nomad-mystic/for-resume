import faqs from '../components/faqs';

export default {
  init() {},
  finalize() {
    // create the dynamic accordion effect for this pages faq
    faqs.activateAccordion();
  },
};
