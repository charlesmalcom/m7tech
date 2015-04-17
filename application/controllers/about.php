<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index() {

		//$this->output->cache(60);								/* ENABLE CACHE */

		$this->load->model('model_calendar');						/* CALL MODEL */
		//$data['calendarData']=$this->model_calendar->listEvents();	/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_news');						/* CALL MODEL */
		$data['newsData']=$this->model_news->getCurrent();		/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='About Us';
		$this->template->load('templates/template_two_column', 'siteindex/about', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */