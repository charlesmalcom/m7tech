<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>bills/createIncome' method='POST'>

        <fieldset>
            <legend>Enter Income</legend>
                <label>Payee</label><?php echo form_dropdown('payee', $optCurrentClients); ?><br/>
                <label>Category</label><?php echo form_dropdown('category', $optCategory); ?><br/>
                <label>Due On</label><input type='date' name='dueDate'><br />
                <label>Paid On</label><input type='date' name='paidDate'><br />
                <label>Amount Due</label><input type='text' name='amount'><br />
                <label>Bill Status</label><?php echo form_dropdown('status', $optPaymentTypes); ?><br/>
        </fieldset>

        <input type='hidden' name='dba' value='set'>
        <input type='hidden' name='type' value='deposit'>
        <input type='hidden' name='accountNumber' value='n/a'>

        <label>&nbsp;</label><input type='submit' value='Enter Bill'>
    </form>

    <div class="clear"></div>

</div>
