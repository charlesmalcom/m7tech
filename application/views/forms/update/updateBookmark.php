<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($bookmarksData as $row){

echo"
        <fieldset>
            <legend>Update Bookmarks</legend>
                <label>Link</label><input type='text' name='link' value='$row->link'><br />
                <label>Link Text</label><input type='text' name='link_text' value='$row->link_text'><br />
                <label>Category</label>"; echo form_dropdown('category', $optBookmarksCategoryData, $row->category); echo "<br/>
                <label>Sub-Category</label><input type='text' name='sub_category' value='$row->sub_category'><br />
                <label>Description</label><input type='text' name='description' value='$row->description'><br />



        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update Bookmarks'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>

        <div class='clear'></div>

    </div>
";