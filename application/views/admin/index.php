<div id="container">

    <?php

    function getWeekNumber($date){
        $ddate = "2012-10-18";
        $duedt = explode("-", $ddate);
        $date  = mktime(0, 0, 0, $duedt[1], $duedt[2], $duedt[0]);
        $week  = (int)date('W', $date);
        echo "Weeknummer: " . $week;
    }



    foreach($newsData2 as $row){
     //$date = $row->date;
     //echo $row->date;
     echo getWeekNumber($row->date);

        }
    ?>

    <div id="contentLeft">

        <fieldset>
            <legend>This Week</legend>
            <label>Projects Starting</label><span id="box">986</span><br />
            <label>Projects Stopping</label><span id="box">986</span><br />
            <label>New Students</label><span id="box">986</span><br />
            <label>Courses Starting</label><span id="box">986</span><br />
            <label>Courses Stopping</label><span id="box">986</span><br />
        </fieldset>

    </div>

    <div id="contentCenter">

        <fieldset>
            <legend>Next Week</legend>
                <label>Projects Starting</label><span id="box">986</span><br />
                <label>Projects Stopping</label><span id="box">986</span><br />
                <label>New Students</label><span id="box">986</span><br />
                <label>Courses Starting</label><span id="box" class="unread">986</span><br />
                <label>Courses Stopping</label><span id="box">986</span><br />
        </fieldset>

    </div>

    <div id="contentRight">

        <fieldset>
            <legend>Next Month</legend>
                <label>Projects Starting</label><span id="box">986</span><br />
                <label>Projects Stopping</label><span id="box">986</span><br />
                <label>New Students</label><span id="box">986</span><br />
                <label>Courses Starting</label><span id="box">986</span><br />
                <label>Courses Stopping</label><span id="box">986</span><br />
        </fieldset>

    </div>

    <span id="contentBottom">

        <fieldset>
            <legend>Needs Reviewed</legend>
                <label>News</label><span id="box" class="unread"><?php echo $newsData; ?></span><br />
                <label>Articles</label><span id="box" class="unread"><?php echo $articleData; ?></span><br />
        </fieldset>

        <fieldset>
            <legend>Emails</legend>
                <label>Unread Emails</label><span id="box">986</span><br />
                <label>This Week</label><?php echo date("W"); ?><br />
                <label>Some Date</label>0</span><br />
        </fieldset>

    </span>

</div>