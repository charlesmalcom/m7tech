<?php

$baseURL = $this->config->item('baseURL');
$public = $this->config->item('public');

echo"
    <div id='container'>
    
        <table>
            <thead>
                <tr>
                    <td>Type</td>
                    <td>Payee</td>
                    <td>Account Number</td>
                    <td>Category</td>
                    <td>Date Due</td>
                    <td>Amount Due</td>
                    <td>Status</td>

                    <td>ACTIONS</td>
                </tr>
            </thead>
";

    $startingBalance = '';
    $depositBalance = '';
    $withdrawlBalance = '';

        foreach($billsData as $row){

                $count=0;

                if ($row->type == 'withdrawl'){
                    $withdrawlBalance  += $row->amount;;

                }
                else if ($row->type == 'deposit'){
                    $depositBalance  += $row->amount;;

                }
                else if ($row->type == 'Starting_Balance'){
                    $startingBalance  += $row->amount;;
                }
            $count++;

        echo"
            <tr>
                <td>$row->type</td>
                <td>$row->payee</td>
                <td>$row->accountNumber</td>
                <td>$row->category</td>
                <td>$row->dueDate</td>
                <td>$row->amount</td>
                <td>$row->status</td>

                <td><a href='http://127.0.0.1/creating/m7tech/bills/info/$row->id'><img src='http://127.0.0.1/creating/m7tech/public/images/actions/info.png'></a></td>
            </tr>
        ";

        }
        $total = $startingBalance - $withdrawlBalance + $depositBalance;

echo"
        <tr>
            <td colspan='5'>Ending Balance</td>
            <td class='unread'>$total</td>
            <td>&nbsp;</td

            <td>&nbsp;</td>
        </tr>

    </table>

    <hr />
    <label>Total Transactions: </label> $count <a class='unread'>|</a>
    <label>Starting Balance: </label> $startingBalance <a class='unread'>|</a>
    <label>Total Withdrawls: </label> $withdrawlBalance <a class='unread'>|</a>
    <label>Total Deposits: </label> $depositBalance<br />

</div>

<div class='clear'></div>
";