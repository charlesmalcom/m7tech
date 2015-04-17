<div id="container">

    <table>
        <thead>
            <tr>
                <td>Location</td>
                <td>Address</td>
                <td>City</td>
                <td>State</td>
                <td>Available</td>
                <td>ACTIONS</td>
            </tr>
        </thead>

        <?php foreach($locationsData as $row){ ?>

            <tr>
                <td><?php echo $row->location; ?></td>
                <td><?php echo $row->address; ?></td>
                <td><?php echo $row->city; ?></td>
                <td><?php echo $row->state; ?></td>
                <td><?php echo $row->available; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>locations/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>