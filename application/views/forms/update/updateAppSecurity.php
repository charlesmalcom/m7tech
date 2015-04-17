<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($appSecurityData as $row){

echo"
        <fieldset>
            <legend>Update Security</legend>
                <label>Directory</label><input type='text' name='directory' value='$row->directory'><br />
                <label>Group</label>"; echo form_dropdown('type', $optSecurityGroups); echo"<br/>
        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update Security'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>

        <div class='clear'></div>

    </div>
";