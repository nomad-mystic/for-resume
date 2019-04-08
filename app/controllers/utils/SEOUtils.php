<?php

namespace App\Utils;

/**
 * @author Keith Murphy | nomadmystics@gmail.com
 * @description This will be all of the utils for arrays that are needed in controllers and templates
 * Class SEOUtils
 * @package App\Utils
 */
class SEOUtils
{
	static public function get_jsonld_for_head (): string
	{
		$founder_stefan = (object) [
			"@type" => "Person",
			"name" => "Stefan Peierls",
		];
		$founder_brad = (object) [
			"@type" => "Person",
            "name" => "Brad Burn",
		];

		$jsonLDObject = (object) [
			"@context" => "http://schema.org",
			"@type" => "NGO",
			"address" => (object) [
				"@type" => "PostalAddress",
				"addressLocality" => "Portland, Oregon, USA",
				"addressRegion" => "OR",
				"postalCode" => "97206",
				"streetAddress" => "5106 SE Powell Blvd",
			],
			"url" => "https://www.passionimpact.org",
			"email" => "connect@passionimpact.org",
			"name" => "Passion Impact, Inc.",
			"telephone" => "(503) 912-4241",
			"founders" => [
				$founder_stefan,
				$founder_brad,
			],
			"foundingDate" => date('c', 1395144000),
			"foundingLocation" => (object) [
				"@type" => "Place",
				"address" => (object) [
					"@type" => "PostalAddress",
					"addressLocality" => "Austin, Texas",
                    "addressRegion" => "TX",
				]
			],
			"logo" => (object) [
				"@type" => "ImageObject",
				"url" => SiteUtils::get_site_logo_image_src(),
			],
		];

		$jsonLDObject = json_encode($jsonLDObject);

		return !empty($jsonLDObject) ? $jsonLDObject : [];
	}
}
