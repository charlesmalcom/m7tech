<div id="container">

    <?php foreach($billsData as $row){ ?>

        <fieldset>
            <legend>Trtansaction Information</legend>
                <label>Transaciton Number</label><?php echo $row->id; ?><br />
                <label>Payee</label><?php echo $row->payee; ?><br />
                <label>Account Number</label><?php echo $row->accountNumber; ?><br />
                <label>Type</label><?php echo $row->type; ?><br />

        </fieldset>


        <fieldset>
            <legend>Work Information</legend>
                <label>Category</label> <?php echo $row->category; ?><br />
        </fieldset>


        <fieldset>
            <legend>Payment Information</legend>
                <label>Date Due</label><?php echo $row->dueDate; ?><br />
                <label>Paid Due</label><?php echo $row->paidDate; ?><br />
                <label>Amount Due</label><?php echo $row->amount; ?><br />
                <label>Status</label><?php echo $row->status; ?><br />
        </fieldset>

    <?php } ?>

</div>

<div class="clear"></div>