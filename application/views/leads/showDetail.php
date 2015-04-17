<div id="container">

    <?php foreach($leadsData as $row){ ?>

        <fieldset>
            <legend>Other</legend>
                <label>ID</label><?php echo $row->id; ?><br />
                <label>Posted Date</label><?php echo $row->postedDate; ?><br />
                <label>Url</label><?php echo $row->url; ?>
        </fieldset>

        <fieldset>
            <legend>Contact Info</legend>

                <label>Company</label><?php echo $row->companyName; ?><br />
                <label>Last, First</label><?php echo $row->lastName.', '.$row->firstName; ?><br />

                <label>City, State</label><?php echo $row->city.', '.$row->state; ?><br />
                <label>Email</label><?php echo $row->email; ?><br />
                <label>Phone</label><?php echo $row->phone; ?>
        </fieldset>

        <fieldset>
            <legend>Work Details</legend>
                <label>Wage Paid</label><?php echo $row->wagePaid; ?><br />
                <label>Hours</label><?php echo $row->hours; ?><br />
                <label>Description</label><?php echo $row->description; ?><br />
                <label>Blurb</label><?php echo $row->blurb; ?><br />
        </fieldset>

        <fieldset>
            <legend>Contact Details</legend>
                <label>Initial Date</label><?php echo $row->initialDate; ?><br />
                <label>Response</label><?php echo $row->response; ?><br />
                <label>Response Date</label><?php echo $row->responseDate; ?><br />
                <label>Contacted</label><?php echo $row->contacted; ?><br />
                <label>Contacted Date</label><?php echo $row->contactedDate; ?><br />
        </fieldset>

    <?php } ?>

</div>

<div class="clear"></div>