<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {

		//$this->output->cache(60);								/* ENABLE CACHE */

		$this->load->model('model_security');						/* CALL MODEL */
		$isAllowed = $this->model_security->hasAccess();			/* GET DATA FROM MODEL & PASS TO VIEW */

		if ($isAllowed == true){

			$this->load->model('model_news');
			$data['newsData']=$this->model_news->getDisapprovedNews();
			$data['newsData2']=$this->model_news->getAll();

			//$this->load->model('model_options');

			$this->load->model('model_articles');
			$data['articleData']=$this->model_articles->getDisapprovedArticles();

			$this->load->model('model_options');
			$data['optAdminSections']=$this->model_options->getAdminSections();
			$data['ipInfo']=$this->model_options->checkIP($_SERVER['SERVER_ADDR']);

			/*
			$google_hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
			$google_username = 'charles.malcom.jr@';
			$google_password = 'N000121779r';

			$redoak_hostname = 'mail.livewv.com';
			$redoak_username = 'charles.livewv';
			$redoak_password = 'malcom123';

			$this->load->model('model_email');
			$data['unreadEmailGoogle']=$this->model_email->check_email_google($google_hostname, $google_username, $google_password);
			$data['unreadEmailRedOak']=$this->model_email->check_email_redoak($redoak_hostname, $redoak_username, $redoak_password);
			*/ /* ON HOLD FOR A WHILE */

			//$this->load->model('model_googlevoice');

			$this->load->model('model_news');
			$data['unreadNews']=$this->model_news->getDisapprovedNews();

			$this->load->model('model_articles');
			$data['unreadArticles']=$this->model_articles->getDisapprovedArticles();

			$this->load->model('model_leads');
			$data['uncontactedLeads']=$this->model_leads->getUncontactedLeads();


			//$data['optWeekRange']=$this->model_options->getWeekRange(date("Y/m/d"));
			//$data['optSystemStatus']=$this->model_options->getSystemStatus($_POST['section']);
			$data['optSystemStatus']=$this->model_options->getSystemStatus('projects');

			$data['pageTitle']='Admin Page';
			$this->template->load('templates/template_admin', 'system/index', $data);

		}
		else {
			$data['pageTitle']='NO ACCESS!!';
			$this->template->load('templates/template_no_access', 'error/noAccess', $data);

		}

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */