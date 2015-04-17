<?php

class Model_email extends CI_Model{

    function getAll(){
        $query = $this->db->get_where('email');
        return $query->result();

    }

    function create($emailData){
        //$this->db->insert("users", $data['dbData']);      /* table, data */
        $this->db->insert("email", $emailData);          /* table, data */

    }

    function getCurrent(){
        $query = $this->db->get_where('email', array('show' => 'Yes'));
        return $query->result();

    }

    function getDetail($email_id){
        $query = $this->db->get_where('email', array('id' => $email_id));
        return $query->result();

    }

    function update($emailData){
        $this->db->update('email', $emailData, array('id' => $emailData['id']));

    }

    function delete($email_id){
        $this->db->delete('email', array('id' => $email_id));
    }

    function send(){
        /*
        $_POST['from']
        $_POST['to']

        $_POST['cc']
        $_POST['bcc']

        $_POST['subject']
        $_POST['body']


        if ($_POST['cc'] == NULL) {}
        else {}

        if ($_POST['bcc'] == NULL) {}
        else {}
        */

        $this->load->library('email');

        $this->email->from('your@example.com', 'Your Name');
        $this->email->to('someone@example.com');
        $this->email->cc('another@another-example.com');
        $this->email->bcc('them@their-example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();

        echo $this->email->print_debugger();
    }

    function search_old(){
        //$connection = imap_open($server, $login, $password);
        //$connection = imap_open('74.40.199.21', 'charles.livewv', 'charles123malcom');
        $connection = imap_open('74.40.199.21', 'charles.livewv', 'charles123');
        //$connection = imap_open('mail.google.com', 'charles.malcom.jr', 'N000121779r');


        $count = imap_num_msg($connection);
        for($msgno = 1; $msgno <= $count; $msgno++) {

            $headers = imap_headerinfo($connection, $msgno);

            if(strtolower($headers->subject) == 'Fail2Ban'
                && strtolower($headers->fromaddress) == 'fail2ban@mail.getwv.com') {
                    echo "here i am";
                }

            }

    }

    function search() {

        /* connect to gmail */
        $hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
        $username = 'charles.malcom.jr@gmail.com<script cf-hash="f9e31" type="text/javascript">
/* <![CDATA[ */!function(){try{var t="currentScript"in document?document.currentScript:function(){for(var t=document.getElementsByTagName("script"),e=t.length;e--;)if(t[e].getAttribute("cf-hash"))return t[e]}();if(t&&t.previousSibling){var e,r,n,i,c=t.previousSibling,a=c.getAttribute("data-cfemail");if(a){for(e="",r=parseInt(a.substr(0,2),16),n=2;a.length-n;n+=2)i=parseInt(a.substr(n,2),16)^r,e+=String.fromCharCode(i);e=document.createTextNode(e),c.parentNode.replaceChild(e,c)}}}catch(u){}}();/* ]]> */</script>';
        $password = 'N0001212779r';


        /* try to connect */
        $inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());

        /* grab emails */
        $emails = imap_search($inbox,'ALL');

        /* if emails are returned, cycle through each... */
        if($emails) {

            /* begin output var */
            $output = '';

            /* put the newest emails on top */
            rsort($emails);

            /* for every email... */
            foreach($emails as $email_number) {

                /* get information specific to this email */
                $overview = imap_fetch_overview($inbox,$email_number,0);
                $message = imap_fetchbody($inbox,$email_number,2);

                /* output the email header information */
                $output.= '<div class="toggler '.($overview[0]->seen ? 'read' : 'unread').'">';
                $output.= '<span class="subject">'.$overview[0]->subject.'</span> ';
                $output.= '<span class="from">'.$overview[0]->from.'</span>';
                $output.= '<span class="date">on '.$overview[0]->date.'</span>';
                $output.= '</div>';

                /* output the email body */
                $output.= '<div class="body">'.$message.'</div>';
            }

            echo $output;
        }

        /* close the connection */
        imap_close($inbox);
    }

    function email($action){

        /* connect to imap server */

        if ($action == 'count'){

        }

        else if ($action == 'show'){

        }

        else if ($action == 'search'){

        }


}

    function check_email_google($host, $login, $passwd) {

        $mbox = imap_open($host, $login, $passwd);
        $count = 0;
        if ($mbox === FALSE){
            echo "Error";
        } else {
            $headers = imap_headers($mbox);
            foreach ($headers as $mail) {
                $flags = substr($mail, 0, 4);
                $isunr = (strpos($flags, "U") !== false);
                if ($isunr)
                    $count++;
            }
        }

        imap_close($mbox);
        return $count;
    }

    function check_email_redoak($host, $login, $passwd) {

        //$mbox = imap_open($host, $login, $passwd);
        $mbox = imap_open("{{$host}/imap:143/novalidate-cert}", $login, $passwd);
        $count = 0;
        if ($mbox === FALSE){
            echo "Error";
        } else {
            $headers = imap_headers($mbox);
            foreach ($headers as $mail) {
                $flags = substr($mail, 0, 4);
                $isunr = (strpos($flags, "U") !== false);
                if ($isunr)
                    $count++;
            }
        }

        imap_close($mbox);
    return $count;
    }

   }
