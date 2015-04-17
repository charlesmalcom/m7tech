<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($classmaterialData as $row){

echo"
        <fieldset>
            <legend>Update Classmaterial</legend>
                <label>Course ID</label><input type='text' name='courseID' value='$row->courseID'><br />

                <label>Item</label>"; echo form_dropdown('item', $classItems); echo"<br/>
                <label>Number</label><input type='text' name='number' value='$row->number'><br />
                <label>Blurb</label><input type='text' name='blurb' value='$row->blurb'><br />
                <label>Available</label><input type='text' name='available' value='$row->available'><br />

        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update Class Material'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>

        <div class='clear'></div>

    </div>
";