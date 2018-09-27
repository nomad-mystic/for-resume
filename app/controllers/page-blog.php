<?php

namespace App;

use Sober\Controller\Controller;

class Blog extends Controller
{
	private $category = 'Blog';

	public function blogCategory():string
	{
		return $this->category;
	}
}
