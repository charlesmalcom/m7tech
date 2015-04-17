<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>students/create' method='POST'>

        <fieldset>
            <legend>Personal Information</legend>
                <label>First Name</label><input type='text' name='first_name'><br />
                <label>Middle Name</label><input type='text' name='middle_name'><br />
                <label>Last Name</label><input type='text' name='last_name'><br />
                <label>Address</label><input type='text' name='address'><br />
                <label>City</label><input type='text' name='city'><br />
                <label>State</label><?php echo form_dropdown('state', $optStates); ?><br/>
                <label>Zip</label><input type='text' name='zip'><br />

        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
                <label>Phone</label><input type='text' name='phone'><br />
                <label>eMail</label><input type='text' name='email'><br />
        </fieldset>

        <fieldset>
            <legend>Other Information</legend>
                <label>Current Student</label><?php echo form_dropdown('current', $optionYN); ?><br/>
                <label>Enabled</label><?php echo form_dropdown('show', $optionYN); ?><br/>
                <label>Notes</label><textarea name='notes' rows='6' cols='50'></textarea><br />
        </fieldset>

        <input type='hidden' name='dba' value='set'>

        <label>&nbsp;</label><input type='submit' value='Create Student'>
    </form>

    <div class="clear"></div>

</div>
