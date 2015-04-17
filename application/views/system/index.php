<?php

//local//
//include('/var/www/html/creating/m7tech/public/GoogleVoice.php');

//remote//
//include('/home/m7technologies/public_html/public/GoogleVoice.php');
//include('/home3/msevtech/public_html/public/GoogleVoice.php');


//$gv = new GoogleVoice('xxxyyy@gmail.com', 'password');
//$gvM7 = new GoogleVoice('m7programming@gmail.com', 'N000121779r');
//$gvPersonal = new GoogleVoice('charles.malcom.jr@gmail.com', 'N000121779r');

// Get all unread SMSs from your Google Voice Inbox.
//$smsM7 = $gvM7->getUnreadSMS();
//$smsPersonal = $gvPersonal->getUnreadSMS();

    echo"

        <div class='status_top_wrapper'>

            <div class='status'>
                 <h4>Google eMail</h4>

                <label>Total</label>000<br />
                <label>New</label>000<br />
                <label>Unread</label>000<br>
                <label><a href='/email/account/gv_m7'>Go to Section</a></label><br />
            </div>

            <div class='status'>
                 <h4>Red Oak eMail</h4>

                <label>Total</label>000<br />
                <label>New</label>000<br />
                <label>Unread</label>000<br>
                <label><a href='/email/account/redoak'>Go to Section</a></label><br />
            </div>

            <div class='status'>
                <h4>News</h4>

                <label>Total</label>000<br />
                <label>New</label>000<br />
                <label>Needs Approved</label><span class='box'>$unreadNews</span><br>
                <label><a href='/news'>Go to Section</a></label><br />
            </div>

            <div class='status'>
                <h4>Articles</h4>

                <label>Total</label>000<br />
                <label>New</label>000<br />
                <label>Needs Approved</label><span class='box'>$unreadArticles</span><br>
                <label><a href='/articles'>Go to Section</a></label><br />
            </div>

            <div class='status'>
                <h4>Calendar</h4>

                <label>Total</label>000<br />
                <label>New</label>000<br />
                <label>Needs Approved</label>000<br>
                <label><a href='/calendar'>Go to Section</a></label><br />
            </div>

            <div class='status'>
                 <h4>Projects</h4>

                <label>Total</label>000<br />
                <label>New</label>000<br />
                <label>Needs Approved</label>000<br>
                <label><a href='/projects'>Go to Section</a></label><br />
            </div>

            <div class='status'>
                 <h4>Clients</h4>

                <label>Total</label>000<br />
                <label>New</label>000<br />
                <label>Needs Approved</label>000<br>
                <label><a href='/clients'>Go to Section</a></label><br />
            </div>

            <div class='status'>
                 <h4>Students</h4>

                <label>Total</label>000<br />
                <label>New</label>000<br />
                <label>Needs Approved</label>000<br>
                <label><a href='/students'>Go to Section</a></label><br />
            </div>

            <div class='status'>
                 <h4>Leads</h4>

                <label>Total</label>000<br />
                <label>New</label>000<br />
                <label>Needs Contacted</label><span class='box'>$uncontactedLeads</span><br>
                <label><a href='/leads'>Go to Section</a></label><br />
            </div>

        </div>


        <div class='status_bottom_wrapper'>

            <div class='status_bottom'>
                <h4>Google Voice - M7</h4>";

            /*
            $msgIDsM7 = array();
            foreach($smsM7 as $s) {
                //echo 'Message from: '.$s->phoneNumber.' on '.$s->displayStartDateTime.': '.$s->messageText."<br><br>\n";
                echo "".$s->displayStartTime."&nbsp;".$s->phoneNumber."&nbsp;".$s->messageText."<br />";

                if(!in_array($s->id, $msgIDsM7)) {
                    // Mark the message as read in your Google Voice Inbox.
                    //$gvM7->markMessageRead($s->id); // [ TURN THIS INTO A JS OR jQuery BUTTON ]
                    $msgIDsM7[] = $s->id;
                }
            }
            */

        echo"

            <label>Unread messages</label>000<br />
            </div>


            <div class='status_bottom'>
                <h4>Google Voice - Charles</h4>";

                /*
                $msgIDsPersonal = array();
                foreach($smsPersonal as $s) {
                    //echo 'Message from: '.$s->phoneNumber.' on '.$s->displayStartDateTime.': '.$s->messageText."<br><br>\n";
                    echo "".$s->displayStartTime."&nbsp;".$s->phoneNumber."&nbsp;".$s->messageText."<br />";
                    
                    if(!in_array($s->id, $msgIDsPersonal)) {
                        // Mark the message as read in your Google Voice Inbox.
                        //$gvPersonal->markMessageRead($s->id); // [ TURN THIS INTO A JS OR jQuery BUTTON ]
                        $msgIDsPersonal[] = $s->id;
                    }
                }
                */

        echo"
            <label>Unread messages</label>000<br />

            </div>


            <div class='status_bottom'>
                <h4>IP Information</h4>

                <label>Your server IP is: </label>".$_SERVER['SERVER_ADDR']."<br />
                <label>Your domain is: </label>".$_SERVER['SERVER_NAME']."<br />
                <label>Your external IP is: </label>".$_SERVER['REMOTE_ADDR']."<br />
            </div>

        </div>

    ";

/*
 * float all left
 * padding & margin
 *
 * new
 * total
 * needs approved
 * goto section
 * <span class='box'>$unreadEmailGoogle</span>
 * <span class='box'>$unreadEmailRedOak</span>
 * <span class='box'>".count($msgIDsM7)."</span>
 * <span class='box'>".count($msgIDsPersonal)."</span>
 *
 * */

?>