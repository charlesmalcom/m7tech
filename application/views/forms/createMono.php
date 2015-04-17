<div id="container">

    <form action="<?php echo base_url();?>mono/create" method="post" enctype="multipart/form-data" accept-charset="utf-8">

        <fieldset>
            <legend>Enter Information</legend>
                <label>Rank</label><input type='text' name='rank'><br />
                <label>First Name</label><input type='text' name='firstName'><br />
                <label>Last Name</label><input type='text' name='lastName'><br />
                <label>Date Taken</label><input type='date' name='dateTaken'><br />
                <label>Location</label><input type='text' name='location'><br />
                <label>File Name</label><input type="file" name="userfile" size="25" /><br />
                <label>Notes</label><textarea name='notes'></textarea><br />
        </fieldset>

        <input type='hidden' name='dba' value='set'>
        <input type='hidden' name='datePosted' value="<?php echo date("Y-m-d"); ?>"><br />

        <label>&nbsp;</label><input type='submit' value='Upload Picture'>
    </form>
    <br />

    <?php echo $error; ?>

    <div class="clear"></div>

</div>
