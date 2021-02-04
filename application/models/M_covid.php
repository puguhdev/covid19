<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
use GuzzleHttp\Client;
class M_covid extends CI_Model {

    public function get_data()
    {
        $client = new Client();
		$response = $client->request('GET', 'https://api.kawalcorona.com/indonesia');
		return json_decode( $response->getBody()->getContents(), true);
    }

    public function g_positif()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.kawalcorona.com/positif');
		return json_decode($response->getBody()->getContents(), true);
    }

    public function g_sembuh()
    {
        $client = new Client();
		$response = $client->request('GET', 'https://api.kawalcorona.com/sembuh');
		return json_decode( $response->getBody()->getContents(), true);
    }

    public function g_meninggal()
    {
        $client = new Client();
		$response = $client->request('GET', 'https://api.kawalcorona.com/meninggal');
		return json_decode( $response->getBody()->getContents(), true);
    }

}

/* End of file M_covid.php */
