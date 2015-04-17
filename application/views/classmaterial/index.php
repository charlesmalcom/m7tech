<div id="container"classmaterial>

    <table>
        <thead>
        <tr>
            <td colspan='11'>
                <a href="<?php echo $this->config->item('baseURL'); ?>classmaterial/create" class="button">New Coure Material</a>
            </td>
        </tr>
        <tr>
            <td>Course ID</td>
            <td>Class ID</td>
            <td>Item</td>
            <td>Number</td>
            <td>Available</td>
            <td colspan="3" align="center">ACTIONS</td>
        </tr>
        </thead>

        <?php foreach($classmaterialData as $row){ ?>

            <tr>
                <td><?php echo $row->courseId; ?></td>
                <td><?php echo $row->classId; ?></td>
                <td><?php echo $row->item; ?></td>
                <td><?php echo $row->number; ?></td>
                <td><?php echo $row->available; ?></td>


                <td><a href="<?php echo $this->config->item('baseURL'); ?>classmaterial/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>classmaterial/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>classmaterial/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>