<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>news/create' method='POST'>

        <fieldset>
            <legend>News Article</legend>
            <label>Date</label><input type='date' name='date'><br />
            <label>Article Info</label><textarea name='article' rows='6' cols='50'></textarea><br />
            <label>Show</label><?php echo form_dropdown('show', $optionYN); ?><br/>
        </fieldset>

        <label>&nbsp;</label><input type='submit' value='Create News'>

        <input type='hidden' name='dba' value='set'>

    </form>

    <div class="clear"></div>

</div>