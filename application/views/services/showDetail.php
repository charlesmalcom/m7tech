<div id="container">

    <?php foreach($servicesData as $row){ ?>

        <fieldset>
            <legend><h3>Detailed Information</h3></legend>
            <label>Title</label><?php echo $row->title; ?><br />
            <label>Short Description</label><?php echo $row->descriptionShort; ?><br />
            <label>Long Description</label><?php echo $row->descriptionLong; ?><br />
        </fieldset>

    <?php } ?>

</div>

<div class="clear"></div>