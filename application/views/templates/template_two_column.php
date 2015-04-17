<?php

	include 'header.php';
	include 'nav_public.php';
	include 'intro.html';

$public = $this->config->item('local_public');

?>
	<div id="body">

		<?php
			include_once $public.'js/js_sdk.php';
			include $public.'js/js_sdk.php';
 		?>

		<div class="width">

			<?php /* LEFT COLUMN */ ?>
				<section id="content" class="two-column with-right-sidebar">

					<?php echo $contents; ?>

				</section>


			<?php /* RIGHT COLUMN */ ?>
				<aside class="sidebar big-sidebar right-sidebar">

					<ul>
						<?php
							//include 'sideMenu.php';
								echo "<hr />";
							include 'calendar.php';

								echo "<hr />";
							include 'news.php';
							//include 'bottomRightPane.php';
						?>
					</ul>

				</aside>

			<div class="clear"></div>
		</div>
	</div>

<?php include 'footer_public.php'; ?>