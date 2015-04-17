<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($newsData as $row){

echo"
        <fieldset>
            <legend>Update News</legend>
                <label>Date</label><input type='date' name='date' value='$row->date'><br />
                <label>Article</label><textarea name='article' rows='6' cols='40' style='vertical-align: top'>".$row->article."</textarea><br />
                <label>Show</label>"; echo form_dropdown('show', $optionYN); echo"<br/>
        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update News'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>

        <div class='clear'></div>

    </div>
";