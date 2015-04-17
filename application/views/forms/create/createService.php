<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>services/create' method='POST'>

        <fieldset>
            <legend>Create Services</legend>
                <label>Title</label><input type='text' name='title'><br />
                <label>Short Description</label><input type='text' name='descriptionShort'><br />
                <label>Long Description</label><textarea name='descriptionLong'></textarea><br />
                <label>Show</label><?php echo form_dropdown('show', $optYN); ?><br/>

        </fieldset>

        <input type='hidden' name='dba' value='set'>

        <label>&nbsp;</label><input type='submit' value='Create Services'>
    </form>

    <div class="clear"></div>

</div>
