<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class rates extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_rates');						/* CALL MODEL */
			$data['ratesData']=$this->model_rates->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Rates Management';
			$this->template->load('templates/template_admin', 'rates/index', $data);
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

			$ratesData = array(
				'jobType' => $_POST['jobType'],
				'rate' => $_POST['rate'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_rates');						/* CALL MODEL */
				$this->model_rates->create($ratesData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Rates Created';
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

				//$this->load->model('model_rates');						/* CALL MODEL */
				//$data['ratesData']=$this->model_rates->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Rates Management';
				$this->template->load('templates/template_admin', 'forms/create/createRates', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_rates');						/* CALL MODEL */
		$data['ratesData']=$this->model_rates->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Rates Management';
		$this->template->load('templates/template_one_column', 'rates/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$rates_id =$this->uri->segment(3);

		$data['pageTitle']='rates Offered';
		$this->load->model('model_rates');										/* CALL MODEL */
		$data['ratesData']=$this->model_rates->getDetail($rates_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_one_column', 'rates/showDetail',$data);

	}

	function update(){

		$rates_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$ratesData = array(
					'id' => $_POST['id'],
					'jobType' => $_POST['jobType'],
					'rate' => $_POST['rate'],
				);

				$this->load->model('model_rates');								/* CALL MODEL */
				$data['ratesData']=$this->model_rates->update($ratesData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Rates Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$rates_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_rates');									/* CALL MODEL */
				$data['ratesData']=$this->model_rates->getDetail($rates_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Rates Management';
				$this->template->load('templates/template_admin', 'forms/update/updateRates', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$rates_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_rates');									/* CALL MODEL */
			$this->model_rates->delete($rates_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Rates Deleted';
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