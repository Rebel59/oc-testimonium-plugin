<?php namespace Cptmeatball\Testimonium\Components;

use Cms\Classes\ComponentBase;
use Cptmeatball\Testimonium\Models\Testimonial;

class Testimonials extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Testimonials Overview',
            'description' => 'Displays a list of testimonials on the page.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->addCss('/plugins/cptmeatball/testimonium/assets/css/testimonium.base.css');
        $testimonials = Testimonial::where('approved', '=', '1')->get();
        $this->page['testimonials'] = $testimonials;
    }

}