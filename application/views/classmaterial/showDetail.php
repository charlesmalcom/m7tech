<div id="container">

    <?php foreach($coursematerialData as $row){ ?>

        <label>Course ID</label><?php echo $row->courseId; ?><br />
        <label>Class ID</label><?php echo $row->classId; ?><br />

        <label>Item</label><?php echo $row->item." ".$row->number; ?><br />
        <label>Blurb</label><?php echo $row->blurb; ?><br />

        <label>Available</label><?php echo $row->available; ?><br />

    <?php } ?>

</div>

<div class="clear"></div>