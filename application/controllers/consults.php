<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class consults extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_consults');						/* CALL MODEL */
			$data['consultsData']=$this->model_consults->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Consults Management';
			$this->template->load('templates/template_admin', 'consults/index', $data);
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

			$consultsData = array(
				'first_name' => $_POST['first_name'], /* [example, delete] */
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_consults');						/* CALL MODEL */
				$this->model_consults->create($consultsData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Consults Created';
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

				//$this->load->model('model_consults');						/* CALL MODEL */
				//$data['consultsData']=$this->model_consults->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Consults Management';
				$this->template->load('templates/template_admin', 'forms/create/createConsult', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_consults');						/* CALL MODEL */
		$data['consultsData']=$this->model_consults->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Consults Management';
		$this->template->load('templates/template_one_column', 'consults/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$consults_id =$this->uri->segment(3);

		$data['pageTitle']='consults Offered';
		$this->load->model('model_consults');										/* CALL MODEL */
		$data['consultsData']=$this->model_consults->getDetail($consults_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_one_column', 'consults/showDetail',$data);

	}

	function update(){

		$consults_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$consultsData = array(
					'id' => $_POST['id'],
					'first_name' => $_POST['first_name'], /* [example, delete] */
				);

				$this->load->model('model_consults');								/* CALL MODEL */
				$data['consultsData']=$this->model_consults->update($consultsData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Consults Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$consults_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_consults');									/* CALL MODEL */
				$data['consultsData']=$this->model_consults->getDetail($consults_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Consults Management';
				$this->template->load('templates/template_admin', 'forms/update/updateConsult', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$consults_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_consults');									/* CALL MODEL */
			$this->model_consults->delete($consults_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Consults Deleted';
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