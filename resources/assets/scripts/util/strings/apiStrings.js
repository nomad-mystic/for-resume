import locationStrings from './locationStrings';

const apiPostsBasePath = '/wp-json/wp/v2/posts/';

/**
 * @description This is will hold the query string needed to call API endpoints
 * @type {object}
 */
export default {
  getAllPostsByCategory: (category) => {
    return `${locationStrings.origin()}${apiPostsBasePath}?categories=${category}`;
  },
}
