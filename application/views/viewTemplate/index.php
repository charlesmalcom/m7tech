<div id="container">

    <table>
        <thead>
        <tr>
            <td colspan='7'>
                <a href="<?php echo $this->config->item('baseURL'); ?>xxxxx/create" class="button">New Xxxxx</a>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td colspan="3" align="center">ACTIONS</td>
        </tr>
        </thead>

        <?php foreach($xxxxxData as $row){ ?>

            <tr>
                <td><?php echo $row->yyyyy; ?></td>
                <td><?php echo $row->yyyyy; ?></td>
                <td><?php echo $row->yyyyy; ?></td>
                <td><?php echo $row->yyyyy; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>xxxxx/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>xxxxx/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>xxxxx/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>