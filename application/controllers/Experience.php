<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experience extends CI_Controller {

	public function index()
	{
		$this->load->view ( 'templates/header' );
		$this->load->view('experience');
		$this->load->view ( 'templates/footer' );
	}
}
