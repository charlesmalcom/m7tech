<div id="container">

    <table>
        <thead>
            <tr>
                <td>Date</td>
                <td>Article</td>
                <td>Show</td>
                <td>ACTIONS</td>
            </tr>
        </thead>

        <?php foreach($newsData as $row){ ?>

            <tr>
                <td><?php echo $row->date; ?></td>
                <td><?php echo $row->article; ?></td>
                <td><?php echo $row->show; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>news/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>