<div id="container">

	<?php foreach($courseData as $row){ ?>

	<h3>This is <u><?php echo $row->nameLong; ?></u></h3>
	<p><?php echo $row->description; ?></p>
	<p>To take this course click <a href='<?php echo $this->config->item('baseURL'); ?>courses/signup?course=<?php echo $row->nameLong; ?>'>here</a>.</p>

	<?php } ?>

	<div class="clear"></div>

</div>