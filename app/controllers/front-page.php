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
    /**
     * @author Keith Murphy | nomadmystics@gmail.com
     * @description Get option values from Create Impact Settings options admin page
     * @return array
     */
    public function get_create_impact_options (): array
    {
        if (class_exists('App\PassionPlugins\HomeSettings\PassionCreateImpactHomeSettings')) {
            $values = get_option('passion_create_impact_options');

            return $values;
        }

        return [];
    }
}
