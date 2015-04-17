<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>consults/create' method='POST'>

        <fieldset>
            <legend>Business Information</legend>
                <label>Business Name</label><input type='text' name='businessName'><br />
                <label>Address</label><input type='text' name=''><br />
                <label>City</label><input type='text' name=''><br />
                <label>State / Zip</label><input type='text' name='' size='2'> / <input type='text' name='' size='5'><br />
                <label>Phone</label><input type='text' name=''><br />
                <label>Email</label><input type='text' name=''><br />
        </fieldset>

        <fieldset>
            <legend>Personal Information</legend>
                <label>First Name</label><input type='text' name=''><br />
                <label>Middle Name</label><input type='text' name=''><br />
                <label>Last Name</label><input type='text' name=''><br />
        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
                <label>Phone</label><input type='text' name=''><br />
                <label>Email</label><input type='text' name=''><br />
        </fieldset>

        <fieldset>
            <legend>Problem</legend>
                <label>Problem</label><textarea name=''></textarea><br />
        </fieldset>

        <input type='hidden' name='dba' value='set'>
        <input type='hidden' name='date' value=''>
        <input type='hidden' name='time' value=''>

        <label>&nbsp;</label><input type='submit' value='Create Consult'>
    </form>

    <div class="clear"></div>

</div>
