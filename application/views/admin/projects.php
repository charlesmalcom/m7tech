<?php

    foreach($resultData as $row) {

        /*echo"
            <fieldset>
                <legend>$titleData Status</legend>
                    <label>$titleData Starting</label><span id='box' class='unread'>$resultData[starting]<br />
                    <label>$titleData Stopping</label><span id='box' class='unread'>$resultData[stoping]<br />
                    <label>$titleData Needs Reviewed</label><span id='box' class='unread'>$resultData[stoping]<br />
                    <label>$titleData Total</label><span id='box' class='unread'>$resultData[total]<br />
                </fieldset>
            ";*/

    }


//echo 'This Week ('.$optWeekRange[0]->format('m/d/Y').'-'.$optWeekRange[1]->format('m/d/Y').')';
//echo $optSystemStatus;

echo"There are the businesses within the starting & stopping dates:<br />";


//$someVar = getWeekRange();
//echo $someVar[0];


foreach($optSystemStatus as $row){
    echo $row->business_name." ----> ". $row->stop_date;
}
