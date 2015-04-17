<div id="container">

    <table>
        <thead>
        <tr>
            <td colspan='18'>
                <a href="<?php echo $this->config->item('baseURL'); ?>leads/create" class="button">New Lead</a>
            </td>
        </tr>
        <tr>
            <td>Initial Date</td>
            <td>Company</td>
            <td>Last, First</td>
            <td>City</td>
            <td>State</td>
            <td>Posted Date</td>
            <td>Url</td>
            <td>Wage Paid</td>
            <td>Hours</td>
            <td>Description</td>
            <td>Blurb</td>

            <td colspan="3" align="center">ACTIONS</td>
        </tr>
        </thead>

        <?php foreach($leadsData as $row){ ?>

            <tr>
                <td><?php echo $row->initialDate; ?></td>
                <td><?php echo $row->companyName; ?></td>
                <td><?php echo $row->lastName.', '.$row->firstName; ?></td>
                <td><?php echo $row->city; ?></td>
                <td><?php echo $row->state; ?></td>
                <td><?php echo $row->postedDate; ?></td>
                <td><?php echo $row->url; ?></td>
                <td><?php echo $row->wagePaid; ?></td>
                <td><?php echo $row->hours; ?></td>
                <td><?php echo $row->description; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>leads/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>leads/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>leads/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>