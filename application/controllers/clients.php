<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		//check to see if 2nd parameter is passed for sorting

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_clients');						/* CALL MODEL */
			$data['clientData']=$this->model_clients->getAll(NULL);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Clients Management';
			$this->template->load('templates/template_admin', 'clients/show', $data);
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

			$clientData = array(
				'county' => $_POST['county'],
				'category' => $_POST['category'],
				'businessName' => $_POST['businessName'],
				'address' => $_POST['address'],
				'city' => $_POST['city'],
				'state' => $_POST['state'],
				'zip' => $_POST['zip'],
				'phone' => $_POST['phone'],
				'url' => $_POST['url'],
				'googleUrl' => $_POST['googleUrl'],
				'facebookUrl' => $_POST['facebookUrl'],
				'notes' => $_POST['notes'],
				'emailSent' => $_POST['emailSent'],
				'flierSent' => $_POST['flierSent'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_clients');						/* CALL MODEL */
				$this->model_clients->create($clientData);				/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Clients Created';
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

				//$this->load->model('model_clients');						/* CALL MODEL */
				//$data['clientData']=$this->model_clients->getAll();	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Clients Management';
				$this->template->load('templates/template_admin', 'forms/create/createClient', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$sortBy=$this->uri->segment(3);

		$this->load->model('model_clients');							/* CALL MODEL */
		$data['clientData']=$this->model_clients->getAll($sortBy);				/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Clients Management';
		$this->template->load('templates/template_admin', 'clients/show', $data);


	}

	function showCurrent(){

		//$this->output->cache(60);											/* ENABLE CACHE */

		$this->load->model('model_clients');								/* CALL MODEL */
		$data['clientData']=$this->model_clients->getCurrent();				/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Clients Management';
		$this->template->load('templates/template_admin', 'clients/show', $data);

	}

	/* showDetail */
	function info(){

		//$this->output->cache(60);																/* ENABLE CACHE */

		$client_id=$this->uri->segment(3);

		$data['pageTitle']='Detailed Client Information';
		$this->load->model('model_clients');													/* CALL MODEL */
		$data['clientData']=$this->model_clients->getDetail($client_id);						/* GET DATA FROM MODEL & PASS TO VIEW */
		$data['clientAccountData']=$this->model_clients->getClientAccountInfo($client_id);		/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_admin', 'clients/showDetail2',$data);

	}

	function update(){

		$student_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$clientData = array(
					'id' => $_POST['id'],
					'county' => $_POST['county'],
					'category' => $_POST['category'],
					'businessName' => $_POST['businessName'],
					'address' => $_POST['address'],
					'city' => $_POST['city'],
					'state' => $_POST['state'],
					'zip' => $_POST['zip'],
					'phone' => $_POST['phone'],
					'url' => $_POST['url'],
					'googleUrl' => $_POST['googleUrl'],
					'facebookUrl' => $_POST['facebookUrl'],
					'notes' => $_POST['notes'],
					'emailSent' => $_POST['emailSent'],
					'flierSent' => $_POST['flierSent'],
					'haveBusiness' => $_POST['haveBusiness'],
				);

				$this->load->model('model_clients');								/* CALL MODEL */
				$data['clientData']=$this->model_clients->update($clientData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Clients Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$client_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_clients');									/* CALL MODEL */
				$data['clientData']=$this->model_clients->getDetail($client_id);	/* GET DATA FROM MODEL & PASS TO VIEW */
				$data['clientAccountData']=$this->model_clients->getClientAccountInfo($client_id);			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Clients Management';
				$this->template->load('templates/template_admin', 'forms/update/updateClient', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$student_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_clients');									/* CALL MODEL */
			$this->model_clients->delete($student_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Clients Deleted';
			$this->template->load('templates/template_admin', 'messages/successDelete', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function getBusinessNames(){

		$this->load->model('model_clients');											/* CALL MODEL */
		$search = $this->input->post('search');
		$query = $this->model_clients->getBusinessNames($search);
		echo json_encode ($query);

	}

	function search(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		//$this->load->model('model_options');						/* CALL MODEL */
		//$data['optBookmarksData']=$this->model_options->getBookmarksCategory();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Client Search';
		$this->template->load('templates/template_admin', 'forms/search/searchClients', $data);

	}

	function results(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_options');						/* CALL MODEL */

		$this->load->model('model_clients');						/* CALL MODEL */
		$data['clientData']=$this->model_clients->search();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Client Search Results';
		$this->template->load('templates/template_admin', 'clients/show', $data);

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */