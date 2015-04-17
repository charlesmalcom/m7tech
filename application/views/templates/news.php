<li>
    <h4>News</h4>
        <ul class="newslist">

            <?php foreach($newsData as $row){ ?>

            <li>
                <p><span class="newslist-date"><?php echo $row->date; ?></span>
                    <?php echo $row->article; ?></p>
            </li>

        <?php } ?>
    </ul>
</li>