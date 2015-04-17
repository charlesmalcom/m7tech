<?php
    $course=$_GET['course'];
?>

<div id='body' class='width'>

    <form action='course/signup' method='POST'>
        <fieldset>
            <legend>COURSE</legend>
            <label>Course</label><input type='text' value='<?php echo $course; ?>'><br />
        </fieldset>

        <fieldset>
            <legend>PERSONAL INFO</legend>
                <label>First Name</label><input type='text'><br />
                <label>Middle Name</label><input type='text'><br />
                <label>Last Name</label><input type='text'><br />
        </fieldset>

        <fieldset>
            <legend>CONTACT INFO</legend>
                <label>Phone</label><input type='text'><br />
                <label>eMail</label><input type='text'><br />
        </fieldset>

        <fieldset>
            <input type='reset' value='Clear'>
            <input type='submit' value='Sign Up'>
        </fieldset>
    </form>

    <form>
        <fieldset>
            <label>&nbsp;</label><input type='submit' value='Sign in to add course'><br />
        </fieldset>
    </form>



    <div class='clear'></div>
</div>