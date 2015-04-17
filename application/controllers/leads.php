<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class leads extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_leads');						/* CALL MODEL */
			$data['leadsData']=$this->model_leads->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Leads Management';
			$this->template->load('templates/template_admin', 'leads/index', $data);
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

			$leadsData = array(
				'initialDate' => $_POST['initialDate'],
				'companyName' => $_POST['companyName'],
				'firstName' => $_POST['firstName'],
				'lastName' => $_POST['lastName'],
				'city' => $_POST['city'],
				'state' => $_POST['state'],
				'email' => $_POST['email'],
				'phone' => $_POST['phone'],
				'postedDate' => $_POST['postedDate'],
				'url' => $_POST['url'],
				'wagePaid' => $_POST['wagePaid'],
				'hours' => $_POST['hours'],
				'description' => $_POST['description'],
				'blurb' => $_POST['blurb'],
				'response' => $_POST['response'],
				'responseDate' => $_POST['responseDate'],
				'contacted' => $_POST['contacted'],
				'contactedDate' => $_POST['contactedDate'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_leads');						/* CALL MODEL */
				$this->model_leads->create($leadsData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Leads Created';
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
				$data['optStates']=$this->model_options->getStates();

				//$this->load->model('model_leads');						/* CALL MODEL */
				//$data['leadsData']=$this->model_leads->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Leads Management';
				$this->template->load('templates/template_admin', 'forms/create/createLead', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_leads');						/* CALL MODEL */
		$data['leadsData']=$this->model_leads->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Leads Management';
		$this->template->load('templates/template_one_column', 'leads/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$leads_id =$this->uri->segment(3);

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_leads');						/* CALL MODEL */
			$data['leadsData']=$this->model_leads->getDetail($leads_id);		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Leads Management';
			$this->template->load('templates/template_admin', 'leads/showDetail', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}


	}

	function update(){

		$leads_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$leadsData = array(
					'id' => $_POST['id'],
					'initialDate' => $_POST['initialDate'],
					'companyName' => $_POST['companyName'],
					'firstName' => $_POST['firstName'],
					'lastName' => $_POST['lastName'],
					'city' => $_POST['city'],
					'state' => $_POST['state'],
					'email' => $_POST['email'],
					'phone' => $_POST['phone'],
					'postedDate' => $_POST['postedDate'],
					'url' => $_POST['url'],
					'wagePaid' => $_POST['wagePaid'],
					'hours' => $_POST['hours'],
					'description' => $_POST['description'],
					'blurb' => $_POST['blurb'],
					'response' => $_POST['response'],
					'responseDate' => $_POST['responseDate'],
					'contacted' => $_POST['contacted'],
					'contactedDate' => $_POST['contactedDate'],
				);

				$this->load->model('model_leads');								/* CALL MODEL */
				$data['leadsData']=$this->model_leads->update($leadsData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Leads Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$leads_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optYN']=$this->model_options->getOptionsYN();
				$data['optStates']=$this->model_options->getStates();

				$this->load->model('model_leads');									/* CALL MODEL */
				$data['leadsData']=$this->model_leads->getDetail($leads_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Leads Management';
				$this->template->load('templates/template_admin', 'forms/update/updateLead', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$leads_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_leads');									/* CALL MODEL */
			$this->model_leads->delete($leads_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Leads Deleted';
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