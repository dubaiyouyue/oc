<?php namespace iswtf\setinfo\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Db;

class Mapview extends Controller
{
    public $implement = [    ];
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('iswtf.setinfo', 'main-menu-item', 'side-menu-item');
    }
	public function index(){
		$list = Db::table('iswtf_setinfo_sinfos')->first();
		
		$this->vars['longitude'] = $list->longitude;
		$this->vars['latitude'] = $list->latitude;
		$this->vars['company'] = $list->company;
		$this->vars['address'] = e(trans('iswtf.setinfo::lang.address')).': '.$list->address;
		$this->vars['tel'] = e(trans('iswtf.setinfo::lang.tel')).': '.$list->tel;
		
		//dump($list);exit;
		$this->pageTitle='iswtf.setinfo::lang.mapview';
		
	}
}
