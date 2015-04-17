<div id="container">

    <h3>Your file was successfully uploaded!</h3>

    <ul>
        <?php foreach ($upload_data as $item => $value):?>
            <li><?php echo $item;?>: <?php echo $value;?></li>
        <?php endforeach; ?>
    </ul>

    <p><?php echo anchor('mono/create', 'Upload Another File!'); ?></p>

</div>

<div class="clear"></div>