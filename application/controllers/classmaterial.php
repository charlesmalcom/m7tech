<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class classmaterial extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_classmaterial');						/* CALL MODEL */
			$data['classmaterialData']=$this->model_classmaterial->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Classmaterial Management';
			$this->template->load('templates/template_admin', 'classmaterial/index', $data);
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

			$classmaterialData = array(
				'courseID' => $_POST['courseID'],
				'item' => $_POST['item'],
				'number' => $_POST['number'],
				'blurb' => $_POST['blurb'],
				'available' => $_POST['available'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_classmaterial');						/* CALL MODEL */
				$this->model_classmaterial->create($classmaterialData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Classmaterial Created';
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
				$data['optClassId']=$this->model_options->getClassId();
				$data['optYN']=$this->model_options->getOptionsYN();
				$data['classItems']=$this->model_options->getClassItems();

				//$this->load->model('model_classmaterial');						/* CALL MODEL */
				//$data['classmaterialData']=$this->model_classmaterial->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Classmaterial Management';
				$this->template->load('templates/template_admin', 'forms/create/createClassMaterial', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_classmaterial');						/* CALL MODEL */
		$data['classmaterialData']=$this->model_classmaterial->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Classmaterial Management';
		$this->template->load('templates/template_one_column', 'classmaterial/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$classmaterial_id =$this->uri->segment(3);

		$data['pageTitle']='classmaterial Offered';
		$this->load->model('model_classmaterial');										/* CALL MODEL */
		$data['classmaterialData']=$this->model_classmaterial->getDetail($classmaterial_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_admin', 'classmaterial/showDetail',$data);

	}

	function update(){

		$classmaterial_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$classmaterialData = array(
					'id' => $_POST['id'],
					'courseID' => $_POST['courseID'],
					'item' => $_POST['item'],
					'number' => $_POST['number'],
					'blurb' => $_POST['blurb'],
					'available' => $_POST['available'],
				);

				$this->load->model('model_classmaterial');								/* CALL MODEL */
				$data['classmaterialData']=$this->model_classmaterial->update($classmaterialData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Classmaterial Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$classmaterial_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();
				$data['classItems']=$this->model_options->getClassItems();

				$this->load->model('model_classmaterial');									/* CALL MODEL */
				$data['classmaterialData']=$this->model_classmaterial->getDetail($classmaterial_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Classmaterial Management';
				$this->template->load('templates/template_admin', 'forms/update/updateClassMaterial', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$classmaterial_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_classmaterial');									/* CALL MODEL */
			$this->model_classmaterial->delete($classmaterial_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Classmaterial Deleted';
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