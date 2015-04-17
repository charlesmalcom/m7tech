<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>courses/create' method='POST'>

        <fieldset>
            <legend>Create Course</legend>
                <label>Name</label><input type='text' name='name'><br />
                <label>Description</label><textarea name='description'></textarea><br />

                <label>Course ID</label><input type='text' name='courseId'><br />
                <label>Location</label><?php echo form_dropdown('location', $optLocations); ?><br/>
                <label>Start Date</label><input type='date' name='dateStart'><br />
                <label>Stop Date</label><input type='date' name='dateStop'><br />
                <label>Weeks</label><input type='text' name='weeks'><br />
                <label>Days</label><input type='text' name='days' placeholder="M, W, F"><br />
                <label>Time</label><input type='time' name='time'><br />
                <label>Duration</label><input type='text' name='duration' placeholder="hours, ex. 1.5"><br />
                <label>Price</label><input type='text' name='price' placeholder="000.00"><br />
                <label>Available</label><?php echo form_dropdown('available', $optionYN); ?><br/>
                <label>Class Size</label><input type='text' name='classSize'><br />

            <input type='hidden' name='dba' value='set'>
        </fieldset>

        <label>&nbsp;</label><input type='submit' value='Create Course'>

    </form>

    <div class="clear"></div>

</div>
