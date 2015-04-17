<div id="container">

    <form action='' method='POST'>

        <script type="text/javascript" src="<?php echo $this->config->item('public'); ?>js/json2.js"></script>
        <script type="text/javascript" src="<?php echo $this->config->item('public'); ?>js/customAJAX.js"></script>

        <fieldset>
            <legend>General Information</legend>
                <label>County</label><input type='text' name='county'><br />
                <label>Category</label><input type='text' name='category'><br />
                <label>Business Name</label><input type='text' name='businessName'>&nbsp;<input type='text' name='found_business_name' placeholder="DB Search"><br />
                <label>Adddress</label><input type='text' name='address'><br />
                <label>City</label><input type='text' name='city'><br />
                <label>State</label><input type='text' name='state'><br />
                <label>Zip</label><input type='text' name='zip'><br />
                <label>Phone</label><input type='text' name='phone'>
        </fieldset>

        <fieldset>
            <legend>Web Information</legend>
                <label>Website URL</label><input type='text' name='url'><br />
                <label>Google URL</label><input type='text' name='googleUrl'><br />
                <label>Facebook URL</label><input type='text' name='facebookUrl'><br />
                <label>eMail</label><input type='text' name='email'><br />
        </fieldset>

        <fieldset>
            <legend>Other Information</legend>
                <label>Notes</label><textarea rows="6" cols="40" name='notes' style="vertical-align: top"></textarea><br />
                <label>eMail Sent</label><?php echo form_dropdown('emailSent', $optionYN); ?><br/>
                <label>Flier Sent</label><?php echo form_dropdown('flierSent', $optionYN); ?><br/>
                <label>Have Business</label><?php echo form_dropdown('haveBusiness', $optionYN); ?><br/>
        </fieldset>

        <label>&nbsp;</label><input type='submit' value='Create Client'>
    </form>

    <div class="clear"></div>

</div>
