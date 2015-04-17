<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>classmaterial/create' method='POST'>

        <fieldset>
            <legend>Create Classmaterial</legend>
                <label for="courseID">Course ID</label><?php echo form_dropdown('courseID', $optClassId); ?><br/>

                <label for="item">Item</label><?php echo form_dropdown('item', $classItems); ?><br/>
                <label for="number">Number</label><input type="text" name="number" id="number"><br />
                <label for="blurb">Blurb</label><textarea name="blurb" id="blurb"></textarea><br />

                <label for="available">Available</label><?php echo form_dropdown('available', $optYN); ?><br/>

        </fieldset>

        <input type='hidden' name='dba' value='set'>

        <label>&nbsp;</label><input type='submit' value='Create Class Material'>
    </form>

    <div class="clear"></div>

</div>
