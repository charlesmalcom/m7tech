<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class reports extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_reports');						/* CALL MODEL */
			$data['reportsData']=$this->model_reports->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Reports Management';
			$this->template->load('templates/template_admin', 'reports/index', $data);
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

			$reportsData = array(
				'first_name' => $_POST['first_name'], /* [example, delete] */
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_reports');						/* CALL MODEL */
				$this->model_reports->create($reportsData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Reports Created';
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

				//$this->load->model('model_reports');						/* CALL MODEL */
				//$data['reportsData']=$this->model_reports->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Reports Management';
				$this->template->load('templates/template_admin', 'forms/createReport', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);																/* ENABLE CACHE */

		$reports_id =$this->uri->segment(3);						/* ENABLE CACHE */

		$this->load->model('model_reports');						/* CALL MODEL */
		//$data['reportsData']=$this->model_reports->getByType($reports_id);			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Reports Management';
		$this->template->load('templates/template_admin', 'reports/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$reports_id =$this->uri->segment(3);

		$data['pageTitle']='reports Offered';
		$this->load->model('model_reports');										/* CALL MODEL */
		$data['reportsData']=$this->model_reports->getDetail($reports_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_admin', 'reports/showDetail',$data);

	}

	function update(){

		$reports_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$reportsData = array(
					'id' => $_POST['id'],
					'first_name' => $_POST['first_name'], /* [example, delete] */
				);

				$this->load->model('model_reports');								/* CALL MODEL */
				$data['reportsData']=$this->model_reports->update($reportsData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Reports Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$reports_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_reports');									/* CALL MODEL */
				$data['reportsData']=$this->model_reports->getDetail($reports_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Reports Management';
				$this->template->load('templates/template_admin', 'forms/updateReport', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$reports_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_reports');									/* CALL MODEL */
			$this->model_reports->delete($reports_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Reports Deleted';
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