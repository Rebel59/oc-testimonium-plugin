<?php namespace Cptmeatball\Testimonium\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTestimonialsTable extends Migration
{

    public function up()
    {
        Schema::create('cptmeatball_testimonium_testimonials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('author');
            $table->string('email');
            $table->text('message');
            $table->date('arrival');
            $table->date('departure');
            $table->integer('mark');
            $table->boolean('approved');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cptmeatball_testimonium_testimonials');
    }

}
