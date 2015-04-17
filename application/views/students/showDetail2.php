<?php

echo"<div id='container'>";


    foreach($studentData as $row){

    echo"
        <fieldset>
            <legend>Student Information</legend>
            <label>Student ID</label>$row->id<br />
                <label>First Name</label>$row->first_name
                <label>Middle Name</label>$row->middle_name
                <label>Last Name</label>$row->last_name<br />
                <label>Address</label>$row->address<br />
                <label>City</label>$row->city<br />
                <label>State</label>$row->state<br />
                <label>Zip</label>$row->zip
        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
                <label>Phone</label>$row->phone<br />
                <label>eMail</label>$row->email
        </fieldset>

        <fieldset>
            <legend>Other Information</legend>
                <label>Current</label>$row->current<br />
                <label>Notes</label><textarea rows='8' cols='65'>$row->notes</textarea>
        </fieldset>
    ";

    }

echo"
    </div>
    <div class='clear'></div>
";