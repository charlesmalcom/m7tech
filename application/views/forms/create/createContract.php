<?php
var_dump($currentClientData);
/*
 * <label>eMail Sent</label><?php echo form_dropdown('emailSent', $optionYN); ?><br/>
 * */
    echo"<div id='container'>";

    /* Step 1 - choose business, client, & contract type */
    function step1(){
        echo"
            <form action='' method='POST'>
                <label>Business Name</label>"; /* echo form_dropdown('business_info', $business_info); */ echo"<br/>
                <label>Client Name</label>".form_dropdown('client_info', $currentClientData)."<br/>

                <label>Contract Type</label>"; /* echo form_dropdown('contract_type', $contract_type); */ echo"<br/>

                <input type='hidden' name='step' value='2'>
                <label>&nbsp;</label><input type='submit' value='STEP 2'>
            </form>
            ";
    }


    /* Step 2 - verify all sections are good */
    function step2(){
        echo"
            <form action='' method='POST'>

                <fieldset>
                    <legend>Create Contract</legend>
                        <label>Label Here</label><input type='text' name=''><br />
                        <label>Label Here</label><input type='text' name=''><br />
                        <label>Label Here</label><input type='text' name=''><br />

                </fieldset>

                <input type='hidden' name='step' value='3'>

                <label>&nbsp;</label><input type='submit' value='Create Contract'><br />
                <label>&nbsp;</label><a href='#'>Back to STEP 1</a>
            </form>
        ";
    }


    /* Step 3 -  */
    function step3(){
        echo"
            <br />
            <span class='left'>Show Contract Here</span>
            <span class='right'>
                <a href='#'>[ PRINT ]</a>
                <a href='#'>[ SAVE ]</a>
                <a href='#'>[ EMAIL ]</a>
            </span>

            <br /><br />
            <hr />

        ";
    }




    // logic to steer code //
    if (isset($_POST['step'])){
        if ($_POST['step'] == '1'){ step1(); }
        else if ($_POST['step'] == '2'){ step2(); }
        else if ($_POST['step'] == '3'){ step3(); }
    }
    else { step1(); }


    echo"
        <div class='clear'></div>

    </div>
    ";