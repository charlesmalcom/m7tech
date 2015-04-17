<div id="container">

    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Description</td>
                <td>Availability</td>
                <td>ACTIONS</td>
            </tr>
        </thead>

        <?php foreach($courseData as $row){ ?>

            <tr>
                <td><?php echo $row->nameLong; ?></td>
                <td><?php echo $row->description; ?></td>
                <td><?php echo $row->available; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>courses/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>