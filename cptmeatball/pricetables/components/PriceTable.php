<?php namespace Cptmeatball\Pricetables\Components;

use Cms\Classes\ComponentBase;
use Db;
use Cptmeatball\Pricetables\Models\PriceTable as PriceTables;
use Cptmeatball\Pricetables\Models\Price;

class PriceTable extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'PriceTable Component',
            'description' => 'Renders a pricetable'
        ];
    }

    public function defineProperties()
    {
        return [
            'name'     => [
                'title'         => 'Name',
                'type'          => 'string'
            ],
            'table'    => [
                'title'         => 'PriceTable',
                'type'          => 'dropdown',
                'placeholder'   => 'Select a table',
            ]
        ];
    }

    public function getTableOptions()
    {   
        return PriceTables::select('id', 'title')->orderBy('title')->get()->lists('title', 'id');
    }

    public function onRun(){
        $table = PriceTables::where('id', '=', $this->property('table'))->first();
        $json = json_decode(file_get_contents(__DIR__.'/../assets/json/currencies.json', true));
    
        $this->page['id'] = $this->property['name'];
        $this->page['table'] = $table;
        $this->page['currency'] = $json->{$table->currency}->symbol_native;
        $this->page['prices'] = Price::where('price_table_id', '=', $this->property('table'))->get();
    }
}