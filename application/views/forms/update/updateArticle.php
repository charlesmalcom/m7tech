<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($articlesData as $row){

echo"
        <fieldset>
            <legend>Update Article</legend>
                <label>Title</label><input type='text' name='articleTitle' value='$row->articleTitle'><br />
                <label>Posted Date</label><input type='text' name='postedDate' value='$row->postedDate'><br />
                <label>Posted By</label><input type='text' name='postedBy' value='$row->postedBy'><br />
                <label>Article</label><textarea rows='8' cols='50' name='article'>$row->article</textarea><br />
                <label>Show</label>"; echo form_dropdown('show', $optionYN); echo"<br/>

        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update Article'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>

        <div class='clear'></div>

    </div>
";