<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($ratesData as $row){

echo"
        <fieldset>
            <legend>Update Rates</legend>
                <label>Job Type</label><input type='text' name='jobType' value='$row->jobType'><br />
                <label>Rates</label><input type='text' name='rate' value='$row->rate'><br />
        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update Rates'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>

        <div class='clear'></div>

    </div>
";