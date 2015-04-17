<div id="container">

    <?php foreach($clientData as $row){ ?>

        <fieldset>
            <legend><h3>Category</h3></legend>
                <label>Category</label><?php echo $row->category; ?>
                <label></label>
        </fieldset>

        <fieldset>
            <legend><h3>Business Information</h3></legend>
                <label>Client Number</label><?php echo $row->id; ?><br />
                <label>Business Name</label><?php echo $row->businessName; ?><br />
                <label>Address</label><?php echo $row->address; ?><br />
                <label>City, State Zip</label><?php echo $row->city; ?>,<?php echo $row->state; ?> <?php echo $row->zip; ?><br />
                <label>County</label><?php echo $row->county; ?>
                <label></label>
        </fieldset>

        <fieldset>
            <legend><h3>Contact Infomation</h3></legend>
                <label>Phone</label><?php echo $row->phone; ?><br />
                <label>eMail</label><?php echo $row->email; ?><br />
                <label>URL.</label><?php echo $row->url; ?><br />
                <label>Google Sites</label><?php echo $row->googleUrl; ?><br />
                <label>Facebook</label><?php echo $row->facebookUrl; ?><br />
        </fieldset>

        <fieldset>
            <legend><h3>Other</h3></legend>
                <label>Notes</label>
                    <textarea rows="8" cols="65"><?php echo $row->notes; ?></textarea><br />


            <label>Email Sent</label><?php echo $row->emailSent; ?>
                <label>Flier Sent</label><?php echo $row->flierSent; ?>
                <label>Have Business</label><?php echo $row->haveBusiness; ?>
        </fieldset>

        <fieldset>
            <legend><h3>Online Accounts</h3></legend>

            <?php foreach($clientAccountData as $row){ ?>

                <label>Account</label><?php echo $row->account; ?><br />
                <label>Username</label><?php echo $row->username; ?><br />
                <label>Password</label><?php echo $row->password; ?><br />
            <?php } ?>

        </fieldset>

    <?php } ?>

</div>

<div class="clear"></div>
