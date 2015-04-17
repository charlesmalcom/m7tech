<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class articles extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_articles');						/* CALL MODEL */
			$data['articlesData']=$this->model_articles->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Articles Management';
			$this->template->load('templates/template_admin', 'articles/index', $data);
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

			$articlesData = array(
				'articleTitle' => $_POST['articleTitle'],
				'postedDate' => $_POST['postedDate'],
				'postedBy' => $_POST['postedBy'],
				'article' => $_POST['article'],
				'show' => $_POST['show'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_articles');						/* CALL MODEL */
				$this->model_articles->create($articlesData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Articles Created';
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

				//$this->load->model('model_articles');						/* CALL MODEL */
				//$data['articlesData']=$this->model_articles->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Articles Management';
				$this->template->load('templates/template_admin', 'forms/create/createArticle', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_articles');						/* CALL MODEL */
		$data['articlesData']=$this->model_articles->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Articles Management';
		$this->template->load('templates/template_one_column', 'articles/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$articles_id =$this->uri->segment(3);

		$data['pageTitle']='articles Offered';
		$this->load->model('model_articles');										/* CALL MODEL */
		$data['articlesData']=$this->model_articles->getDetail($articles_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_admin', 'articles/showDetail2',$data);

	}

	function update(){

		$articles_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$articlesData = array(
					'id' => $_POST['id'],
					'articleTitle' => $_POST['articleTitle'],
					'postedDate' => $_POST['postedDate'],
					'postedBy' => $_POST['postedBy'],
					'article' => $_POST['article'],
					'show' => $_POST['show'],
				);

				$this->load->model('model_articles');								/* CALL MODEL */
				$data['articlesData']=$this->model_articles->update($articlesData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Articles Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$articles_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_articles');									/* CALL MODEL */
				$data['articlesData']=$this->model_articles->getDetail($articles_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Articles Management';
				$this->template->load('templates/template_admin', 'forms/update/updateArticle', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$articles_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_articles');									/* CALL MODEL */
			$this->model_articles->delete($articles_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Articles Deleted';
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