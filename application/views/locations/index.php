<div id="container">

    <table>
        <thead>
            <tr>
                <td colspan='8'>
                    <a href="<?php echo $this->config->item('baseURL'); ?>locations/create" class="button">New Location</a>
                </td>
            </tr>
            <tr>
                <td>Location</td>
                <td>Address</td>
                <td>City</td>
                <td>State</td>
                <td>Available</td>
                <td colspan="3" align="center">ACTIONS</td>
            </tr>
        </thead>

        <?php foreach($locationsData as $row){ ?>

            <tr>
                <td><?php echo $row->location; ?></td>
                <td><?php echo $row->address; ?></td>
                <td><?php echo $row->city; ?></td>
                <td><?php echo $row->state; ?></td>
                <td><?php echo $row->available; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>locations/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>locations/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>