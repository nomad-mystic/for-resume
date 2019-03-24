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

    /**
     * @author Keith Murphy | nomadmystics@gmail.com
     * @description This will return an array of values from the custom fields based on the category
     * @param string $category
     * @param string $postType
     * @return array $postsCustomFields
     */
    static public function getPostCustomFields ($category, $postType): array
    {
        $postsCustomFields = [];
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
        }
        return $postsCustomFields;
    }
}
