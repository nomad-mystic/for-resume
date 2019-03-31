<?php

namespace App\Controller\Components;

use Sober\Controller\Controller;
use App\Utils\ArrayUtils;


/**
 * @author Keith Murphy | nomadmystics@gmail.com
 * Class SocialMediaLinks
 * @package App\Controller\Components
 */
class SocialMediaLinks extends Controller
{
	/**
	 * @author Keith Murphy | nomadmystics@gmail.com
	 * @description Expose the metadata for social media links custom post to the theme level
	 * @return array
	 */
    static public function get_metadata (): array
    {
	    $object_id = 1000000;
	    $metadata = [];
	    $meta_key = 'media-links-meta-key';
	    $keys = [
		    'facebook',
		    'twitter',
		    'instagram',
		    'youtube',
	    ];

	    for ($i = 0; $i < count($keys); $i++) {
	    	if (isset($keys[$i]) && !empty($keys[$i])) {
			    $metadata[$i] = get_metadata('post', $object_id, "{$meta_key}-{$keys[$i]}");
	    	}
	    }

	    if (class_exists('App\Utils\ArrayUtils')) {
	        $metadata = ArrayUtils::flatten($metadata);
	    }

	    var_dump($metadata);

	    return $metadata;
    }
}
