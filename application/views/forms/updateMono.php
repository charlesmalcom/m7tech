<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($monoData as $row){

echo"
        <fieldset>
            <legend>Update Mono</legend>
                <label>Rate/Rank</label><input type='text' name='rank' value='$row->rank'><br />
                <label>First Name</label><input type='text' name='firstName' value='$row->firstName'><br />
                <label>Last Name</label><input type='text' name='lasstName' value='$row->lastName'><br />
                <label>Date Taken</label><input type='text' name='dateTaken' value='$row->dateTaken'><br />
                <label>Date Posted</label><input type='text' name='datePosted' value='$row->datePosted'><br />
                <label>Location</label><input type='text' name='location' value='$row->location'><br />
                <label>File Name</label><input type='text' name='fileName' value='$row->fileName'><br />
                <label>Notes</label><input type='text' name='notes' value='$row->notes'><br />
        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update Mono'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>

        <div class='clear'></div>

    </div>
";