<?php

namespace App\Utils;

/**
 * @author Keith Murphy | nomadmystics@gmail.com
 * @description This will be all of the utils for arrays that are needed in controllers and templates
 * Class ArrayUtils
 * @package App\Utils
 */
class SiteUtils
{
	/**
	 * @author Keith Murphy | nomadmystics@gmail.com
	 * @description Get base url for the site
	 * @return string
	 */
	static public function get_site_scheme_and_host (): string
	{
		$site_url_scheme = parse_url(get_permalink(), PHP_URL_SCHEME);
		$site_url_host = parse_url(get_permalink(), PHP_URL_HOST);

		return "{$site_url_scheme}://{$site_url_host}";
	}

	/**
	 * @author Keith Murphy | nomadmystics@gmail.com
	 * @description Returns the src for the site logo
	 * @return string
	 */
	static public function get_site_logo_image_src (): string
	{
		if (function_exists('get_theme_mod')) {
			$custom_logo_id = get_theme_mod('custom_logo');
			$logo = wp_get_attachment_image_src($custom_logo_id , 'full');

			return $logo[0];
		} else {
			return '';
		}
	}
}