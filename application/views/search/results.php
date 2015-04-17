<?php
    echo "
        <div id='container'>

            <label>You searched for </label>".$_POST['find']."<br />

            <label>You looked in category </label>".$_POST['category']."<br />

            <hr />
            <label>Your search yielded:</label><hr />

        </div>

        <div class='clear'></div>
    ";