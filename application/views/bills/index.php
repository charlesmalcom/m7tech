<div id="container">

    <table>
        <thead>
        <tr>
            <td colspan='7'>
                <a href="<?php echo $this->config->item('baseURL'); ?>bills/createIncome" class="button">Receive Payment</a>
                <a href="<?php echo $this->config->item('baseURL'); ?>bills/createExpense" class="button">Pay Expense</a>
                <a href="<?php echo $this->config->item('baseURL'); ?>bills/search" class="button">Search</a>
            </td>
        </tr>
        
        <tr>
            <td>Transaction Number</td>
            <td>Type</td>
            <td>Payee</td>
            <td>Date Due</td>
            <td>Amount Due</td>
            <td>Status</td>
            
            <td colspan="3" align="center">ACTIONS</td>
        </tr>
        </thead>

        <?php foreach($billsData as $row){ ?>

            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->type; ?></td>
                <td><?php echo $row->payee; ?></td>
                <td><?php echo $row->dueDate; ?></td>
                <td><?php echo $row->amount; ?></td>
                <td><?php echo $row->status; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>bills/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>bills/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>bills/info/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>