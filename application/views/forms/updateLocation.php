<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($locationsData as $row){

echo"
        <fieldset>
            <legend>Update Location</legend>
                <label>Location</label><input type='text' name='location' value='$row->location'><br />
                <label>Address</label><input type='text' name='address' value='$row->address'><br />
                <label>City</label><input type='text' name='city' value='$row->city'><br />
                <label>State</label><input type='text' name='state' value='$row->state'><br />
                <label>Available</label><input type='text' name='available' value='$row->available'><br />

        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update Location'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>

        <div class='clear'></div>

    </div>
";