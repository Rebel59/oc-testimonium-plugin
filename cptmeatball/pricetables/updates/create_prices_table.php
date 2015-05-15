<?php namespace Cptmeatball\Pricetables\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePricesTable extends Migration
{

    public function up()
    {
        Schema::create('cptmeatball_pricetables_prices', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // $table->integer('price_table_category')->unsigned();
            $table->integer('price_table_id')->unsigned();
            $table->string('description', 255);
            $table->string('price', 10);
            $table->timestamps();
        });

        Schema::table('cptmeatball_pricetables_prices', function($table)
        {
            // $table->foreign('price_table_category')
            // ->references('id')->on('cptmeatball_pricetables_categories')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');

            $table->foreign('price_table_id')
            ->references('id')->on('cptmeatball_pricetables_price_tables')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cptmeatball_pricetables_prices');
    }

}
