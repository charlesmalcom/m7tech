<div id="container">

    <table>
        <thead>
        <tr>
            <td colspan='7'>
                <a href="<?php echo $this->config->item('baseURL'); ?>services/create" class="button">New Service</a>
            </td>
        </tr>
        <tr>
            <td>Title</td>
            <td>Short Description</td>
            <td>Show</td>
            <td colspan="3" align="center">ACTIONS</td>
        </tr>
        </thead>

        <?php foreach($servicesData as $row){ ?>

            <tr>
                <td><?php echo $row->title; ?></td>
                <td><?php echo $row->descriptionShort; ?></td>
                <td><?php echo $row->show; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>services/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>services/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>services/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>