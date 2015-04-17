<div id="container">

    <table>
        <thead>
            <tr>
                <td>First Name</td>
                <td>Middle Name</td>
                <td>Last Name</td>
                <td>Current</td>
                <td>ACTIONS</td>
            </tr>
        </thead>

        <?php foreach($studentData as $row){ ?>

            <tr>
                <td><?php echo $row->first_name; ?></td>
                <td><?php echo $row->middle_name; ?></td>
                <td><?php echo $row->last_name; ?></td>
                <td><?php echo $row->current; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>students/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>