<div id="container">

    <table>
        <thead>
            <tr>
                <td>Directory</td>
                <td>Group</td>
                <td>ACTIONS</td>
            </tr>
        </thead>

        <?php foreach($appSecurityData as $row){ ?>

            <tr>
                <td><?php echo $row->directory; ?></td>
                <td><?php echo $row->type; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>appsecurity/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>