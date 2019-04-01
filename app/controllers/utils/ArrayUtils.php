<?php

namespace App\Utils;

/**
 * @author Keith Murphy | nomadmystics@gmail.com
 * @description This will be all of the utils for arrays that are needed in controllers and templates
 * Class ArrayUtils
 * @package App\Utils
 */
class ArrayUtils
{
	/**
	 * @author Keith Murphy | nomadmystics@gmail.com
	 * @description This will flatten the array for pushing to final returned array
	 * @see https://stackoverflow.com/questions/1319903/how-to-flatten-a-multidimensional-array/14972389
	 * @param array $array
	 * @return array
	 */
	static public function flatten(array $array): array
	{
		$return = [];

		array_walk_recursive($array, function($a) use (&$return) {
			$return[] = $a;
		});

		return $return;
	}
}