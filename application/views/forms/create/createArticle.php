<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>articles/create' method='POST'>

        <fieldset>
            <legend>Create Articles</legend>
            <label>Title</label><input type='text' name='articleTitle'><br />
            <label>Posted Date</label><input type='date' name='postedDate'><br />
            <label>Posted By</label><input type='text' name='postedBy'><br />
            <label>Article</label><textarea rows="8" cols="50" name='article'></textarea><br />
            <label>Show</label><?php echo form_dropdown('show', $optionYN); ?><br/>

        </fieldset>

        <input type='hidden' name='dba' value='set'>

        <label>&nbsp;</label><input type='submit' value='Create Article'>
    </form>

    <div class="clear"></div>

</div>
