<div id="container">

    <table>
        <thead>
            <tr>
                <td colspan='6'>
                    <a href="<?php echo $this->config->item('baseURL'); ?>courses/create" class="button">New Course</a>
                    <a href="<?php echo $this->config->item('baseURL'); ?>courses/showCurrent" class="button">Current Courses</a>
                </td>
            </tr>
            <tr>
                <td>Course ID</td>
                <td>Name</td>
                <td>Description</td>
                <td>Location</td>
                <td>Availability</td>
                <td colspan="3" align="center">ACTIONS</td>
            </tr>
        </thead>

        <?php foreach($courseData as $row){ ?>

            <tr>
                <td><?php echo $row->courseId; ?></td>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->description; ?></td>
                <td><?php echo $row->location; ?></td>
                <td><?php echo $row->available; ?></td>


                <td><a href="<?php echo $this->config->item('baseURL'); ?>courses/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>courses/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>courses/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>

