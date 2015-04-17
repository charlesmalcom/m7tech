<?php

	include 'header.php';
	include 'nav_admin.php';
	//include 'intro.html';

?>
	<div id="body">

		<div class="width">

			<?php /* LEFT COLUMN */ ?>
				<section id="content" class="one-column with-right-sidebar">

					<?php include 'breadCrumbs.php'; ?>

					<?php echo $contents; ?>

				</section>

			<div class="clear"></div>

		</div>

	</div>

<?php include 'footer_admin.php'; ?>