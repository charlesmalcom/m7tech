<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($clientData as $row){

echo"
        <fieldset>
            <legend>General Information</legend>
                <label>County</label><input type='text' name='county' value='$row->county'><br />
                <label>Category</label><input type='text' name='category' value='$row->category'><br />

                <label>Business Name</label><input type='text' name='businessName' value='$row->businessName'><br />
                <label>Address</label><input type='text' name='address' value='$row->address'><br />
                <label>City</label><input type='text' name='city' value='$row->city'><br />
                <label>State</label><input type='text' name='state' value='$row->state'><br />
                <label>Zip</label><input type='text' name='zip' value='$row->zip'><br />
                <label>Phone</label><input type='text' name='phone' value='$row->phone'><br />
        </fieldset>

        <fieldset>
            <legend>Web Information</legend>
                <label>Website URL</label><input type='text' name='url' value='$row->url'><br />
                <label>Google URL</label><input type='text' name='googleUrl' value='$row->googleUrl'><br />
                <label>Facebook URL</label><input type='text' name='facebookUrl' value='$row->facebookUrl'><br />
                <label>eMail</label><input type='text' name='email' value='$row->email'><br />
        </fieldset>

        <fieldset>
            <legend>Other Information</legend>
                <label>Notes</label><textarea rows='6' cols='45' name='notes'>$row->notes</textarea><br />
                <label>eMail Sent</label><input type='text' name='emailSent' value='$row->emailSent'><br />
                <label>Flier Sent</label><input type='text' name='flierSent' value='$row->flierSent'><br />
                <label>Have Business</label><input type='text' name='haveBusiness' value='$row->haveBusiness'><br />
        </fieldset>

        <fieldset>
            <legend>Account Information</legend>
";

            foreach($clientAccountData as $row){

                echo"
                    <label>Account</label><input type='text' name='account' value='$row->account'><br />
                    <label>Username</label><input type='text' name='flierSent' value='$row->username'><br />
                    <label>Password</label><input type='text' name='flierSent' value='$row->password'><br />
                ";

            }

echo"
        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update Client'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>

        <div class='clear'></div>

    </div>
";