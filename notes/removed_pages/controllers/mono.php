<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mono extends CI_Controller {

	function index(){

		$this->load->model('model_mono');						/* CALL MODEL */
			$data['monoData']=$this->model_mono->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='USS Monongahla AO-178 Pictures';
			$this->template->load('templates/template_two_column', 'mono/show', $data);
	}

	function create(){

		//$this->load->helper(array('form', 'url'));

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);										/* ENABLE CACHE */

			$monoData = array(
				'rank' => $_POST['rank'],
				'firstName' => $_POST['firstName'],
				'lastName' => $_POST['lastName'],
				'dateTaken' => $_POST['dateTaken'],
				'datePosted' => $_POST['datePosted'],
				'location' => $_POST['location'],
				'fileName' => $_FILES['userfile']['name'],
				'notes' => $_POST['notes'],
			);

			$path = '/var/www/html/creating/m7tech/uploads/';
			$fileName = $_FILES['userfile']['name'];

			$file = $path.$fileName;

			if (file_exists($file)) {
				$data['pageTitle']='Upload Error';
				$data['fileName']=$fileName;
				$this->template->load('templates/template_two_column', 'errors/fileExists', $data);
				return false;

			} else {
				//echo "file $file does NOT exist";
				//return false;
			}

			$this->load->model('model_mono');						/* CALL MODEL */
			$this->model_mono->create($monoData);					/* GET DATA FROM MODEL & PASS TO VIEW */

			$this->do_upload();

			$data['pageTitle']='Mono Created';
			$data = array('upload_data' => $this->upload->data());
			$this->template->load('templates/template_two_column', 'messages/successMono', $data);

		}
		else{
			/* show form */

			//$this->output->cache(60);										/* ENABLE CACHE */

			//$data['pageTitle']='Mono Management';
			//$this->template->load('templates/template_admin', 'forms/createMono', $data);
			$this->template->load('templates/template_two_column', 'forms/createMono', array('error' => ' ' ));
			//$this->load->view('upload_form', array('error' => ' ' ));


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_mono');						/* CALL MODEL */
		$data['monoData']=$this->model_mono->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='USS Monongahla AO-178 Pictures';
		$this->template->load('templates/template_two_column', 'mono/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$mono_id =$this->uri->segment(3);

		$data['pageTitle']='USS Monongahla AO-178 Pictures';
		$this->load->model('model_mono');										/* CALL MODEL */
		$data['monoData']=$this->model_mono->getDetail($mono_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_two_column', 'mono/showDetail',$data);

	}

	function update(){

		$mono_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$monoData = array(
					'id' => $_POST['id'],
					'rank' => $_POST['rank'],
					'firstName' => $_POST['firstName'],
					'lastName' => $_POST['lastName'],
					'dateTaken' => $_POST['dateTaken'],
					'datePosted' => $_POST['datePosted'],
					'location' => $_POST['location'],
					'fileName' => $_POST['fileName'],
					'notes' => $_POST['notes'],
				);

				$data['pageTitle']='USS Monongahla AO-178 Pictures';
				$data['monoData']=$this->model_mono->update($monoData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Mono Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}
		else{
			/* show form */

			$mono_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_mono');									/* CALL MODEL */
				$data['monoData']=$this->model_mono->getDetail($mono_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Mono Management';
				$this->template->load('templates/template_admin', 'forms/updateMono', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$mono_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_mono');									/* CALL MODEL */
			$this->model_mono->delete($mono_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Picture Deleted';
			$this->template->load('templates/template_admin', 'messages/successDelete', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function do_upload(){

		$config['upload_path'] = 'uploads';
		$config['allowed_types'] = 'gif|jpg|png|avi';
		$config['max_size']	= '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		//$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload()) {

			//$data['pageTitle']='Upload Error';

			$error = array('error' => $this->upload->display_errors());
			$this->template->load('templates/template_two_column', 'messages/failureMono', $error);
			//$this->load->view('forms/createMono', $error);
		}
		else {

			//$data['pageTitle']='Upload Another Picture';

			//$data = array('upload_data' => $this->upload->data());
			//$this->template->load('templates/template_admin', 'messages/successMono', $data);
			//$this->load->view('messages/successMono', $data);
		}

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */