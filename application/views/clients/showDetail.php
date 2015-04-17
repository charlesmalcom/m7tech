<div id="container">

    <table>
        <thead>
        <tr>
            <td>COUNTY</td>
            <td>CATEGORY</td>
            <td>BUSINESS NAME</td>

            <td>ADDRESS</td>
            <td>CITY</td> <td>STATE</td> <td>ZIP</td>
            <td>PHONE</td>
            <td>URL</td>
            <td>GOOGLE URL</td>
            <td>FACEBOOK URL</td>
            <td>NOTES</td>
            <td>EMAIL</td>
            <td>FLIER</td>
            <td>HAVE BUSINESS</td>

        </tr>
        </thead>

        <?php foreach($clientData as $row){ ?>

            <tr>
                <td><?php echo $row->county; ?></td>
                <td><?php echo $row->category; ?></td>
                <td><?php echo $row->businessName; ?></td>
                <td><?php echo $row->address; ?></td>
                <td><?php echo $row->city; ?></td>
                <td><?php echo $row->state; ?></td>
                <td><?php echo $row->zip; ?></td>
                <td><?php echo $row->phone; ?></td>
                <td><?php echo $row->url; ?></td>
                <td><?php echo $row->googleUrl; ?></td>
                <td><?php echo $row->facebookUrl; ?></td>
                <td><?php echo $row->notes; ?></td>
                <td><?php echo $row->emailSent; ?></td>
                <td><?php echo $row->flierSent; ?></td>
                <td><?php echo $row->haveBusiness; ?></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>
