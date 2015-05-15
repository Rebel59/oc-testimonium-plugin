<?php namespace Cptmeatball\Pricetables\Controllers;

use Backend\Classes\Controller;
use Lang;
use Flash;
use BackendMenu;
use Cptmeatball\Pricetables\Models\Pricetable;
use Cptmeatball\Pricetables\Models\Price;

class Prices extends Controller {

	public $implement = ['Backend.Behaviors.FormController',
                         'Backend.Behaviors.ListController',
                         'Backend.Behaviors.RelationController'];

	public $listConfig = 'list_config.yaml';
	public $formConfig = 'form_config.yaml';
    public $relationConfig = 'config_relation.yaml';

	public function __construct()
	{
		parent::__construct();

		BackendMenu::setContext('Cptmeatball.Pricetables', 'pricetables', 'prices');
	}

	public function index()
	{ 
		$this->asExtension('ListController')->index();
	}

	public function index_onDelete()
    {
        if (($checkedIds = post('checked'))) {
            foreach ($checkedIds as $itemId) {
                if ((!$table = Pricetable::find($itemId)))
                    continue;
                $table->delete();
            }
            Flash::success('Successfully deleted those tables.');
        }else{
        	Flash::error('Something just went wrong! :(');
        }
        return $this->listRefresh();
    }
}