<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>rates/create' method='POST'>

        <fieldset>
            <legend>Create Rates</legend>
                <label>Job Type</label><input type='text' name='jobType'><br />
                <label>Rate</label><input type='text' name='rate'><br />
        </fieldset>

        <input type='hidden' name='dba' value='set'>

        <label>&nbsp;</label><input type='submit' value='Create Rates'>
    </form>

    <div class="clear"></div>

</div>
