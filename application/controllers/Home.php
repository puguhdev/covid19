<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

	public function index()
	{
		$this->vars['coind'] 	= $this->covid->get_data();
		$this->vars['gpos'] 	= $this->covid->g_positif();
		$this->vars['gsem'] 	= $this->covid->g_sembuh();
		$this->vars['gmen'] 	= $this->covid->g_meninggal();

		
		$provinsi= file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
		$this->vars['total_provinsi']= json_decode($provinsi);

		$global= file_get_contents('https://api.kawalcorona.com');
		$this->vars['total_global']= json_decode($global);

		$this->vars['title'] 	= 'Data Nasional dan Global';
        $this->vars['content']  = 'public/home';
        $this->load->view('tmp/index', $this->vars);
	}

	// Provinsi Jawa Timur
	public function jatimprov()
	{
		$this->vars['title'] 	= 'Provinsi Jawa Timur';
        $this->vars['content']  = 'prov/jatim';
        $this->load->view('tmp/index', $this->vars);
	}

	/**
	 * Provinsi Nusa Tenggara Barat
	 */
	public function ntbprov()
	{
		$this->vars['title'] 	= 'Provinsi Nusa Tenggara Barat';
        $this->vars['content']  = 'prov/ntb';
        $this->load->view('tmp/index', $this->vars);
	}

	/**
	 * Provinsi Aceh
	 */
	public function acehprov()
	{
		$this->vars['title'] 	= 'Provinsi Aceh';
        $this->vars['content']  = 'prov/aceh';
        $this->load->view('tmp/index', $this->vars);
	}
}
