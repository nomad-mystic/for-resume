<?php

namespace App\Controller\Components;

use Sober\Controller\Controller;
use WP_Query;
use App\Utils\ArrayUtils;

/**
 * @author Keith Murphy | nomadmystics@gmail.com
 * Class FaqsComponent
 * @todo Use controller ACF module for easier extraction of the the FQAs fields
 * @see https://github.com/soberwp/controller#advanced-custom-fields-module
 * @package App\Controller\Components
 */
class FaqsComponent extends Controller
{
    /**
     * @author Keith Murphy | nomadmystics@gmail.com
     * @description Get all of the posts for the passion_faqs custom post type by category
     * @param string $category
     * @param string $postType
     * @return array
     */
    static public function get_posts_py_category ($category, $postType)
    {
        $category_id = get_cat_ID($category);

        $args = [
            'numberposts' => -1,
            'post_type' => $postType,
            'category' => $category_id,
        ];

        if (class_exists('\WP_Query')) {
            $query = new WP_Query($args);
            $posts = $query->posts;
        } else {
            $posts = null;
        }

        return $posts;
    }

	/**
	 * @author Keith Murphy | nomadmystics@gmail.com
	 * @param string $category @example get-involved-student
	 * @param string $post_type @example passion_faqs
	 * @return array $postsCustomFields
	 * @description This will return an array of values from the custom fields based on the category
	 */
	static public function get_post_custom_fields (string $category, string $post_type): array
	{
		$posts_custom_fields = [];
		$final_custom_fields_array = [];
		$flattened_values = [];
		$posts = self::get_posts_py_category($category, $post_type);

		// Loop through posts and make an array with just custom fields for current post category
		if (isset($posts) && !empty($posts)) {
			foreach ($posts as $post) {
				if (isset($post->ID)) {
				    $post_category = get_the_category($post->ID);
				    $category_name = $post_category[0]->cat_name;

				    // Make sure it is the right category for the template
                    if ($category_name === $category) {
                        $posts_custom_fields = get_fields($post->ID);
                    }
				}
			}

			// Get the key and values so you can create the finial array
			$keys = array_keys($posts_custom_fields);
			$values = array_values($posts_custom_fields);

			// Flatten the array of values to push onto finial array
			if (class_exists('App\Utils\ArrayUtils')) {
				$flattened_values = ArrayUtils::flatten($values);
			}

			// Rebuild and format the array for template ingestion
			for ($field = 0; $field < count($posts_custom_fields); $field++) {
				if (isset($keys[$field]) && isset($flattened_values[$field])) {
					$final_custom_fields_array[$field][0]  = $keys[$field];
					$final_custom_fields_array[$field][1] = $flattened_values[$field];
				}
			}
		}

		return $final_custom_fields_array;
	}

    /**
     * @author Keith Murphy | nomadmystics@gmail.com
     * @description Get the current title for the post to use in template
     * @param string $category
     * @param string $post_type
     * @return string
     */
	static public function get_the_title (string $category, string $post_type): string
    {
        $posts = self::get_posts_py_category($category, $post_type);
        if (isset($posts[0]->post_title)) {
            return $posts[0]->post_title;
        } else {
            return '';
        }
    }
}
