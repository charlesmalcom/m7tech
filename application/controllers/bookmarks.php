<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bookmarks extends CI_Controller {

	function index(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_security');							/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_options');						/* CALL MODEL */

			$this->load->model('model_bookmarks');						/* CALL MODEL */
			$data['bookmarksData']=$this->model_bookmarks->getAll();		/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Bookmarks Management';
			$this->template->load('templates/template_admin', 'bookmarks/index', $data);
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

			$bookmarksData = array(
				'link' => $_POST['link'],
				'link_text' => $_POST['link_text'],
				'category' => $_POST['category'],
				'sub_category' => $_POST['sub_category'],
				'description' => $_POST['description'],
			);

			$this->load->model('model_security');							/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_bookmarks');						/* CALL MODEL */
				$this->model_bookmarks->create($bookmarksData);					/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Bookmarks Created';
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

				$this->load->model('model_options');						/* CALL MODEL */
				$data['optBookmarksData']=$this->model_options->getBookmarksCategory();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Bookmarks Management';
				$this->template->load('templates/template_admin', 'forms/create/createBookmark', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}

	}

	function show(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_bookmarks');						/* CALL MODEL */
		$data['bookmarksData']=$this->model_bookmarks->getAll();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Bookmarks Management';
		$this->template->load('templates/template_one_column', 'bookmarks/show', $data);


	}

	function showCurrent(){

	} /* [ NOT USED */

	/* showDetail */
	function info(){

		//$this->output->cache(60);													/* ENABLE CACHE */

		$bookmarks_id =$this->uri->segment(3);

		$data['pageTitle']='bookmarks Offered';
		$this->load->model('model_bookmarks');										/* CALL MODEL */
		$data['bookmarksData']=$this->model_bookmarks->getDetail($bookmarks_id);			/* GET DATA FROM MODEL & PASS TO VIEW */
		$this->template->load('templates/template_one_column', 'bookmarks/showDetail',$data);

	}

	function update(){

		$bookmarks_id = $this->uri->segment(3);

		if (isset($_POST['dba'])){
			/* insert into DB */

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$bookmarksData = array(
					'id' => $_POST['id'],
					'link' => $_POST['link'],
					'link_text' => $_POST['link_text'],
					'category' => $_POST['category'],
					'sub_category' => $_POST['sub_category'],
					'description' => $_POST['description'],
				);

				$this->load->model('model_bookmarks');								/* CALL MODEL */
				$data['bookmarksData']=$this->model_bookmarks->update($bookmarksData);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Bookmarks Management';
				$this->template->load('templates/template_admin', 'messages/successUpdate', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}


		}
		else{
			/* show form */

			$bookmarks_id = $this->uri->segment(3);

			//$this->output->cache(60);												/* ENABLE CACHE */

			$this->load->model('model_security');									/* CALL MODEL */
			$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

			if ($isAllowed == true) {

				$this->load->model('model_options');
				$data['optionYN']=$this->model_options->getOptionsYN();

				$this->load->model('model_options');						/* CALL MODEL */
				$data['optBookmarksCategoryData']=$this->model_options->getBookmarksCategory();			/* GET DATA FROM MODEL & PASS TO VIEW */

				$this->load->model('model_bookmarks');									/* CALL MODEL */
				$data['bookmarksData']=$this->model_bookmarks->getDetail($bookmarks_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

				$data['pageTitle']='Bookmarks Management';
				$this->template->load('templates/template_admin', 'forms/update/updateBookmark', $data);
			}
			else {
				$data['pageTitle']='NO ACCESS!!';
				$this->template->load('templates/template_no_access', 'error/noAccess', $data);
			}

		}

	}

	function delete(){

		$bookmarks_id = $this->uri->segment(3);

		//$this->output->cache(60);												/* ENABLE CACHE */

		$this->load->model('model_security');									/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();						/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true) {

			$this->load->model('model_bookmarks');									/* CALL MODEL */
			$this->model_bookmarks->delete($bookmarks_id);	/* GET DATA FROM MODEL & PASS TO VIEW */

			$data['pageTitle']='Bookmarks Deleted';
			$this->template->load('templates/template_admin', 'messages/successDelete', $data);
		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);
		}

	}

	function search(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_options');						/* CALL MODEL */
		$data['optBookmarksData']=$this->model_options->getBookmarksCategory();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Bookmark Search';
		$this->template->load('templates/template_admin', 'forms/search/searchBookmark', $data);

	}

	function results(){

		//$this->output->cache(60);										/* ENABLE CACHE */

		$this->load->model('model_options');						/* CALL MODEL */

		$this->load->model('model_bookmarks');						/* CALL MODEL */
		$data['bookmarksData']=$this->model_bookmarks->search();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='Bookmark Search Results';
		$this->template->load('templates/template_admin', 'bookmarks/show', $data);

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */