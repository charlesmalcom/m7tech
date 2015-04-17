<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($xxxxxData as $row){

echo"
        <fieldset>
            <legend>Update Xxxxx</legend>
                <label>Label Here</label><input type='text' name='' value='$row->yyyyy'><br />
                <label>Label Here</label><input type='text' name='' value='$row->yyyyy'><br />
                <label>Label Here</label><input type='text' name='' value='$row->yyyyy'><br />
                <label>Label Here</label><input type='text' name='' value='$row->yyyyy'><br />

        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update Xxxxx'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>

        <div class='clear'></div>

    </div>
";