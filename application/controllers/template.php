<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class xxxxx extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_xxxxx');						/* CALL MODEL */
			$data['xxxxxData']=$this->model_xxxxx->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Xxxxx Management';
			$this->template->load('templates/template_admin', 'xxxxx/index', $data);
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

			$xxxxxData = array(
				'first_name' => $_POST['first_name'], /* [example, delete] */
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_xxxxx');						/* CALL MODEL */
				$this->model_xxxxx->create($xxxxxData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Xxxxx Created';
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

				//$this->load->model('model_xxxxx');						/* CALL MODEL */
				//$data['xxxxxData']=$this->model_xxxxx->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Xxxxx Management';
				$this->template->load('templates/template_admin', 'forms/create/createXxxxx', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_xxxxx');						/* CALL MODEL */
		$data['xxxxxData']=$this->model_xxxxx->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Xxxxx Management';
		$this->template->load('templates/template_one_column', 'xxxxx/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$xxxxx_id =$this->uri->segment(3);

		$data['pageTitle']='xxxxx Offered';
		$this->load->model('model_xxxxx');										/* CALL MODEL */
		$data['xxxxxData']=$this->model_xxxxx->getDetail($xxxxx_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_one_column', 'xxxxx/showDetail',$data);

	}

	function update(){

		$xxxxx_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$xxxxxData = array(
					'id' => $_POST['id'],
					'first_name' => $_POST['first_name'], /* [example, delete] */
				);

				$this->load->model('model_xxxxx');								/* CALL MODEL */
				$data['xxxxxData']=$this->model_xxxxx->update($xxxxxData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Xxxxx Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$xxxxx_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_xxxxx');									/* CALL MODEL */
				$data['xxxxxData']=$this->model_xxxxx->getDetail($xxxxx_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Xxxxx Management';
				$this->template->load('templates/template_admin', 'forms/update/updateXxxxx', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$xxxxx_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_xxxxx');									/* CALL MODEL */
			$this->model_xxxxx->delete($xxxxx_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Xxxxx Deleted';
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