<div id="container">

    <table>
        <thead>
        <tr>
            <td colspan='7'>
                <a href="<?php echo $this->config->item('baseURL'); ?>articles/create" class="button">New Article</a>
            </td>
        </tr>
        <tr>
            <td>Title</td>
            <td>Posted Date</td>
            <td>Posted By</td>
            <td>Show</td>
            <td colspan="3" align="center">ACTIONS</td>
        </tr>
        </thead>

        <?php foreach($articlesData as $row){ ?>

            <tr>
                <td><?php echo $row->articleTitle; ?></td>
                <td><?php echo $row->postedDate; ?></td>
                <td><?php echo $row->postedBy; ?></td>
                <td><?php echo $row->show; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>articles/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>articles/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>articles/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>