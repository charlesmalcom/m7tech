<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($studentData as $row){

echo"
        <fieldset>
            <legend>Personal Information</legend>
                <label>First Name</label><input type='text' name='first_name' value='$row->first_name'><br />
                <label>Middle Name</label><input type='text' name='middle_name' value='$row->middle_name'><br />
                <label>Last Name</label><input type='text' name='last_name' value='$row->last_name'><br />
                <label>Address</label><input type='text' name='address' value='$row->address'><br />
                <label>City</label><input type='text' name='city' value='$row->city'><br />
                <label>State</label><input type='text' name='state' value='$row->state'><br />
                <label>Zip</label><input type='text' name='zip' value='$row->zip'><br />

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
                <label>Phone</label><input type='text' name='phone' value='$row->phone'><br />
                <label>eMail</label><input type='text' name='email' value='$row->email'><br />
        </fieldset>

        <fieldset>
            <legend>Other Information</legend>
                <label>Current Student</label>"; echo form_dropdown('current', $optionYN); echo "<br/>
                <label>Enabled</label>"; echo form_dropdown('show', $optionsYN); echo "<br/>
                <label>Notes</label><textarea name='notes' rows='6' cols='50'>$row->notes</textarea><br />
        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update Student'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>
        <div class='clear'></div>
    </div>
";