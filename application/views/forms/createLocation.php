<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>locations/create' method='POST'>

        <fieldset>
            <legend>Create Location</legend>
                <label>Location</label><input type='text' name='location'><br />
                <label>Address</label><input type='text' name='address'><br />
                <label>City</label><input type='text' name='city'><br />
                <label>State</label><?php echo form_dropdown('state', $optState); ?><br/>
                <label>Available</label><?php echo form_dropdown('available', $optYN); ?><br/>
        </fieldset>

        <input type='hidden' name='dba' value='set'>

        <label>&nbsp;</label><input type='submit' value='Create Location'>
    </form>

    <div class="clear"></div>

</div>
