
export default {
  addRemoveAttributes: () => {
    // DOM Elements
    const footerContactEmailLink = window.document.querySelector('.contact-details .email');
    const footerContactTelephoneLink = window.document.querySelector('.contact-details .telephone');

    if (window.innerWidth >= 667) {
      footerContactEmailLink.removeAttribute('href');
      footerContactTelephoneLink.removeAttribute('href');
    }

    window.addEventListener('resize', () => {
      if (window.innerWidth < 667) {
        const emailLink = `mailto:${footerContactEmailLink.innerText}`;
        const telephoneLink = `tel:${footerContactTelephoneLink.innerText}`;

        footerContactEmailLink.setAttribute('href', emailLink);
        footerContactTelephoneLink.setAttribute('href', telephoneLink);
      } else {
        footerContactEmailLink.removeAttribute('href');
        footerContactTelephoneLink.removeAttribute('href');
      }
    });
  },
};
