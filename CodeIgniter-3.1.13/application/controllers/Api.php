<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index() {
        // Fetch data using GET method
        $getApiData = $this->fetchData('https://api.publicapis.org/entries', 'GET');
        $data['getApiData'] = $getApiData;

        // Fetch data using POST method
        $postApiData = $this->fetchData('https://api.publicapis.org/entries', 'POST', ['param1' => 'value1', 'param2' => 'value2']);
        $data['postApiData'] = $postApiData;

        $this->load->view('api/index', $data);
    }
    private function fetchData($url, $method, $postData = array()) {
        $ch = curl_init();

        if ($method === 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        }

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }
}
