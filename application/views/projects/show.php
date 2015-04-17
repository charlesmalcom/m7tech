<div id="container">

    <table>
        <thead>
            <tr>
                <td>Business Name</td>
                <td>Project Type</td>
                <td>Start Date</td>
                <td>Stop Date</td>
                <td>ACTIONS</td>
            </tr>
        </thead>

        <?php foreach($projectsData as $row){ ?>

            <tr>
                <td><?php echo $row->business_name; ?></td>
                <td><?php echo $row->project_type; ?></td>
                <td><?php echo $row->start_date; ?></td>
                <td><?php echo $row->stop_date; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>projects/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>