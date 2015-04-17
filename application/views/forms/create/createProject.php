<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>projects/create' method='POST'>

        <fieldset>
            <legend>Create Project</legend>
                <label>Business Name</label><input type='text' name='business_name'><br />
                <label>Project Type</label><?php echo form_dropdown('project_type', $optProjectType); ?><br/>
                <label>Project Description</label><input type='text' name='project_description'><br />
                <label>Start Date</label><input type='date' name='start_date' placeholder='xx/xx/xx'><br />
                <label>Est. Stop Date</label><input type='date' name='stop_date' placeholder='xx/xx/xx'><br />
                <label>Rate</label><input type='text' name='rate' placeholder='$'><br />
                <label>Notes</label><textarea name='notes' rows='6' cols='40'></textarea><br />
                <label>Enabled</label><?php echo form_dropdown('show', $optionYN); ?><br/>
                <label>Current</label><?php echo form_dropdown('current', $optionYN); ?><br/>

        </fieldset>

        <input type='hidden' name='dba' value='set'>

        <label>&nbsp;</label><input type='submit' value='Create Project'>

    </form>

    <div class="clear"></div>

</div>
