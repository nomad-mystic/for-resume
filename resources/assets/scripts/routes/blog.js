import apiStrings from '../util/strings/apiStrings';

/**
 * @description This will build out all of the blog posts
 * @type {object}
 * @return void
 */
export default {
  init() {
    // JavaScript to be fired on the blog page

    /**
     * @author Keith Murphy | nomadmystics@gmail.com
     * @description This is a test for the Wordpress API.
     * @todo Expand this to be more defencive and build out the DOM
     * @return void
     */
    fetch(`${apiStrings.getAllPostsByCategory(2)}`)
      .then(res => {
        return res.json();
      })
      .then(json => {
        console.log(json);
      })
      .catch(err => {
        console.error('Error:', err.message);
      });
  },
  finalize() {
    // JavaScript to be fired on the blog page, after the init JS
  },
};
