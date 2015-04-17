<?php

    echo"<div id='container'>";

        foreach($projectsData as $row){

            echo"
                <fieldset>
                    <legend>Project Information</legend>
                    <label>Name</label><label>$row->business_name</label>
                    <label>Start</label><label>$row->start_date</label>
                        <br />

                    <label>Type</label><label>$row->project_type</label>
                    <label>Stop</label><label>$row->stop_date</label>
                        <br />

                    <label>Rate</label><label>$row->rate</label><br />
                    <label>Notes</label><textarea cols='60' rows='8'>$row->notes</textarea>
                </fieldset>
            ";

        }

echo"
    </div>
    <div class='clear'></div>
";