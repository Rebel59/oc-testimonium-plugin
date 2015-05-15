<?php namespace Cptmeatball\Pivot\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePivotTable extends Migration
{

    public function up()
    {
        Schema::create('cptmeatball_pivot_pivot', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('movie_id');
            $table->integer('actor_id');
            $table->timestamps();
        });
    }

     Schema::table('cptmeatball_pricetables_prices', function($table)
        {

            $table->foreign('movie_id')
            ->references('id')->on('cptmeatball_pivot_movies')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });

    public function down()
    {
        Schema::dropIfExists('cptmeatball_pivot_actors');
    }

}
