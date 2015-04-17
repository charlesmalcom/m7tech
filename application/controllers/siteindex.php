<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siteindex extends CI_Controller {

	public function index() {

		$currYear = $this->config->item('year');
		$currMonth = $this->config->item('month');
		$currDay = $this->config->item('day');

		//$this->output->cache(60);									/* ENABLE CACHE */
		//$this->output->enable_profiler(TRUE);						/* DEBUGGER */

		$this->load->model('model_calendar');						/* CALL MODEL */
		//$data['calendarData'] = $this->model_calendar->getCalendarEvents('2015', '2');		/* INSERT DATA INTO TABLE */
		//$data['calendarData'] = $this->model_calendar->getCalendarEvents($currYear, $currMonth);		/* INSERT DATA INTO TABLE */

		$this->load->model('model_articles');						/* CALL MODEL */
		$data['articleData']=$this->model_articles->getCurrent();	/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_news');							/* CALL MODEL */
		$data['newsData']=$this->model_news->getCurrent();			/* GET DATA FROM MODEL & PASS TO VIEW */

		$data['pageTitle']='M7 Technologies';
		//$this->template->load('templates/template_two_column', 'siteindex/index', $data);
		$this->template->load('templates/template_two_column', 'siteindex/articles', $data);

	}

}