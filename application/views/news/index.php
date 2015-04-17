<div id="container">

    <table>
        <thead>
        <tr>
            <td colspan='7'>
                <a href="<?php echo $this->config->item('baseURL'); ?>news/create" class="button">Create News</a>
            </td>
        </tr>
        <tr>
            <td>Date</td>
            <td>Article</td>
            <td>Show</td>
            <td colspan="3" align="center">ACTIONS</td>
        </tr>
        </thead>

        <?php foreach($newsData as $row){ ?>

            <tr>
                <td><?php echo $row->date; ?></td>
                <td><?php echo $row->article; ?></td>
                <td><?php echo $row->show; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>news/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>news/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>