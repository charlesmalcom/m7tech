<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>email/create' method='POST'>

        <fieldset>
            <legend>Create Email</legend>
                <label>From</label><input type='text' name='from'><br />
                <label>To</label><?php echo form_dropdown('to', $studentEmailData); ?><br/>

                <label>CC</label><input type='text' name='cc'>&nbsp;<input type="checkbox" name="ccEnable" id="ccEnable"><br />
                <label>BCC</label><input type='text' name='bcc'>&nbsp;<input type="checkbox" name="bccEnable" id="bccEnable"><br />

                <label>Subject</label><input type='text' name='subject'><br />
                <label>Body</label><textarea name="body" rows="8" cols="65"></textarea><br />

        </fieldset>

        <input type='hidden' name='dba' value='set'>

        <label>&nbsp;</label><input type='submit' value='Send Email'>
    </form>

    <div class="clear"></div>

</div>
