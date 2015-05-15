<?php namespace Cptmeatball\Testimonium;

use System\Classes\PluginBase;
use Backend;

/**
 * testimonium Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Testimonium',
            'description' => 'Testimonial Plugin',
            'author'      => 'cptmeatball',
            'icon'        => 'icon-heart'
        ];
    }

    public function registerComponents()
    {
        return [
            'Cptmeatball\Testimonium\Components\Testimonials' => 'Testimonial',
            'Cptmeatball\Testimonium\Components\NewTestimonial' => 'NewTestimonial',
        ];
    }

    public function registerPermissions()
    {
        return [
            'cptmeatball.testimonium.access_testimonials'       => ['tab' => 'Testimonium', 'label' => 'Testimonium'],
        ];
    }
    
    public function registerNavigation()
    {
        return [
            'testimonium' => [
                'label' => 'Gastenboek',
                'url' => Backend::url('cptmeatball/testimonium/testimonials'),
                'permissions' => ['cptmeatball.testimonium'],
                'icon' => 'icon-heart'
            ]
        ];
    }
}
