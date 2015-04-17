<div id="container">

    <table>
        <thead>
            <tr>
                <td colspan='6'>
                    <a href="<?php echo $this->config->item('baseURL'); ?>clients/create" class="button">New Client</a>
                    <a href="<?php echo $this->config->item('baseURL'); ?>clients/showCurrent" class="button">Current Clients</a>                
                    <a href="<?php echo $this->config->item('baseURL'); ?>clients/search" class="button">Search Clients</a>
                </td>
            </tr>
            <tr>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>clients/show/businessName/" alt="Sort Alpabetically">
                Business Name</a></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>clients/show/category/" alt="Sort Catagoricaly">
                Category</a></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>clients/show/city/" alt="Sort by City">
                City</a></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>clients/show/state/" alt="Sort by State">
                State</a></td>
                
                <td colspan="3" align="center">ACTIONS</td>
                
            </tr>
        </thead>

        <?php foreach($clientData as $row){ ?>

            <tr>
                <td><?php echo $row->businessName; ?></td>
                <td><?php echo $row->category; ?></td>
                <td><?php echo $row->city; ?></td>
                <td><?php echo $row->state; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>clients/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>