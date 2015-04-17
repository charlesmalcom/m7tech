<?php

/*
function mailCount($host, $login, $passwd) {

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
*/

$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
//$hostname = '{mail.livewv.com/imap/ssl}INBOX';
//$hostname = '74.40.199.21';

$username = 'charles.malcom.jr@';
//$username = 'charles.livewv';
//$username = 'charles';

$password = 'N000121779r';
//$password = 'charles123';



//$count = mailCount($hostname, $username, $password);
$count = check_email($hostname, $username, $password);

//$count = 9;

echo "

    <br />
    Show eMail
    <br /><br />

    <hr />

    <br /><br />
    You have <strong>$count</strong> unread emails.
    <br /><br /><br /><br /><br /><br /><br /><br /><br />

";