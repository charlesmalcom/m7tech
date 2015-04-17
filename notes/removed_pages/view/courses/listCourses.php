<table>
    <thead>
    <tr>
        <td>COURSE</td>
        <td>PRICE</td>
        <td>AVAILABLE</td>
        <td>SIGN UP</td>

    </tr>
    </thead>

    <?php foreach($courseData as $row){ ?>

        <tr>
            <td><?php echo $row->nameLong; ?></td>
            <td>$<?php echo $row->price; ?></td>
            <td><?php echo $row->available; ?></td>
            <td><a href="courses/signup?course=<?php echo $row->nameShort; ?>">Sign Up Here</a></td>
        </tr>

    <?php } ?>

</table>
