<div id="container">

	<?php foreach($servicesData as $row){ ?>

		<div class="imageSwapContainer">

			<div class="image">
				<img src='http://127.0.0.1/creating/m7tech/public/images/background/<?php echo $row->image; ?>' style="height:200px; width:200px;" />
			
				<div class="text">
					<h4><a href="<?php echo $this->config->item('baseURL'); ?>services/infoPublic/<?php echo $row->id; ?>"><?php echo $row->title; ?></a></h4> 
				</div> 

			</div>

		</div>	

    <?php } ?>
    
</div>

<div class="clear"></div>
