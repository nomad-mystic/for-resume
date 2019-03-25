<?php

namespace App\Controller\Components;

use Sober\Controller\Controller;

/**
 * @author Keith Murphy | nomadmystics@gmail.com
 * Class FaqsComponent
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
    static public function getPostsByCategory ($category, $postType)
    {
        $categoryId = get_cat_ID($category);

        $args = [
            'numberposts' => -1,
            'post_type' => $postType,
            'category' => $categoryId,
        ];

        if (class_exists('\WP_Query')) {
            $query = new \WP_Query($args);
            $posts = $query->posts;
        } else {
            $posts = null;
        }

        return $posts;
    }

    static public function getTheTitle (string $category, string $postType): string
    {
        $posts = self::getPostsByCategory($category, $postType);
        if (isset($posts[0]->post_title)) {
            return $posts[0]->post_title;
        } else {
            return '';
        }
    }

    /**
     * @author Keith Murphy | nomadmystics@gmail.com
     * @description This will return an array of values from the custom fields based on the category
     * @param string $category
     * @param string $postType
     * @return array $postsCustomFields
     */
    static public function getPostCustomFields (string $category, string $postType): array
    {
        $postsCustomFields = [];
        $finalCustomFieldsArray = [];
        $posts = self::getPostsByCategory($category, $postType);

        // Loop through posts and make an array with just custom fields
        if (isset($posts) && !empty($posts)) {
            foreach ($posts as $post) {
                if (isset($post->ID)) {
                    $postsCustom = get_post_custom($post->ID);

                    if (!empty($postsCustom)) {

                        if (isset($postsCustom['_edit_lock'])) {
                            unset($postsCustom['_edit_lock']);
                        }
                        if (isset($postsCustom['_edit_last'])) {
                            unset($postsCustom['_edit_last']);
                        }

                        $postsCustomFields = $postsCustom;
                    }
                }
            }

            // Get the key and values so you can create the finial array
            $keys = array_keys($postsCustomFields);
            $values = array_values($postsCustomFields);

            // Flatten the array of values to push onto finial array
            $flattenedValues = self::flatten($values);

            for ($field = 0; $field < count($postsCustomFields); $field++) {
                if (isset($keys[$field]) && isset($flattenedValues[$field])) {
                    $finalCustomFieldsArray[$field][0]  = $keys[$field];
                    $finalCustomFieldsArray[$field][1] = $flattenedValues[$field];
                }
            }
        }
        return $finalCustomFieldsArray;
    }

    /**
     * @author Keith Murphy | nomadmystics@gmail.com
     * @description This will flatten the array for pushing to final returned array
     * @see https://stackoverflow.com/questions/1319903/how-to-flatten-a-multidimensional-array/14972389
     * @param array $array
     * @return array
     */
    static private function flatten(array $array) {
        $return = [];

        array_walk_recursive($array, function($a) use (&$return) {
            $return[] = $a;
        });

        return $return;
    }
}
