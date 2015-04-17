<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>bookmarks/results' method='POST'>

        <fieldset>
            <legend>Search Bookmarks</legend>
                <label>Search for: </label><input type='text' name='search_text'><br />
                <label>Category</label><?php echo form_dropdown('search_category', $optBookmarksData, "All"); ?><br/>

        </fieldset>

        <input type='hidden' name='dba' value='set'>

        <label>&nbsp;</label><input type='submit' value='Search'>
    </form>

    <div class="clear"></div>

</div>
