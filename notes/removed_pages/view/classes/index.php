<div id="container">

    <table>
        <thead>
        <tr>
            <td colspan='9'>
                <a href="<?php echo $this->config->item('baseURL'); ?>classes/create" class="button">New Class</a>
            </td>
        </tr>
        <tr>
            <td>Course ID</td>
            <td>Start Date</td>
            <td>Stop Date</td>
            <td>location</td>
            <td>price</td>
            <td>available</td>
            
            <td colspan="3" align="center">ACTIONS</td>
        </tr>
        </thead>

        <?php foreach($classesData as $row){ ?>

            <tr>
                <td><?php echo $row->courseId; ?></td>
                <td><?php echo $row->startDate; ?></td>
                <td><?php echo $row->stopDate; ?></td>
                <td><?php echo $row->location; ?></td>
                <td><?php echo $row->price; ?></td>
                <td><?php echo $row->available; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>classes/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>classes/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>classes/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>