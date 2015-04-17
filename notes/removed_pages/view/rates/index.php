<div id="container">

    <table>
        <thead>
        <tr>
            <td colspan='7'>
                <a href="<?php echo $this->config->item('baseURL'); ?>rates/create" class="button">New Rates</a>
            </td>
        </tr>
        <tr>
            <td>Job Type</td>
            <td>Rate</td>
            <td colspan="3" align="center">ACTIONS</td>
        </tr>
        </thead>

        <?php foreach($ratesData as $row){ ?>

            <tr>
                <td><?php echo $row->jobType; ?></td>
                <td><?php echo $row->rate; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>rates/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>rates/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>