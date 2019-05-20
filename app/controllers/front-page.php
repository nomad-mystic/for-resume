<?php

namespace App;

use Sober\Controller\Controller;

/**
 * @author Keith Murphy | nomadmystics@gmail.com
 * Class FrontPage
 * @package App
 */
class FrontPage extends Controller
{
    public function get_create_impact_options ()
    {
        $values = get_option('passion_create_impact_options');
        var_dump($values);
        return $values;
//        var_dump($values);
//        if (class_exists('App\PassionPlugins\HomeSettings\PassionCreateImpactHomeSettings')) {
//
//        }
    }
}
