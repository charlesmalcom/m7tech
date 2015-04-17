<?php

$baseURL = $this->config->item('baseURL');
$home = $baseURL.'admin';

$firstSegment = $this->uri->segment(1);
$secondSegment = $this->uri->segment(2);
$thirdSegment = $this->uri->segment(3);

$segment1 = $baseURL.$firstSegment;
$segment2 = $baseURL.$firstSegment.'/'.$secondSegment;
$segment3 = $baseURL.$thirdSegment;

$firstSegment = ucwords($firstSegment);
$secondSegment = ucwords($secondSegment);
$thirdSegment = ucwords($thirdSegment);

$public = $this->config->item("public");

echo "
    <div class='breadcrumb'>";

    if ($thirdSegment == NULL){
        //echo"<a href='$segment1'>$firstSegment</a> /<a href='$segment2'>$secondSegment</a>";


        /* 1st NESTED */
        if ($secondSegment == NULL){
            //echo"<a href='$segment1'>$firstSegment</a>";


            /* 2nd NESTED */
            if ($firstSegment == NULL){ echo"&nbsp"; }
            else{ echo"<a href='$home'>Home</a>"; }
            /* 2nd NESTED */


        }
        else{ echo"<a href='$home'>Home</a> / <a href='$segment1'>$firstSegment</a> / <a href='$segment2'>$secondSegment</a>"; }


        /* 1st NESTED */


    }
    else{ echo"<a href='$home'>Home</a> / <a href='$segment1'>$firstSegment</a>"; }



    echo "
        <div class='right'>

            <a href='#' onclick='window.history.go(-1); return false;'>
                <img src=".$public."images/actions/arrowleft.gif>
            </a>

            <a href='#' onclick='location.reload();'>
                <img src=".$public."images/actions/reload.png>
            </a>


        </div>

    </div>

        <hr class='bg_color' />
    ";
