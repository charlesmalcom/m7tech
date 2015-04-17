<div id="container">

        <?php foreach($monoData as $row){
    $uploadsDir = $this->config->item('uploads');
            echo"
                <label>ID</label>$row->id<br />
                <label>Rate/Rank Name</label>$row->rank $row->firstName $row->lastName<br />
                <label>Date Taken</label>$row->dateTaken<br />
                <label>Date Posted</label>$row->datePosted<br />
                <label>Location</label>$row->location<br />
                <label>Notes</label><textarea>$row->notes</textarea><br />
                <label>File Name</label>$row->fileName<br />
                <label>Picture</label><img src='$uploadsDir$row->fileName'><br />

            ";


        } ?>

</div>

<div class="clear"></div>