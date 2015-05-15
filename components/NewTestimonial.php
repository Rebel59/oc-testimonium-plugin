<?php namespace Cptmeatball\Testimonium\Components;

use Cms\Classes\ComponentBase;
use Mail;
use Validator;
use Cptmeatball\Testimonium\Models\Testimonial;

class NewTestimonial extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Testimonial Input',
            'description' => 'Makes it possible for visitors to leave a testimonial.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->addCss('/plugins/cptmeatball/testimonium/assets/css/bootstrap-datepicker3.standalone.min.css');
        $this->addJs('/plugins/cptmeatball/testimonium/assets/js/bootstrap-datepicker.min.js');
        $this->addJs('/plugins/cptmeatball/testimonium/assets/js/bootstrap-datepicker.en-GB.min.js');
        $this->addJs('/plugins/cptmeatball/testimonium/assets/js/testimonium-datepicker.js');
    }

    public function onContactSend()
    {
         $rules = [
            'author' => 'required',
            'mail' => 'required|email',
            '_message' => 'required|min:10',
            'arrival' => 'required|date',
            'departure' => 'required|date',
            'mark' => 'required|numeric'
        ];
        $post = post();

        $validator = Validator::make($post, $rules);
        if($validator->fails()){
            foreach(array_keys($validator->failed()) as $error){
                $errors[$error] = "1";
            }
            //print_r($validator->messages());
            $this->page['errors'] = $errors;
            //$this->page['success']
            $this->page['post'] = post();
        }else{
            $testimonial = new Testimonial;
            $testimonial->author = $post['author'];
            $testimonial->email = $post['mail'];
            $testimonial->message = $post['_message'];
            $testimonial->arrival = date('Y-m-d', strtotime($post['arrival']));
            $testimonial->departure = date('Y-m-d', strtotime($post['departure']));
            $testimonial->mark = $post['mark'];
            $testimonial->approved = 0;

            if($testimonial->save()){
                $post['id'] = $testimonial->id;
                Mail::send('cptmeatball.testimonium::mail.message', $post, function($message)
                {
                    $message->to('office@hausholunder.at', "Gastenboek Haus Holunder");
                });

                $this->page['success'] = "1";
            }

        }
    }

}