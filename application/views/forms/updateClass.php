<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($classesData as $row){

echo"
        <fieldset>
            <legend>Update Class</legend>
                <label>Course ID</label><input type='text' name='courseId' value='$row->courseId'><br />
                <label>Course Name</label><input type='text' name='name' value='$row->name'><br />
                <label>Start Date</label><input type='date' name='startDate' value='$row->startDate'><br />
                <label>Stop Date</label><input type='date' name='stopDate' value='$row->stopDate'><br />
                <label>Weeks</label><input type='text' name='weeks' value='$row->weeks'><br />
                <label>Days</label><input type='text' name='days' value='$row->days'><br />
                <label>Time</label><input type='text' name='time' value='$row->time'><br />
                <label>Location</label><input type='text' name='location' value='$row->location'><br />
                <label>Duration</label><input type='text' name='duration' value='$row->duration'><br />
                <label>Price</label><input type='text' name='price' value='$row->price'><br />
                <label>Seats</label><input type='text' name='seats' value='$row->seats'><br />
                <label>Available</label><input type='text' name='available' value='$row->available'><br />

        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update Class'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>

        <div class='clear'></div>

    </div>
";