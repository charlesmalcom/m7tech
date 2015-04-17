<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class projects extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_projects');						/* CALL MODEL */
			$data['projectsData']=$this->model_projects->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Projects Management';
			$this->template->load('templates/template_admin', 'projects/index', $data);
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

			$projectsData = array(
				'business_name' => $_POST['business_name'],
				'project_type' => $_POST['project_type'],
				'project_description' => $_POST['project_description'],
				'start_date' => $_POST['start_date'],
				'stop_date' => $_POST['stop_date'],
				'rate' => $_POST['rate'],
				'notes' => $_POST['notes'],
				'show' => $_POST['show'],
				'current' => $_POST['current'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_projects');						/* CALL MODEL */
				$this->model_projects->create($projectsData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Projects Created';
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
				$data['optProjectType']=$this->model_options->getProjectTypes();




				//$this->load->model('model_projects');						/* CALL MODEL */
				//$data['projectsData']=$this->model_projects->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Projects Management';
				$this->template->load('templates/template_admin', 'forms/create/createProject', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_projects');						/* CALL MODEL */
		$data['projectsData']=$this->model_projects->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Projects Management';
		$this->template->load('templates/template_one_column', 'projects/show', $data);


	}

	function showCurrent(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_projects');							/* CALL MODEL */
		$data['projectsData']=$this->model_projects->getCurrent();		/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Clients Management';
		$this->template->load('templates/template_admin', 'projects/show', $data);

	}

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$projects_id =$this->uri->segment(3);

		$data['pageTitle']='Projects Offered';
		$this->load->model('model_projects');										/* CALL MODEL */
		$data['projectsData']=$this->model_projects->getDetail($projects_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_admin', 'projects/showDetail',$data);

	}

	function update(){

		$projects_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$projectsData = array(
					'id' => $_POST['id'],
					'business_name' => $_POST['business_name'],
					'project_type' => $_POST['project_type'],
					'project_description' => $_POST['project_description'],
					'start_date' => $_POST['start_date'],
					'stop_date' => $_POST['stop_date'],
					'rate' => $_POST['rate'],
					'notes' => $_POST['notes'],
					'show' => $_POST['show'],
					'current' => $_POST['current'],
				);

				$this->load->model('model_projects');								/* CALL MODEL */
				$data['projectsData']=$this->model_projects->update($projectsData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Projects Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$projects_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_projects');									/* CALL MODEL */
				$data['projectsData']=$this->model_projects->getDetail($projects_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Projects Management';
				$this->template->load('templates/template_admin', 'forms/update/updateProjects', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$projects_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_projects');									/* CALL MODEL */
			$this->model_projects->delete($projects_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Projects Deleted';
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