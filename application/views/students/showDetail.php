<div id="container">

    <table>
        <thead>
        <tr>
            <td>Student ID</td>
            <td>First Name</td>
            <td>Middle Name</td>
            <td>Last Name</td>
            <td>Address</td>
            <td>City</td>
            <td>State</td>
            <td>Zip</td>
            <td>Phone</td>
            <td>eMail</td>
            <td>Notes</td>
            <td>Current</td>
        </tr>
        </thead>

        <?php foreach($studentData as $row){ ?>

            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->first_name; ?></td>
                <td><?php echo $row->middle_name; ?></td>
                <td><?php echo $row->last_name; ?></td>
                <td><?php echo $row->address; ?></td>
                <td><?php echo $row->city; ?></td>
                <td><?php echo $row->state; ?></td>
                <td><?php echo $row->zip; ?></td>
                <td><?php echo $row->phone; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->notes; ?></td>
                <td><?php echo $row->current; ?></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>