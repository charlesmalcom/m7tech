<div id="container">

    <table>
        <thead>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>ACTIONS</td>
            </tr>
        </thead>

        <?php foreach($emailData as $row){ ?>

            <tr>
                <td><?php echo $row->yyyyy; ?></td>
                <td><?php echo $row->yyyyy; ?></td>
                <td><?php echo $row->yyyyy; ?></td>
                <td><?php echo $row->yyyyy; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>email/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>