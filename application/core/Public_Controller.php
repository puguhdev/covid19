<?php defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');
class Public_Controller extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_covid','covid');
	}

    public $vars = [
		'header' 	=> 'tmp/header',
		'content'	=> '',
		'title'		=> ''
	];

}

/* End of file Public_Controller.php */
