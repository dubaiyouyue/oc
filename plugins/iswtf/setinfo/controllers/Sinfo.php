<?php namespace iswtf\setinfo\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Sinfo extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('iswtf.setinfo', 'main-menu-item', 'side-menu-item2');
    }
	
	public function index(){
		
		$this->update(1);
	}
	
	public function create(){
		$this->update(1);
	}
	
}
