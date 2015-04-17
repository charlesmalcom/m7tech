<?php

echo"
    <div id='container'>

        <form action='' method='POST'>
";

            foreach($billsData as $row){

echo"
        <fieldset>
            <legend>Update Bills</legend>
                <label>Payee</label><?php echo form_dropdown('payee', $optPayee); ?><br/>
                <label>Account Number</label><input type='text' name='accountNumber'><br />
                <label>Category</label><?php echo form_dropdown('category', $optCategory); ?><br/>
                <label>Due On</label><input type='date' name='dueDate'><br />
                <label>Paid On</label><input type='date' name='paidDate'><br />
                <label>Amount Due</label><input type='text' name='amount' placeholder='$'><br />
                <label>Bill Status</label><?php echo form_dropdown('status', $optBillStatus); ?><br/>
                <label>Label Here</label><input type='text' name='' value='$row->yyyyy'><br />
                <label>Label Here</label><input type='text' name='' value='$row->yyyyy'><br />
                <label>Label Here</label><input type='text' name='' value='$row->yyyyy'><br />
                <label>Label Here</label><input type='text' name='' value='$row->yyyyy'><br />

        </fieldset>

            <label>&nbsp;</label><input type='submit' value='Update Bills'>

            <input type='hidden' name='id' value='$row->id'>
            <input type='hidden' name='dba' value='set'>
";

            }

echo"
        </form>

        <div class='clear'></div>

    </div>
";