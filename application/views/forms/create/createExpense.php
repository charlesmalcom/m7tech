<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>bills/createExpense' method='POST'>

        <fieldset>
            <legend>Enter Expense</legend>
                <label>Payee</label><?php echo form_dropdown('payee', $optPayee); ?><br/>
                <label>Account Number</label><input type='text' name='accountNumber'><br />
                <label>Category</label><?php echo form_dropdown('category', $optCategory); ?><br/>
                <label>Due On</label><input type='date' name='dueDate'><br />
                <label>Paid On</label><input type='date' name='paidDate'><br />
                <label>Amount Due</label><input type='text' name='amount' placeholder='$'><br />
                <label>Bill Status</label><?php echo form_dropdown('status', $optBillStatus); ?><br/>
        </fieldset>

        <input type='hidden' name='dba' value='set'>
        <input type='hidden' name='type' value='withdrawl'>

        <label>&nbsp;</label><input type='submit' value='Enter Bill'>
    </form>

    <div class="clear"></div>

</div>
