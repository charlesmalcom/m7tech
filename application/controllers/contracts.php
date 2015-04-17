<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contracts extends CI_Controller {

	function index(){

		//$this->output->cache(60);														/* ENABLE CACHE */

		$this->load->model('model_security');											/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();								/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_contracts');										/* CALL MODEL */
			$data['contractsData']=$this->model_contracts->getAll();					/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Contracts Management';
			$this->template->load('templates/template_admin', 'contracts/index', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function create(){

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);														/* ENABLE CACHE */

			$contractsData = array(
				'first_name' => $_POST['first_name'], /* [example, delete] */
			);

			$this->load->model('model_security');											/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();								/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_contracts');										/* CALL MODEL */
				$this->model_contracts->create($contractsData);								/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Contracts Created';
				$this->template->load('templates/template_admin', 'messages/successCreate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}
		else{
			/* show form */

			//$this->output->cache(60);														/* ENABLE CACHE */

			$this->load->model('model_security');											/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();								/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				//$this->load->model('model_options');
				//$data['optionYN']=$this->model_options->getOptionsYN();

				//$this->load->model('model_contracts');									/* CALL MODEL */
				//$data['contractsData']=$this->model_contracts->getAll();					/* GET DATA FROM MODEL & PASS TO VIEW */

				$this->load->model('model_options');										/* CALL MODEL */
				//$data['currentBusinessData']=$this->model_options->getBusinessInfo();					/* GET DATA FROM MODEL & PASS TO VIEW */
				$data['currentClientData']=$this->model_options->getCurrentClientsDD();					/* GET DATA FROM MODEL & PASS TO VIEW */
				//$data['currentcontractData']=$this->model_options->getContractTypes();				/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Contracts Management';
				$this->template->load('templates/template_admin', 'forms/create/createContract', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);														/* ENABLE CACHE */

		$this->load->model('model_contracts');											/* CALL MODEL */
		$data['contractsData']=$this->model_contracts->getAll();						/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Contracts Management';
		$this->template->load('templates/template_one_column', 'contracts/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);														/* ENABLE CACHE */

		$contracts_id =$this->uri->segment(3);

		$data['pageTitle']='contracts Offered';
		$this->load->model('model_contracts');											/* CALL MODEL */
		$data['contractsData']=$this->model_contracts->getDetail($contracts_id);		/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_one_column', 'contracts/showDetail',$data);

	}

	function update(){

		$contracts_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);													/* ENABLE CACHE */

			$this->load->model('model_security');										/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();							/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$contractsData = array(
					'id' => $_POST['id'],
					'first_name' => $_POST['first_name'], /* [example, delete] */
				);

				$this->load->model('model_contracts');									/* CALL MODEL */
				$data['contractsData']=$this->model_contracts->update($contractsData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Contracts Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$contracts_id = $this->uri->segment(3);

			//$this->output->cache(60);													/* ENABLE CACHE */

			$this->load->model('model_security');										/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();							/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_contracts');										/* CALL MODEL */
				$data['contractsData']=$this->model_contracts->getDetail($contracts_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Contracts Management';
				$this->template->load('templates/template_admin', 'forms/update/updateContract', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$contracts_id = $this->uri->segment(3);

		//$this->output->cache(60);													/* ENABLE CACHE */

		$this->load->model('model_security');										/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();							/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_contracts');									/* CALL MODEL */
			$this->model_contracts->delete($contracts_id);							/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Contracts Deleted';
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