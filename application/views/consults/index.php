<div id="container">

    <table>
        <thead>
        <tr>
            <td colspan='7'>
                <a href="<?php echo $this->config->item('baseURL'); ?>consults/create" class="button">New Consult</a>
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

        <?php foreach($consultsData as $row){ ?>

            <tr>
                <td><?php echo $row->yyyyy; ?></td>
                <td><?php echo $row->yyyyy; ?></td>
                <td><?php echo $row->yyyyy; ?></td>
                <td><?php echo $row->yyyyy; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>consults/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>consults/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>consults/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>