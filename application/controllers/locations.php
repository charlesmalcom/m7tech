<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class locations extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_locations');						/* CALL MODEL */
			$data['locationsData']=$this->model_locations->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Locations Management';
			$this->template->load('templates/template_admin', 'locations/index', $data);
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

			$locationsData = array(
				'location' => $_POST['location'],
				'address' => $_POST['address'],
				'city' => $_POST['city'],
				'state' => $_POST['state'],
				'available' => $_POST['available'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_locations');						/* CALL MODEL */
				$this->model_locations->create($locationsData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Locations Created';
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

				$this->load->model('model_options');
				$data['optState']=$this->model_options->getStates();

				//$this->load->model('model_locations');						/* CALL MODEL */
				//$data['locationsData']=$this->model_locations->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Locations Management';
				$this->template->load('templates/template_admin', 'forms/createLocation', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_locations');						/* CALL MODEL */
		$data['locationsData']=$this->model_locations->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Locations Management';
		$this->template->load('templates/template_one_column', 'locations/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$locations_id =$this->uri->segment(3);

		$data['pageTitle']='locations Offered';
		$this->load->model('model_locations');										/* CALL MODEL */
		$data['locationsData']=$this->model_locations->getDetail($locations_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_one_column', 'locations/showDetail',$data);

	}

	function update(){

		$locations_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$locationsData = array(
					'id' => $_POST['id'],
					'location' => $_POST['location'],
					'address' => $_POST['address'],
					'city' => $_POST['city'],
					'state' => $_POST['state'],
					'available' => $_POST['available'],
				);

				$this->load->model('model_locations');								/* CALL MODEL */
				$data['locationsData']=$this->model_locations->update($locationsData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Locations Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$locations_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_locations');									/* CALL MODEL */
				$data['locationsData']=$this->model_locations->getDetail($locations_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Locations Management';
				$this->template->load('templates/template_admin', 'forms/updateLocation', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$locations_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_locations');									/* CALL MODEL */
			$this->model_locations->delete($locations_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Locations Deleted';
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