<div id="container">

    <table>
        <thead>
            <tr>
                <td>Title</td>
                <td>Posted Date</td>
                <td>Posted By</td>
                <td>Article</td>
                <td>Show</td>
                <td>ACTIONS</td>
            </tr>
        </thead>

        <?php foreach($articlesData as $row){ ?>

            <tr>
                <td><?php echo $row->aritcleTitle; ?></td>
                <td><?php echo $row->postedDate; ?></td>
                <td><?php echo $row->postedBy; ?></td>
                <td><?php echo $row->article; ?></td>
                <td><?php echo $row->show; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>articles/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>