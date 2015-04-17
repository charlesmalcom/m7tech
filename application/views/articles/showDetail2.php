<div id="container">

    <?php foreach($articlesData as $row){ ?>

        <fieldset>
            <legend><h3>Article Detail</h3></legend>
            <label>Article Title</label><?php echo $row->articleTitle; ?><br />
            <label>Posted Date</label><?php echo $row->postedDate; ?>
            <label>Posted By</label><?php echo $row->postedBy; ?><br />
            <label>Article</label><?php echo $row->article; ?>
        </fieldset>

    <?php } ?>

</div>

<div class="clear"></div>