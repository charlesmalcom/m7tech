<div id="container">

    <form action='<?php echo $this->config->item('baseURL'); ?>classes/create' method='POST'>

        <fieldset>
            <legend>Create Class</legend>
                <label>Course ID</label><input type='text' name='courseId'><br />
                <label>Course Name</label><input type='text' name='name'><br />
                <label>Start Date</label><input type='date' name='startDate'><br />
                <label>Stop Date</label><input type='date' name='stopDate'><br />
                <label>Weeks</label><input type='text' name='weeks'><br />
                <label>Days</label><input type='text' name='days'><br />
                <label>Time</label><input type='text' name='time'><br />
                <label>Location</label><input type='text' name='location'><br />
                <label>Duration</label><input type='text' name='duration'><br />
                <label>Price</label><input type='text' name='price'><br />
                <label>Seats</label><input type='text' name='seats'><br />
                <label>Available</label><input type='text' name='available'><br />

        </fieldset>

        <input type='hidden' name='dba' value='set'>

        <label>&nbsp;</label><input type='submit' value='Create Classes'>
    </form>

    <div class="clear"></div>

</div>
