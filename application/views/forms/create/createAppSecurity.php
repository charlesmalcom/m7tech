<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>appsecurity/create' method='POST'>

        <fieldset>
            <legend>Create Security</legend>
            <label>Directory</label><input type='text' name='directory'><br />
            <label>Group</label><?php echo form_dropdown('type', $optSecurityGroups); ?><br/>

        </fieldset>

        <input type='hidden' name='dba' value='set'>

        <label>&nbsp;</label><input type='submit' value='Create Security'>
    </form>

    <div class="clear"></div>

</div>
