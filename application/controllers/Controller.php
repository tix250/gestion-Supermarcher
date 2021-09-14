<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/controllers
	 *	- or -
	 * 		http://example.com/index.php/controllers/index2
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/controllers/<index>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($ketrika ='')
	{
		echo "mety " . $ketrika;
		
	}
	public function bonjour($ketrika ='')
	{
		echo "mety " . $ketrika;
		
	}
}
