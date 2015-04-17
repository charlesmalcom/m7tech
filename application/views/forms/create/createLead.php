<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>leads/create' method='POST'>

        <fieldset>
            <legend>Create Lead</legend>
                <label>Initial Date</label><input type='date' name='initialDate'><br />
                <label>Company Name</label><input type='text' name='companyName'><br />
                <label>First Name</label><input type='text' name='firstName'><br />
                <label>Last Name</label><input type='text' name='lastName'><br />
                <label>City</label><input type='text' name='city'><br />
                <label>State</label><?php echo form_dropdown('state', $optStates, 'WV'); ?><br/>
                <label>Email</label><input type='text' name='email'><br />
                <label>Phone</label><input type='text' name='phone'><br />
                <label>Posted Date</label><input type='date' name='postedDate'><br />
                <label>URL</label><input type='text' name='url'><br />
                <label>Wage Paid</label><input type='text' name='wagePaid'><br />
                <label>Hours</label><input type='text' name='hours'><br />
                <label>Description</label><input type='text' name='description'><br />
                <label>Blurb</label><textarea  name='blurb'></textarea><br />
                <label>Responsed</label><?php echo form_dropdown('response', $optYN, 'No'); ?><br/>
                <label>Response Date</label><input type='date' name='responseDate'><br />
                <label>Contacted</label><?php echo form_dropdown('contacted', $optYN, 'No'); ?><br/>
                <label>Contact Date</label><input type='date' name='contactedDate'><br />

        </fieldset>

        <input type='hidden' name='dba' value='set'>

        <label>&nbsp;</label><input type='submit' value='Create Lead'>
    </form>

    <div class="clear"></div>

</div>
