<div id="body" class="width">
    <form action='login/verify' method='POST'>
        <fieldset>
            <legend>Class Information</legend>
            <label>Class Name</label><input type='text' name=''><br />
            <label>Short Name</label><input type='text' name=''><br />
            <label>Long Name</label><input type='text' name=''><br />
            <label>Description</label><input type='text' name=''><br />
            <label>Price</label><input type='text' name=''><br />
            <label>Available</label><input type='text' name=''><br />
            <label>Start Date</label><input type='text' name=''><br />
            <label>Stop Date</label><input type='text' name=''><br />
            <label>Location</label><input type='text' name=''><br />
            <label>Time</label><input type='text' name=''><br />
            <label>Enabled</label><?php echo form_dropdown('option_show', $optionYN); ?><br/>
        </fieldset>

        <label>&nbsp;</label><input type='submit' value='Create Project'>
    </form>

    <div class="clear"></div>
</div>
