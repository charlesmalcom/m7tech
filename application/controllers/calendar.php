<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function index()	{

		//$this->output->cache(60);								/* ENABLE CACHE */

		//$this->load->model('model_xxxx');						/* CALL MODEL */
		//$data['someData']=$this->model_xxxx->someFunc();		/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_options');
		$data['optionYN']=$this->model_options->getOptionsYN();
		$data['pageTitle']='Create Calendar Event';
		$this->template->load('templates/template_admin', 'forms/createCalendarEvent',$data);	/* CALL VIEW TO SEE PAGE */
	}

	public function manage()	{

		//$this->output->cache(60);								/* ENABLE CACHE */

		//$this->load->model('model_xxxx');						/* CALL MODEL */
		//$data['someData']=$this->model_xxxx->someFunc();		/* GET DATA FROM MODEL & PASS TO VIEW */

		$this->load->model('model_options');
		$data['optionYN']=$this->model_options->getOptionsYN();
		$data['pageTitle']='Create Calendar Event';
		$this->template->load('templates/template_admin', 'forms/createCalendarEvent',$data);	/* CALL VIEW TO SEE PAGE */
	}

	public function createCalendarEvent(){

		//$this->output->cache(60);									/* ENABLE CACHE */

		$data['pageTitle']='Create Calendar Event';
		$calendarData = array(
			'date' => $_POST['date'],
			'year' => $_POST['year'],
			'month' => $_POST['month'],
			'day' => $_POST['day'],
			'event' => $_POST['event'],
			'show' => $_POST['show'],
		);

		$this->load->model('model_calendar');						/* CALL MODEL */
		$this->model_calendar->createCalendar($calendarData);		/* INSERT DATA INTO TABLE */

		$this->template->load('templates/template_admin', 'messages/successCreate', $data);

	}

	public function showEvents(){

		//$this->output->cache(60);									/* ENABLE CACHE */

		$data['pageTitle']='Show Calendar Events';


		$this->load->model('model_calendar');						/* CALL MODEL */
		//$data['calendarData'] = $this->model_calendar->getCalendarEvents();		/* INSERT DATA INTO TABLE */

		$this->template->load('templates/template_admin', 'calendar/showEvents', $data);


	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */