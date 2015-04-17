<div id="container">

    <table>
        <thead>
            <tr>
                <td>Job Type</td>
                <td>Rate</td>
                <td>ACTIONS</td>
            </tr>
        </thead>

        <?php foreach($ratesData as $row){ ?>

            <tr>
                <td><?php echo $row->jobType; ?></td>
                <td><?php echo $row->rate; ?></td>

                <td><a><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>