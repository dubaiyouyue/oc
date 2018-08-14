<?php namespace iswtf\setinfo\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Mapcoordinate extends Controller
{
    public $implement = [    ];
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('iswtf.setinfo', 'main-menu-item', 'mapcoordinate');
    }
	
	public function index(){
		/*echo 'dsaf';
		exit;*/
		$this->pageTitle='iswtf.setinfo::lang.mapcoordinate';
		
	}
}
