<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bills extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_bills');						/* CALL MODEL */
			$data['billsData']=$this->model_bills->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Bills Management';
			$this->template->load('templates/template_admin', 'bills/index', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function createExpense(){

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);										/* ENABLE CACHE */

			$billsData = array(
				'type' => $_POST['type'],
				'payee' => $_POST['payee'],
				'accountNumber' => $_POST['accountNumber'],
				'category' => $_POST['category'],
				'dueDate' => $_POST['dueDate'],
				'paidDate' => $_POST['paidDate'],
				'amount' => $_POST['amount'],
				'status' => $_POST['status'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_bills');						/* CALL MODEL */
				$this->model_bills->create($billsData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Bills Created';
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
				$data['optPayee']=$this->model_options->getPayee();			/* GET DATA FROM MODEL & PASS TO VIEW */
				$data['optBillStatus']=$this->model_options->getBillStatus();			/* GET DATA FROM MODEL & PASS TO VIEW */
				$data['optCategory']=$this->model_options->getBookmarksCategory();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Bills Management';
				$this->template->load('templates/template_admin', 'forms/create/createExpense', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function createIncome(){

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);										/* ENABLE CACHE */

			$billsData = array(
				'type' => $_POST['type'],
				'payee' => $_POST['payee'],
				'accountNumber' => $_POST['accountNumber'],
				'category' => $_POST['category'],
				'dueDate' => $_POST['dueDate'],
				'paidDate' => $_POST['paidDate'],
				'amount' => $_POST['amount'],
				'status' => $_POST['status'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_bills');						/* CALL MODEL */
				$this->model_bills->create($billsData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Bills Created';
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
				$data['optCurrentClients']=$this->model_options->getCurrentClientsDD();			/* GET DATA FROM MODEL & PASS TO VIEW */
				$data['optCategory']=$this->model_options->getBookmarksCategory();			/* GET DATA FROM MODEL & PASS TO VIEW */



				$data['optPaymentTypes']=$this->model_options->getPaymentTypes();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Bills Management';
				$this->template->load('templates/template_admin', 'forms/create/createIncome', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_bills');						/* CALL MODEL */
		$data['billsData']=$this->model_bills->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Bills Management';
		$this->template->load('templates/template_one_column', 'bills/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			//$this->output->cache(60);													/* ENABLE CACHE */

			$bills_id =$this->uri->segment(3);

			$this->load->model('model_bills');										/* CALL MODEL */
			$data['billsData']=$this->model_bills->getDetail($bills_id);			/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Detailed Bill Information';
			$this->template->load('templates/template_admin', 'bills/showDetail',$data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function update(){

		$bills_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$billsData = array(
					'id' => $_POST['id'],
					'type' => $_POST['type'],
					'payee' => $_POST['payee'],
					'accountNumber' => $_POST['accountNumber'],
					'category' => $_POST['category'],
					'dueDate' => $_POST['dueDate'],
					'amount' => $_POST['amount'],
					'status' => $_POST['status'],
				);

				$this->load->model('model_bills');								/* CALL MODEL */
				$data['billsData']=$this->model_bills->update($billsData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Bills Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$bills_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optYN']=$this->model_options->getOptionsYN();
				$data['optPayee']=$this->model_options->getPayee();			/* GET DATA FROM MODEL & PASS TO VIEW */
				$data['optBillStatus']=$this->model_options->getBillStatus();			/* GET DATA FROM MODEL & PASS TO VIEW */
				$data['optCategory']=$this->model_options->getBookmarksCategory();			/* GET DATA FROM MODEL & PASS TO VIEW */

				//$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_bills');									/* CALL MODEL */
				$data['billsData']=$this->model_bills->getDetail($bills_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Bills Management';
				$this->template->load('templates/template_admin', 'forms/update/updateBill', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$bills_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_bills');									/* CALL MODEL */
			$this->model_bills->delete($bills_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Bills Deleted';
			$this->template->load('templates/template_admin', 'messages/successDelete', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function status(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_bills');						/* CALL MODEL */
		$data['billsData']=$this->model_bills->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Bills Status';
		$this->template->load('templates/template_admin', 'bills/show', $data);


	}

	function search(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_bills');						/* CALL MODEL */
			$data['billsData']=$this->model_bills->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Search Bills';
			$this->template->load('templates/template_admin', 'bills/search', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */