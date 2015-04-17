<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($courseData as $row){

echo"
            <fieldset>
                <legend>Update Course</legend>
                    <label>Name</label><input type='text' name='name' value='$row->name'><br />
                    <label>Description</label><textarea name='description'>$row->description</textarea><br />
                    <label>Course ID</label><input type='text' name='courseId' value='$row->courseId'><br />
                    <label>Location</label>"; echo form_dropdown('location', $locations); echo"<br/>
                    <label>Date Start</label><input type='date' name='dateStart' value='$row->dateStart'><br />
                    <label>Date Stop</label><input type='date' name='dateStop' value='$row->dateStop'><br />
                    <label>Weeks</label><input type='text' name='weeks' value='$row->weeks'><br />
                    <label>Days</label><input type='text' name='days' value='$row->days'><br />
                    <label>Time</label><input type='text' name='time' value='$row->time'><br />
                    <label>Duration</label><input type='text' name='duration' value='$row->duration'><br />
                    <label>Price</label><input type='text' name='price' value='$row->price'><br />
                    <label>Available</label>".form_dropdown('available', $optionYN)."<br/>
                    <label>Class Size</label><input type='text' name='classSize' value='$row->classSize'><br />

                    <label>&nbsp;</label><input type='submit' value='Update Course'>

                <input type='hidden' name='id' value='$row->id'>
                <input type='hidden' name='dba' value='set'>
            </fieldset>
";

            }

echo"
        </form>
        <div class='clear'></div>
    </div>
";