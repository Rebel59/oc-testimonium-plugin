<?php namespace Cptmeatball\Pricetables;

use System\Classes\PluginBase;
use CptMeatball\PriceTables\Models;
use Backend;
use Controller;
/**
 * pricetables Plugin Information File
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
            'name'        => 'cptmeatball.pricetables::lang.plugin.name',
            'description' => 'cptmeatball.pricetables::lang.plugin.description',
            'author'      => 'cptmeatball',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Cptmeatball\Pricetables\Components\PriceTable' => 'PriceTable'
        ];
    }

    public function registerPermissions()
    {
        return [
            'cptmeatball.pricetables.access_prices'       => ['tab' => 'PriceTables', 'label' => 'Price'],
            'cptmeatball.pricetables.access_categories'  => ['tab' => 'Blog', 'label' => 'Category'],
            'cptmeatball.pricetables.access_currency' => ['tab' => 'Blog', 'label' => 'Currency']
        ];
    }
    
    public function registerNavigation()
    {
        return [
            'pricetables' => [
                'label' => 'cptmeatball.pricetables::lang.plugin.name',
                'url' => Backend::url('cptmeatball/pricetables/prices'),
                'permissions' => ['cptmeatball.pricetables'],
                'icon' => 'icon-table',
                    
                'sideMenu' => [
                    'prices' => [
                        'label' => 'cptmeatball.pricetables::lang.navigation.title.price',
                        'icon'  => 'icon-money',
                        'url'   => Backend::url('cptmeatball/pricetables/prices'),
                        'permissions' => ['cptmeatball.pricetables.access_prices']
                    ],
                    // 'categories' => [
                    //     'label' => 'cptmeatball.pricetables::lang.navigation.title.category',
                    //     'icon'  => 'icon-money',
                    //     'url'   => Backend::url('cptmeatball/pricetables/categories'),
                    //     'permissions' => ['cptmeatball.pricetables.access_categories']
                    // ]                
                ]
            ]
        ];
    }
}
