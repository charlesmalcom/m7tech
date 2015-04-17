<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>email/create' method='POST'>

        <fieldset>
            <legend>Create Email</legend>
                <label>From</label><input type='text' name='from'><br />
                <label>To</label><input type='text' name='to'><br />

                <label>Subject</label><input type='text' name='subject'><br />
                <label>Body</label><textarea name="body" rows="8" cols="65"></textarea><br />

        </fieldset>

        <input type='hidden' name='dba' value='set'>

        <label>&nbsp;</label><input type='submit' value='Send Email'>
    </form>

    <div class="clear"></div>

</div>
