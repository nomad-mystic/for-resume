/**
 * @author Keith Murphy | nomadmystics@gmail.com
 * @description This will be all of the Javascript needed to make the FAQS component work
 * @return {Object}
 */
export default {
  activateAccordion: () => {
    function addClass(el, klass) {
      el.classList.add(klass);
    }

    function removeClass(el, klass) {
      el.classList.remove(klass);
    }

    const accordionItems = document.querySelectorAll('.faqs__accordion-item');
    const accordionContentPanes = document.querySelectorAll('.faqs__accordion-content');

    // Show first by default
    accordionItems[0].querySelector('.faqs__accordion-content').classList.remove('hidden');
    accordionItems[0].querySelector('.title span').classList.add('active');

    // Hide each besides the targeted accordion on click
    accordionItems.forEach(function(accordion) {
      // Clicked accordions clickable target
      const accordionTitleRow = accordion.firstElementChild;
      accordionTitleRow.addEventListener('click', toggleAccordion);
    });

    function toggleAccordion(event) {
      accordionContentPanes.forEach(function(content) {
        // Check if clicked row matches the content's previous element sibling

        if (content.previousElementSibling === event.target) {
          removeClass(content, 'hidden');
          addClass(content.parentElement, 'active');
          // transform span icon
          addClass(content.previousElementSibling.children[0], 'active');
        } else {
          removeClass(content.parentElement, 'active');
          // transform span icon
          removeClass(content.previousElementSibling.children[0], 'active');
          addClass(content, 'hidden');
        }
      });
    }
  },
}
