<?php
//random string generator
$length = 10;
$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
//echo $randomString;

?>

<div id="container">

    <br />
    <form action='signup/process' method='POST'>

        <fieldset>
            <legend>Personal Information</legend>
                <label>First Name</label><input type='text' name='firstName'><br />
                <label>Last Name</label><input type='text' name='lastName'><br />
                <label>Address</label><input type='text' name='address'><br />
                <label>City</label><input type='text' name='city'><br />
                <label>State</label><input type='text' name='state'><br />
                <label>Zip</label><input type='text' name='zip'><br />
                <label>Phone</label><input type='text' name='phone'><br />
                <label>eMail</label><input type='text' name='email'><br />
        </fieldset>

        <fieldset>
            <legend>Account Information</legend>
            <label>Username</label><input type='text' name='username'><br />
            <label>Password</label><input type='password' name='password'><br />
            <label>Password (again)</label><input type='password' name='password2'><br />
        </fieldset>

        <input type='hidden' name='enabled' name='0'><br />
        <input type='hidden' name='activated' name='0'><br />
        <input type='hidden' name='activationCode' name='<?php echo $randomString; ?>'><br />

        <input type='hidden' name='type' name='owncloud'><br />



        <label>&nbsp;</label><input type='submit' value='Sign Up'>
    </form>

    <div class="clear"></div>

</div>