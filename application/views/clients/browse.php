<div id="container">

    <?php
        $segment_id = $this->uri->segment(3);

        $prev = $segment_id - 1;
        $next = $segment_id +1 ;
    ?>

    <fieldset style="text-align: center" >
        <legend><h3><h3>Browse Records</h3></h3></legend>
            <a href="<?php echo $prev; ?>"><img src="<?php echo $this->config->item('public'); ?>/images/actions/arrowleft.gif"></a>
            Previous&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Next
            <a href="<?php echo $next; ?>"><img src="<?php echo $this->config->item('public'); ?>/images/actions/arrowright.gif"></a>
    </fieldset>

    <?php foreach($clientData as $row){ ?>

        <fieldset>
            <legend><h3>Category</h3></legend>
                <label>Category</label><?php echo $row->category; ?>
                <label></label>
        </fieldset>

        <fieldset>
            <legend><h3>Business Information</h3></legend>
                <label>Business Name</label><?php echo $row->businessName; ?><br />
                <label>Address</label><?php echo $row->address; ?><br />
                <label>City</label><?php echo $row->city; ?>
                <label>State</label><?php echo $row->state; ?>
                <label>Zip</label><?php echo $row->zip; ?><br />
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

    <?php } ?>

</div>

<div class="clear"></div>
