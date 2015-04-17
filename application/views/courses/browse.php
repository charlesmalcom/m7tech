<div id="container">

    <?php
        $segment_id = $this->uri->segment(3);

        $prev = $segment_id - 1;
        $next = $segment_id +1 ;
    ?>

    <fieldset style="text-align: center" >
        <legend><h3>Browse Records</h3></legend>
            <a href="<?php echo $this->config->item('baseURL'); ?>courses/browse/<?php echo $prev; ?>"><img src="<?php echo $this->config->item('public'); ?>/images/actions/arrowleft.gif"></a>
            Previous&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Next
            <a href="<?php echo $this->config->item('baseURL'); ?>courses/browse/<?php echo $next; ?>"><img src="<?php echo $this->config->item('public'); ?>/images/actions/arrowright.gif"></a>
    </fieldset>

    <?php foreach($courseData as $row){ ?>

        <fieldset>
            <legend><h3>Course Information</h3></legend>
                <label>Short Name</label><?php echo $row->nameShort; ?><br />
                <label>Long Name</label><?php echo $row->nameLong; ?><br />
                <label>Description</label><textarea rows="6" cols="50"><?php echo $row->description; ?></textarea><br />
                <label>Price</label><?php echo $row->price; ?><br />
                <label>Availability</label><?php echo $row->available; ?>
        </fieldset>

        <fieldset>
            <legend><h3>Location, Date & Time</h3></legend>
                <label>Start Date</label><?php echo $row->date_start; ?><br />
                <label>Stop Date</label><?php echo $row->date_stop; ?><br />
                <label>Location</label><?php echo $row->location; ?><br />
                <label><strong>Time</strong></label><?php echo $row->time; ?>
        </fieldset>

    <?php } ?>

</div>

<div class="clear"></div>