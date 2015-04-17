<div id="container">

    <table>
        <thead>
            <tr>
                <td colspan='6'>
                    <a href="<?php echo $this->config->item('baseURL'); ?>clients/create" class="button">New Client</a>
                    <a href="<?php echo $this->config->item('baseURL'); ?>clients/showCurrent" class="button">Current Clients</a>
                </td>
            </tr>
            <tr>
                <td>Business Name</td>
                <td>City</td>
                <td>Have Business</td>
                <td colspan="3" align="center">ACTIONS</td>
            </tr>
        </thead>

        <?php foreach($clientData as $row){ ?>

            <tr>
                <td><?php echo $row->businessName; ?></td>
                <td><?php echo $row->city; ?></td>
                <td><?php echo $row->haveBusiness; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>clients/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>clients/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>clients/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>