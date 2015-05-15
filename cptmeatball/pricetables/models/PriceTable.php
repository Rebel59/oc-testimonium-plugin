<?php namespace Cptmeatball\Pricetables\Models;

use Model;

/**
 * PriceTable Model
 */
class PriceTable extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'cptmeatball_pricetables_price_tables';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['price', 'description'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'prices' => ['Cptmeatball\Pricetables\Models\Price']
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getCurrencyOptions(){
        $json = json_decode(file_get_contents(__DIR__.'/../assets/json/currencies.json', true));

        foreach($json as $key => $currency){
            $currencies[$currency->code] = $currency->symbol_native." ($currency->code)";
        }
        return $currencies;
    }

}