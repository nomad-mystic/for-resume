// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"

// Util modules
import fontAwesomeIcons from './util/site/fontAwesomeIcons';
fontAwesomeIcons.exposeIcons();


// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import blog from './routes/blog';

// Passion Impact Pages
import getInvolved from './routes/get-involved';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  // For the blog page
  blog,
  // Passion Impact Pages
  getInvolved,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
