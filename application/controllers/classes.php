<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class classes extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_classes');						/* CALL MODEL */
			$data['classesData']=$this->model_classes->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Classes Management';
			$this->template->load('templates/template_admin', 'classes/index', $data);
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

			$classesData = array(
				'courseId' => $_POST['courseId'],
				'name' => $_POST['name'],
				'startDate' => $_POST['startDate'],
				'stopDate' => $_POST['stopDate'],
				'weeks' => $_POST['weeks'],
				'days' => $_POST['days'],
				'time' => $_POST['time'],
				'location' => $_POST['location'],
				'duration' => $_POST['duration'],
				'price' => $_POST['price'],
				'seats' => $_POST['seats'],
				'available' => $_POST['available'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_classes');						/* CALL MODEL */
				$this->model_classes->create($classesData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Classes Created';
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

				//$this->load->model('model_classes');						/* CALL MODEL */
				//$data['classesData']=$this->model_classes->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Classes Management';
				$this->template->load('templates/template_admin', 'forms/createClass', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_classes');						/* CALL MODEL */
		$data['classesData']=$this->model_classes->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Classes Management';
		$this->template->load('templates/template_two_column', 'classes/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$classes_id =$this->uri->segment(3);

		$data['pageTitle']='classes Offered';
		$this->load->model('model_classes');										/* CALL MODEL */
		$data['classesData']=$this->model_classes->getDetail($classes_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_admin', 'classes/showDetail',$data);

	}

	function update(){

		$classes_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$classesData = array(
					'id' => $_POST['id'],
					'courseId' => $_POST['courseId'],
					'name' => $_POST['name'],
					'startDate' => $_POST['startDate'],
					'stopDate' => $_POST['stopDate'],
					'weeks' => $_POST['weeks'],
					'days' => $_POST['days'],
					'time' => $_POST['time'],
					'location' => $_POST['location'],
					'duration' => $_POST['duration'],
					'price' => $_POST['price'],
					'seats' => $_POST['seats'],
					'available' => $_POST['available'],
				);

				$this->load->model('model_classes');								/* CALL MODEL */
				$data['classesData']=$this->model_classes->update($classesData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Classes Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$classes_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_classes');									/* CALL MODEL */
				$data['classesData']=$this->model_classes->getDetail($classes_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Classes Management';
				$this->template->load('templates/template_admin', 'forms/updateClass', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$classes_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_classes');									/* CALL MODEL */
			$this->model_classes->delete($classes_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Classes Deleted';
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