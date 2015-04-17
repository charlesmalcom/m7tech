<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($leadsData as $row){

echo"
        <fieldset>
            <legend>Update Lead</legend>
                <label>Initial Date</label><input type='date' name='initialDate' value='$row->initialDate'><br />
                <label>Company Name</label><input type='text' name='companyName' value='$row->companyName'><br />
                <label>First Name</label><input type='text' name='firstName' value='$row->firstName'><br />
                <label>Last Name</label><input type='text' name='lastName' value='$row->lastName'><br />
                <label>City</label><input type='text' name='city' value='$row->city'><br />
                <label>State</label>"; echo form_dropdown('state', $optStates, $row->state); echo "<br/>

                <label>Email</label><input type='text' name='email' value='$row->email'><br />
                <label>Phone</label><input type='text' name='phone' value='$row->phone'><br />
                <label>Posted Date</label><input type='date' name='postedDate' value='$row->postedDate'><br />


                <label>URL</label><input type='text' name='url' value='$row->url'><br />
                <label>Wage Paid</label><input type='text' name='wagePaid' value='$row->wagePaid'><br />
                <label>Hours</label><input type='text' name='hours' value='$row->hours'><br />
                <label>Description</label><input type='text' name='description' value='$row->description'><br />
                <label>Blurb</label><textarea  name='blurb'>$row->blurb</textarea><br />

                <label>Responded</label>"; echo form_dropdown('response', $optYN, $row->response); echo "<br/>
                <label>Response Date</label><input type='date' name='responseDate' value='$row->responseDate'><br />
                <label>Contacted</label>"; echo form_dropdown('contacted', $optYN, $row->contacted); echo "<br/>
                <label>Contact Date</label><input type='date' name='contactedDate' value='$row->contactedDate'><br />
        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update Lead'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>

        <div class='clear'></div>

    </div>
";