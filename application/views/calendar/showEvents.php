<div id="container">
    <table>

        <thead>
        <tr>
            <td colspan='17'>
                <a href="<?php echo $this->config->item('baseURL'); ?>calendar/createCalendarEvent" class="button">New Student</a>
            </td>
        </tr>
        <tr>
            <td>Date</td>
            <td>Event</td>

            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        </thead>


        <?php foreach($eventData as $row){ ?>

            <tr>
                <td><?php echo $row->date; ?></td>
                <td><?php echo $row->event; ?></td>

                <td><a href='<?php echo $this->config->item('baseURL'); ?>calendar/update/<?php echo $row->id; ?>'><img src='<?php echo $this->config->item('baseURL'); ?>public/images/actions/edit.gif'></a></td>
                <td><a href='<?php echo $this->config->item('baseURL'); ?>calendar/delete/<?php echo $row->id; ?>''><img src='<?php echo $this->config->item('baseURL'); ?>public/images/actions/delete.gif'></a></td>
            </tr>

        <?php } ?>

    </table>
</div>