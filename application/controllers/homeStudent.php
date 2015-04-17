<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class homeStudent extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			//$this->load->model('model_homeStudent');						/* CALL MODEL */
			//$data['homeStudentData']=$this->model_homeStudent->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='HomeStudent Management';
			$this->template->load('templates/template_student', 'homeStudent/index', $data);
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

			$homeStudentData = array(
				'first_name' => $_POST['first_name'], /* [example, delete] */
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_homeStudent');						/* CALL MODEL */
				$this->model_homeStudent->create($homeStudentData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='HomeStudent Created';
				$this->template->load('templates/template_student', 'messages/successCreate', $data);
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

				//$this->load->model('model_homeStudent');						/* CALL MODEL */
				//$data['homeStudentData']=$this->model_homeStudent->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='HomeStudent Management';
				$this->template->load('templates/template_student', 'forms/createHomeStudent', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_homeStudent');						/* CALL MODEL */
		$data['homeStudentData']=$this->model_homeStudent->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='HomeStudent Management';
		$this->template->load('templates/template_one_column', 'homeStudent/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$homeStudent_id =$this->uri->segment(3);

		$data['pageTitle']='homeStudent Offered';
		$this->load->model('model_homeStudent');										/* CALL MODEL */
		$data['homeStudentData']=$this->model_homeStudent->getDetail($homeStudent_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_one_column', 'homeStudent/showDetail',$data);

	}

	function update(){

		$homeStudent_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$homeStudentData = array(
					'id' => $_POST['id'],
					'first_name' => $_POST['first_name'], /* [example, delete] */
				);

				$this->load->model('model_homeStudent');								/* CALL MODEL */
				$data['homeStudentData']=$this->model_homeStudent->update($homeStudentData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='HomeStudent Management';
				$this->template->load('templates/template_student', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$homeStudent_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_homeStudent');									/* CALL MODEL */
				$data['homeStudentData']=$this->model_homeStudent->getDetail($homeStudent_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='HomeStudent Management';
				$this->template->load('templates/template_student', 'forms/updateHomeStudent', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$homeStudent_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_homeStudent');									/* CALL MODEL */
			$this->model_homeStudent->delete($homeStudent_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='HomeStudent Deleted';
			$this->template->load('templates/template_student', 'messages/successDelete', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}





	function infoStudent(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			//$this->load->model('model_courses');						/* CALL MODEL */
			//$data['courseData']=$this->model_courses->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Student Course Information';
			$this->template->load('templates/template_student', 'homeStudentinfoStudent', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function infoFinancial(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			//$this->load->model('model_courses');						/* CALL MODEL */
			//$data['courseData']=$this->model_courses->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Student Financial Information';
			$this->template->load('templates/template_student', 'homeStudent/infoFinancial', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function infoPersonal(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			//$this->load->model('model_courses');						/* CALL MODEL */
			//$data['courseData']=$this->model_courses->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Student Course Information';
			$this->template->load('templates/template_student', 'homeStudent/infoPersonal', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function infoCourse(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			//$this->load->model('model_courses');						/* CALL MODEL */
			//$data['courseData']=$this->model_courses->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Student Course Information';
			$this->template->load('templates/template_student', 'homeStudent/infoCourse', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function infoGrades(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			//$this->load->model('model_courses');						/* CALL MODEL */
			//$data['courseData']=$this->model_courses->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Student Course Information';
			$this->template->load('templates/template_student', 'homeStudent/infoGrades', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}



	function myClasses(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_courses');						/* CALL MODEL */
			$data['courseData']=$this->model_courses->getMyCourses();			/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Student Course Information';
			$this->template->load('templates/template_student', 'home/student/courseInfo', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}





	}

	function courseInfo(){
		echo "placeholder";

	}

	function myGrades(){
		echo "placeholder";

	}

	function personalInfo(){
		echo "placeholder";

	}

	function financialInfo(){
		echo "placeholder";

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */