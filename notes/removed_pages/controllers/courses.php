<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_courses');						/* CALL MODEL */
			$data['courseData']=$this->model_courses->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Course Management';
			$this->template->load('templates/template_admin', 'courses/index', $data);
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

			$courseData = array(
				'name' => $_POST['name'],
				'description' => $_POST['description'],
				'courseId' => $_POST['courseId'],
				'location' => $_POST['location'],
				'dateStart' => $_POST['dateStart'],
				'dateStop' => $_POST['dateStop'],
				'weeks' => $_POST['weeks'],
				'days' => $_POST['days'],
				'time' => $_POST['time'],
				'duration' => $_POST['duration'],
				'price' => $_POST['price'],
				'available' => $_POST['available'],
				'classSize' => $_POST['classSize'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_courses');						/* CALL MODEL */
				$this->model_courses->create($courseData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Course Created';
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
				$data['optLocations']=$this->model_options->getLocations();

				//$this->load->model('model_courses');						/* CALL MODEL */
				//$data['courseData']=$this->model_courses->getAll();	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Course Management';
				$this->template->load('templates/template_admin', 'forms/create/createCourse', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_courses');						/* CALL MODEL */
		$data['courseData']=$this->model_courses->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Course Management';
		$this->template->load('templates/template_one_column', 'courses/show', $data);


	}

	function showCurrent(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_courses');						/* CALL MODEL */
		$data['courseData']=$this->model_courses->getCurrent();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Clients Management';
		$this->template->load('templates/template_admin', 'courses/show', $data);

	}

	/* showDetail */
	function info(){

	//$this->output->cache(60);														/* ENABLE CACHE */

		$course_id =$this->uri->segment(3);

		$data['pageTitle']='Courses Offered';
		$this->load->model('model_courses');										/* CALL MODEL */
		$data['courseData']=$this->model_courses->getDetail($course_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_admin', 'courses/showDetail2',$data);

	}

	function infoPublic(){

		//$this->output->cache(60);														/* ENABLE CACHE */

		$course_id =$this->uri->segment(3);

		$data['pageTitle']='Courses Offered';
		$this->load->model('model_courses');										/* CALL MODEL */
		$data['courseData']=$this->model_courses->getDetail($course_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_two_column', 'courses/showDetail2',$data);

	}

	function update(){

		$course_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$courseData = array(
					'id' => $_POST['id'],
					'name' => $_POST['name'],
					'description' => $_POST['description'],
					'courseId' => $_POST['courseId'],
					'location' => $_POST['location'],
					'dateStart' => $_POST['dateStart'],
					'dateStop' => $_POST['dateStop'],
					'weeks' => $_POST['weeks'],
					'days' => $_POST['days'],
					'time' => $_POST['time'],
					'duration' => $_POST['duration'],
					'price' => $_POST['price'],
					'available' => $_POST['available'],
					'classSize' => $_POST['classSize'],
				);

				$this->load->model('model_courses');							/* CALL MODEL */
				$data['courseData']=$this->model_courses->update($courseData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Course Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$course_id = $this->uri->segment(3);

			$this->load->model('model_options');
			$data['locations']=$this->model_options->getLocations();

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_courses');									/* CALL MODEL */
				$data['courseData']=$this->model_courses->getDetail($course_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Course Management';
				$this->template->load('templates/template_admin', 'forms/update/updateCourse', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$course_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_courses');									/* CALL MODEL */
			$this->model_courses->delete($course_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Course Deleted';
			$this->template->load('templates/template_admin', 'messages/successDelete', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function browse(){

		//$this->output->cache(60);														/* ENABLE CACHE */

		$course_id =$this->uri->segment(3);

		$data['pageTitle']='Courses Offered';
		$this->load->model('model_courses');										/* CALL MODEL */
		$data['courseData']=$this->model_courses->getDetail($course_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_admin', 'courses/browse',$data);

	}


}