<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('no1/index.php');
	}
	public function submit()
	{
		$input_text = $this->input->post('text');

        $reversed_text = $this->reverse_string($input_text);

        $data['reversed_text'] = $reversed_text;
        $this->load->view('no1/submit', $data);
	}
	private function reverse_string($string)
    {
        $length = strlen($string);
        $reversed_string = '';

        for ($i = $length - 1; $i >= 0; $i--) {
            $reversed_string .= $string[$i];
        }

        return $reversed_string;
    }
}
