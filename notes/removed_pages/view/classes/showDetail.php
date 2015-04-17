<div id="container">

<?php
    foreach($classesData as $row){

    echo"
        <fieldset>
            <legend>Class Information</legend>
                <label>ID</label>$row->id<br />
                <label>Course ID</label>$row->courseId<br />
                <label>Start Date</label>$row->startDate<br />
                <label>Stop Date</label>$row->stopDate<br />
                <label>Weeks</label>$row->weeks<br />
                <label>Days</label>$row->days<br />
                <label>Time</label>$row->time<br />
                <label>Location</label>$row->location<br />
                <label>Duration</label>$row->duration<br />
                <label>Price</label>\$$row->price<br />
                <label>Available</label>$row->available<br />

        </fieldset>
    ";

    }
?>

</div>

<div class="clear"></div>