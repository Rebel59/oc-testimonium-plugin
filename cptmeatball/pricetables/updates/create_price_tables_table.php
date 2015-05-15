<?php namespace Cptmeatball\Pricetables\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePriceTablesTable extends Migration
{

    public function up()
    {
        Schema::create('cptmeatball_pricetables_price_tables', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->string('description', 255);
            $table->string('currency', 255);
            $table->string('price_description', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cptmeatball_pricetables_price_tables');
    }

}
