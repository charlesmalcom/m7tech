<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($servicesData as $row){

echo"
        <fieldset>
            <legend>Update Services</legend>
                <label>Title</label><input type='text' name='title' value='$row->title'><br />
                <label>Short Description</label><input type='text' name='descriptionShort' value='$row->descriptionShort'><br />
                <label>Long Description</label><textarea name='descriptionLong' cols='50' rows='8'>$row->descriptionLong'</textarea><br />
                <label>Show</label>"; echo form_dropdown('show', $optYN); echo "<br/>
        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update Services'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>

        <div class='clear'></div>

    </div>
";