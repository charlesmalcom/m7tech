<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class students extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_students');						/* CALL MODEL */
			$data['studentData']=$this->model_students->getAll();	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Student Management';
			$this->template->load('templates/template_admin', 'students/index', $data);
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

			$studentData = array(
				'first_name' => $_POST['first_name'],
				'middle_name' => $_POST['middle_name'],
				'last_name' => $_POST['last_name'],
				'address' => $_POST['address'],
				'city' => $_POST['city'],
				'state' => $_POST['state'],
				'zip' => $_POST['zip'],
				'phone' => $_POST['phone'],
				'email' => $_POST['email'],
				'notes' => $_POST['notes'],
				'current' => $_POST['current'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_students');						/* CALL MODEL */
				$this->model_students->create($studentData);				/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Student Created';
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
				$data['optStates']=$this->model_options->getStates();

				//$this->load->model('model_students');						/* CALL MODEL */
				//$data['studentData']=$this->model_students->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Student Management';
				$this->template->load('templates/template_admin', 'forms/create/createStudent', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_students');						/* CALL MODEL */
		$data['studentData']=$this->model_students->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Student Management';
		$this->template->load('templates/template_one_column', 'students/show', $data);


	}

	function showCurrent(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_students');						/* CALL MODEL */
		$data['studentData']=$this->model_students->getCurrent();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Current Students';
		$this->template->load('templates/template_admin', 'students/show', $data);

	}

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$student_id =$this->uri->segment(3);

		$data['pageTitle']='students Offered';
		$this->load->model('model_students');										/* CALL MODEL */
		$data['studentData']=$this->model_students->getDetail($student_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_admin', 'students/showDetail2',$data);

	}

	function update(){

		$student_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$studentData = array(
					'id' => $_POST['id'],
					'first_name' => $_POST['first_name'],
					'middle_name' => $_POST['middle_name'],
					'last_name' => $_POST['last_name'],
					'address' => $_POST['address'],
					'city' => $_POST['city'],
					'state' => $_POST['state'],
					'zip' => $_POST['zip'],
					'phone' => $_POST['phone'],
					'email' => $_POST['email'],
					'notes' => $_POST['notes'],
					'current' => $_POST['current'],
				);

				$this->load->model('model_students');								/* CALL MODEL */
				$data['studentData']=$this->model_students->update($studentData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Student Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$student_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_students');									/* CALL MODEL */
				$data['studentData']=$this->model_students->getDetail($student_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Student Management';
				$this->template->load('templates/template_admin', 'forms/update/updateStudent', $data);
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

			$this->load->model('model_students');									/* CALL MODEL */
			$this->model_students->delete($student_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Student Deleted';
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