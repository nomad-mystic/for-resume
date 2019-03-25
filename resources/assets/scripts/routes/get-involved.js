export default {
  init() {
    // JavaScript to be fired on the about us page
    console.log('this was called');
  },
  finalize() {
    // JavaScript to be fired on the blog page, after the init JS

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

    // Hide each besides the targeted accordion on click
    accordionItems.forEach(function(accordion) {
      // Clicked accordions clickable target
      const accordionTitleRow = accordion.firstElementChild;

      accordionTitleRow.addEventListener('click', toggleAccordion);
      // console.log(accordion.firstElementChild);
    });

    function toggleAccordion(e) {
      accordionContentPanes.forEach(function(content) {
        // Check if clicked row matches the content's previous element sibling
        console.log(content);
        if (content.previousElementSibling === e.target) {
          removeClass(content, 'hidden');
          addClass(content.parentElement, 'active');
        } else {
          removeClass(content.parentElement, 'active');
          addClass(content, 'hidden');
        }
      });
    }
  },
};
