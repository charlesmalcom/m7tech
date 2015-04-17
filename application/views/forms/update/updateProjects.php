<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($projectsData as $row){

echo"
        <fieldset>
            <legend>Update Project</legend>
                <label>Business Name</label><input type='text' name='business_name' value='$row->business_name'><br />
                <label>Project Type</label><input type='text' name='project_type' value='$row->project_type'><br />
                <label>Project Description</label><input type='text' name='project_description' value='$row->project_description'><br />
                <label>Start Date</label><input type='date' name='start_date' value='$row->start_date'><br />
                <label>Est. Stop Date</label><input type='date' name='stop_date' value='$row->stop_date'><br />
                <label>Rate</label><input type='text' name='rate' value='$row->rate'><br />
                <label>Notes</label><textarea name='notes' rows='6' cols='40'>$row->notes</textarea><br />
                <label>Show</label>"; echo form_dropdown('show', $optionYN); echo"<br/>
                <label>Current</label>"; echo form_dropdown('current', $optionYN); echo"<br/>

        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update Project'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>

        <div class='clear'></div>

    </div>
";