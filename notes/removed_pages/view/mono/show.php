<div id="container">

    <table>
        <thead>
            <tr>
                <td colspan='6'>
                    <a href="<?php echo $this->config->item('baseURL'); ?>mono/create" class="button">New Mono Picture</a>
                </td>
            </tr>
            <tr>
                <td>Rate</td>
                <td>Last Name</td>
                <td>Date Taken</td>
                <td>File Name</td>
                <td>Notes</td>
                <td>ACTIONS</td>
            </tr>
        </thead>

        <?php foreach($monoData as $row){ ?>

            <tr>
                <td><?php echo $row->rank; ?></td>
                <td><?php echo $row->lastName; ?></td>
                <td><?php echo $row->dateTaken; ?></td>
                <td><?php echo $row->fileName; ?></td>
                <td><?php echo $row->notes; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>mono/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>