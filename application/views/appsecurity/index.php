<div id="container">

    <table>
        <thead>
        <tr>
            <td colspan='7'>
                <a href="<?php echo $this->config->item('baseURL'); ?>appsecurity/create" class="button">App Security</a>
            </td>
        </tr>
        <tr>
            <td>Directory</td>
            <td>Group</td>
            <td colspan="3" align="center">ACTIONS</td>
        </tr>
        </thead>

        <?php foreach($appSecurityData as $row){ ?>

            <tr>
                <td><?php echo $row->directory; ?></td>
                <td><?php echo $row->type; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>appsecurity/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>appsecurity/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>