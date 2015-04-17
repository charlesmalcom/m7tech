<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class services extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_services');						/* CALL MODEL */
			$data['servicesData']=$this->model_services->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Services Management';
			$this->template->load('templates/template_admin', 'services/index', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function create(){

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);										/* ENABLE CACHE */

			$servicesData = array(
				'title' => $_POST['title'],
				'descriptionShort' => $_POST['descriptionShort'],
				'descriptionLong' => $_POST['descriptionLong'],
				'show' => $_POST['show'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_services');						/* CALL MODEL */
				$this->model_services->create($servicesData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Services Created';
				$this->template->load('templates/template_admin', 'messages/successCreate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}
		else{
			/* show form */

			//$this->output->cache(60);										/* ENABLE CACHE */

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optYN']=$this->model_options->getOptionsYN();

				//$this->load->model('model_services');						/* CALL MODEL */
				//$data['servicesData']=$this->model_services->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Services Management';
				$this->template->load('templates/template_admin', 'forms/create/createService', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_news');							/* CALL MODEL */
		$data['newsData']=$this->model_news->getCurrent();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_services');						/* CALL MODEL */
		$data['servicesData']=$this->model_services->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Services Management';
		$this->template->load('templates/template_two_column', 'services/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$services_id =$this->uri->segment(3);

		$this->load->model('model_news');							/* CALL MODEL */
		$data['newsData']=$this->model_news->getCurrent();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_services');										/* CALL MODEL */
		$data['servicesData']=$this->model_services->getDetail($services_id);		/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Services - Detailed Information';
		$this->template->load('templates/template_admin', 'services/showDetail',$data);

	}

	function infoPublic(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$services_id =$this->uri->segment(3);

		$this->load->model('model_news');							/* CALL MODEL */
		$data['newsData']=$this->model_news->getCurrent();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_services');										/* CALL MODEL */
		$data['servicesData']=$this->model_services->getDetail($services_id);		/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Services - Detailed Information';
		$this->template->load('templates/template_two_column', 'services/showDetail',$data);

	}

	function update(){

		$services_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$servicesData = array(
					'id' => $_POST['id'],
					'title' => $_POST['title'],
					'descriptionShort' => $_POST['descriptionShort'],
					'descriptionLong' => $_POST['descriptionLong'],
					'show' => $_POST['show'],
				);

				$this->load->model('model_services');								/* CALL MODEL */
				$data['servicesData']=$this->model_services->update($servicesData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Services Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$services_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_services');									/* CALL MODEL */
				$data['servicesData']=$this->model_services->getDetail($services_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Services Management';
				$this->template->load('templates/template_admin', 'forms/update/updateService', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$services_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_services');								/* CALL MODEL */
			$this->model_services->delete($services_id);						/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Services Deleted';
			$this->template->load('templates/template_admin', 'messages/successDelete', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */