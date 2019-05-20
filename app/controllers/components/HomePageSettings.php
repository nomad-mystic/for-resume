<?php

namespace App\Controller\Components;

use Sober\Controller\Controller;
use App\PassionPlugins\HomeSettings\PassionCreateImpactHomeSettings as CreateImpact;

/**
 * @author Keith Murphy | nomadmystics@gmail.com
 * Class HomePageSettings
 * @package App\Controller\Components
 */
class HomePageSettings extends Controller
{
    static public function get_create_impact_options ()
    {
        $values = get_option('passion_create_impact_options');

        var_dump($values);
        if (class_exists('App\PassionPlugins\HomeSettings\PassionCreateImpactHomeSettings')) {

        }
    }
}
