<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_about extends CI_Controller {
	function __construct(){
		parent::__construct();
		
	}
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
	 * @seehttps://codeigniter.com/user_guide/general/urls.html
	 */
	public function about()
	{
		$this->load->view('v_about');
	}
	
}

