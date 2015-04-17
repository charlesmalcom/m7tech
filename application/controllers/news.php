<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_news');						/* CALL MODEL */
			$data['newsData']=$this->model_news->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='News Management';
			$this->template->load('templates/template_admin', 'news/index', $data);
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

			$newsData = array(
				'date' => $_POST['date'],
				'article' => $_POST['article'],
				'show' => $_POST['show'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_news');						/* CALL MODEL */
				$this->model_news->create($newsData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='News Created';
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

				//$this->load->model('model_news');						/* CALL MODEL */
				//$data['newsData']=$this->model_news->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='News Management';
				$this->template->load('templates/template_admin', 'forms/create/createNews', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_news');						/* CALL MODEL */
		$data['newsData']=$this->model_news->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='News Management';
		$this->template->load('templates/template_one_column', 'news/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$news_id =$this->uri->segment(3);

		$data['pageTitle']='news Offered';
		$this->load->model('model_news');										/* CALL MODEL */
		$data['newsData']=$this->model_news->getDetail($news_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_one_column', 'news/showDetail',$data);

	}

	function update(){

		$news_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$newsData = array(
					'id' => $_POST['id'],
					'date' => $_POST['date'],
					'article' => $_POST['article'],
					'show' => $_POST['show'],
				);

				$this->load->model('model_news');								/* CALL MODEL */
				$data['newsData']=$this->model_news->update($newsData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='News Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$news_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_news');									/* CALL MODEL */
				$data['newsData']=$this->model_news->getDetail($news_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='News Management';
				$this->template->load('templates/template_admin', 'forms/update/updateNews', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$news_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_news');									/* CALL MODEL */
			$this->model_news->delete($news_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='News Deleted';
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