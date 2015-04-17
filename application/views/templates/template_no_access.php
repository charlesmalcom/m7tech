<?php

	include 'header.php';
	include 'nav_noaccess.php';
	include 'intro.html';

?>
	<div id="body">

		<div class="width">

			<?php /* LEFT COLUMN */ ?>
				<section id="content" class="one-column">

					<div class='error'>

						<?php echo $contents; ?>

					</div>

				</section>


			<div class="clear"></div>
		</div>
	</div>

<?php include 'footer_public.php'; ?>