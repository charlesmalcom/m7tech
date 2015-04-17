<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index() {

		//$this->output->cache(60);									/* ENABLE CACHE */

		$this->load->model('model_services');
		$data['serviceData']=$this->model_services->getServices();

		$this->load->model('model_calendar');						/* CALL MODEL */
		//$data['calendarData']=$this->model_calendar->listEvents();	/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_news');							/* CALL MODEL */
		$data['newsData']=$this->model_news->getCurrent();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Services';
		//$this->template->load('templates/template_one_column', 'services/index', $data);
		$this->template->load('templates/template_two_column', 'services/services', $data);
	}

	public function servicesDetail(){

		$serviceID = $this->uri->segment(3);

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_calendar');							/* CALL MODEL */
		//$data['calendarData']=$this->model_calendar->listEvents();	/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_services');							/* CALL MODEL */
		$data['serviceData']=$this->model_services->getServiceDetail($serviceID);		/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Services - Detail';
		$this->template->load('templates/template_one_column', 'services/serviceDetail', $data);

	}

	function data_management(){

		//$this->output->cache(60);								/* ENABLE CACHE */

		$this->load->model('model_calendar');						/* CALL MODEL */
		//$data['calendarData']=$this->model_calendar->listEvents();	/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_news');						/* CALL MODEL */
		$data['newsData']=$this->model_news->listNews();		/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Services - Data Management';
		$this->template->load('templates/template_one_column', 'services/data_management', $data);
	}

	function desktop_server(){

		//$this->output->cache(60);								/* ENABLE CACHE */

		$this->load->model('model_calendar');						/* CALL MODEL */
		//$data['calendarData']=$this->model_calendar->listEvents();	/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_news');						/* CALL MODEL */
		$data['newsData']=$this->model_news->listNews();		/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Services - Desktop & Server';
		$this->template->load('templates/template_one_column', 'services/desktop_server', $data);
	}

	function hardware_software(){

		//$this->output->cache(60);								/* ENABLE CACHE */

		$this->load->model('model_calendar');						/* CALL MODEL */
		//$data['calendarData']=$this->model_calendar->listEvents();	/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_news');						/* CALL MODEL */
		$data['newsData']=$this->model_news->listNews();		/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Services - Hardwas & Software';
		$this->template->load('templates/template_one_column', 'services/hardware_software', $data);
	}

	function network_support(){

		//$this->output->cache(60);								/* ENABLE CACHE */

		$this->load->model('model_calendar');						/* CALL MODEL */
		//$data['calendarData']=$this->model_calendar->listEvents();	/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_news');						/* CALL MODEL */
		$data['newsData']=$this->model_news->listNews();		/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Services - Network Support';
		$this->template->load('templates/template_one_column', 'services/network_support', $data);
	}

	function web_design_programming(){

		//$this->output->cache(60);								/* ENABLE CACHE */

		$this->load->model('model_calendar');						/* CALL MODEL */
		//$data['calendarData']=$this->model_calendar->listEvents();	/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_news');						/* CALL MODEL */
		$data['newsData']=$this->model_news->listNews();		/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Services - Web Design & Programming';
		$this->template->load('templates/template_one_column', 'services/web_design_programming', $data);
	}

	function _template(){

		//$this->output->cache(60);								/* ENABLE CACHE */

		$this->load->model('model_calendar');						/* CALL MODEL */
		//$data['calendarData']=$this->model_calendar->listEvents();	/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_news');						/* CALL MODEL */
		$data['newsData']=$this->model_news->listNews();		/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Services -';
		$this->template->load('templates/template_one_column', 'services/', $data);
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */