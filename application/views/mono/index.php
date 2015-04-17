<div id="container">

    <table>
        <thead>
        <tr>
            <td colspan='7'>
                <a href="<?php echo $this->config->item('baseURL'); ?>mono/create" class="button">New Mono</a>
            </td>
        </tr>
        <tr>
            <td>Rate/Rank</td>
            <td>Last Name</td>
            <td>Date Taken</td>
            <td>File Name</td>
            <td colspan="3" align="center">ACTIONS</td>
        </tr>
        </thead>

        <?php foreach($monoData as $row){ ?>

            <tr>
                <td><?php echo $row->rank; ?></td>
                <td><?php echo $row->lastName; ?></td>
                <td><?php echo $row->dateTaken; ?></td>
                <td><?php echo $row->location; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>mono/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>mono/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>mono/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>