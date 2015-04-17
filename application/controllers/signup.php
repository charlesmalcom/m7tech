<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index(){
		//$this->output->cache(60);								/* ENABLE CACHE */

		$data['pageTitle']='Sign up for Online Services';
		$this->template->load('templates/template_one_column', 'signup/index',$data);
	}

	function forms($formName){
		//$this->output->cache(60);								/* ENABLE CACHE */

		$data['pageTitle']='Sign up for Online Services';
		$this->template->load('templates/template_one_column', 'forms/signup/'.$formName, $data);
	}

    function complete(){
        //$this->output->cache(60);								/* ENABLE CACHE */

        $data['pageTitle']='Sign up for Online Services';
        $this->template->load('templates/template_one_column', 'messages/signupComplete', $data);

    }

    function process(){
        /*
         * get info from from
         * determine which form it is
         * select correct DB
         * insert into DB
         * fire off email
         * redirect to complete page
         */

        $type = $this->input->post('type');

        if ($type == "owncloud") { _owncloud(); }
        else if ($type == "educate") { _educate(); }

    }

	function signupProcess(){

		/* GATHER NEEDED DATA TO PASS TO VIEW */
		$data['pageTitle']='Sign up - PROCESSING';
		$this->load->model('model_signup');						/* CALL MODEL */

		//$this->load->view('other/signupProcess', $data);		/* CALL VIEW */
		$this->template->load('templates/template_one_column', 'other/signupProcess', $data);

	}

    function signupVerify(){


    }

    private function _owncloud(){

        /*
         * select correct DB
         * insert into DB
         * fire off email
         * redirect to complete page
         *
         * */


            //$this->output->cache(60);										/* ENABLE CACHE */

            $signupData = array(
                'firstName' => $_POST['firstName'],
                'lastName' => $_POST['lastName'],
                'address' => $_POST['address'],
                'city' => $_POST['city'],
                'state' => $_POST['state'],
                'zip' => $_POST['zip'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'username' => $_POST['userName'],
                'password' => $_POST['passWord'],
                'enabled' => $_POST['enabled'],
                'activated' => $_POST['activated'],
                'activationCode' => $_POST['activationCode'],

            );

            $this->load->model('model_security');							/* CALL MODEL */
            $isAllowed = $this->model_security->hasAccess();				/* GET DATA FROM MODEL & PASS TO VIEW */

            if ($isAllowed == true) {

                $this->load->model('model_signup');						/* CALL MODEL */
                $this->model_signup->create($signupData);					/* GET DATA FROM MODEL & PASS TO VIEW */

                $data['pageTitle']='Sign up Complete';
                $this->template->load('templates/template_admin', 'messages/signupComplete', $data);
            }
            else {
                $data['pageTitle']='NO ACCESS!!';
                $this->template->load('templates/template_no_access', 'error/noAccess', $data);
            }


    }


    private function _email(){



    }




}