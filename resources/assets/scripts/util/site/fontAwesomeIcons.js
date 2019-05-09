// Add Font Awesome here for Tree shaking
// import then needed Font Awesome functionality
import { config, library, dom } from '@fortawesome/fontawesome-svg-core';
// import the Facebook and Twitter icons
import {
	faFacebook,
	faTwitter,
	faYoutube,
	faInstagram,
} from "@fortawesome/free-brands-svg-icons";

import {
  faBars,
  faPlus,
  faCalendarCheck,
} from "@fortawesome/free-solid-svg-icons";

export default {
	exposeIcons: () => {
    config.searchPseudoElements = true;
    // config.showMissingIcons = true;

		// add the imported icons to the library
		library.add(
			faFacebook,
			faTwitter,
			faYoutube,
			faInstagram,
			faBars,
      faPlus,
      faCalendarCheck
		);

		// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
		dom.watch();
	},
}
