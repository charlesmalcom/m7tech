<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>bookmarks/create' method='POST'>

        <fieldset>
            <legend>Create Bookmark</legend>
                <label>Link</label><input type='text' name='link'><br />
                <label>Link Name</label><input type='text' name='link_text'><br />
                <label>Category</label><?php echo form_dropdown('category', $optBookmarksData); ?><br/>
                <label>Sub-Category</label><input type='text' name='sub_category'><br />
                <label>Description</label><textarea name="description"></textarea><br />

        </fieldset>

        <input type='hidden' name='dba' value='set'>

        <label>&nbsp;</label><input type='submit' value='Create Bookmark'>
    </form>

    <div class="clear"></div>

</div>
