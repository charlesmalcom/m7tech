<div id="container">

    <table>
        <thead>
        <tr>
            <td>SHORT NAME</td>
            <td>LONG NAME</td>
            <td>DESCRIPTION</td>
            <td>PRICE</td>
            <td>AVAILABLE</td>
            <td>START DATE</td>
            <td>STOP DATE</td>
            <td>LOCATION</td>
            <td>TIME</td>

        </tr>
        </thead>

        <?php foreach($courseData as $row){ ?>

            <tr>
                <td><?php echo $row->nameShort; ?></td>
                <td><?php echo $row->nameLong; ?></td>
                <td><?php echo $row->description; ?></td>
                <td><?php echo $row->price; ?></td>
                <td><?php echo $row->available; ?></td>
                <td><?php echo $row->date_start; ?></td>
                <td><?php echo $row->date_stop; ?></td>
                <td><?php echo $row->location; ?></td>
                <td><?php echo $row->time; ?></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>