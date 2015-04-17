<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class appsecurity extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_appsecurity');						/* CALL MODEL */
			$data['appSecurityData']=$this->model_appsecurity->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Security Management';
			$this->template->load('templates/template_admin', 'appsecurity/index', $data);
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

			$appSecurityData = array(
				'directory' => $_POST['directory'],
				'type' => $_POST['type'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_appsecurity');						/* CALL MODEL */
				$this->model_appsecurity->create($appSecurityData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Security Created';
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
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_options');
				$data['optSecurityGroups']=$this->model_options->getGroups();

				$data['pageTitle']='Security Management';
				$this->template->load('templates/template_admin', 'forms/create/createAppSecurity', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_appsecurity');						/* CALL MODEL */
		$data['appSecurityData']=$this->model_appsecurity->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Security Management';
		$this->template->load('templates/template_one_column', 'appsecurity/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$appsecurity_id =$this->uri->segment(3);

		$data['pageTitle']='appsecurity Offered';
		$this->load->model('model_appsecurity');										/* CALL MODEL */
		$data['appSecurityData']=$this->model_appsecurity->getDetail($appsecurity_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_one_column', 'appsecurity/showDetail',$data);

	}

	function update(){

		$appsecurity_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$appSecurityData = array(
					'id' => $_POST['id'],
					'directory' => $_POST['directory'],
					'type' => $_POST['type'],
				);

				$this->load->model('model_appsecurity');								/* CALL MODEL */
				$data['appSecurityData']=$this->model_appsecurity->update($appSecurityData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Security Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$appsecurity_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_options');
				$data['optSecurityGroups']=$this->model_options->getGroups();

				$this->load->model('model_appsecurity');									/* CALL MODEL */
				$data['appSecurityData']=$this->model_appsecurity->getDetail($appsecurity_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Security Management';
				$this->template->load('templates/template_admin', 'forms/update/updateAppSecurity', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$appsecurity_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_appsecurity');									/* CALL MODEL */
			$this->model_appsecurity->delete($appsecurity_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Security Deleted';
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