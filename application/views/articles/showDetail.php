<div id="container">

    <table>
        <thead>
            <tr>
                <td>Title</td>
                <td>Posted Date</td>
                <td>Posted By</td>
                <td>Article</td>
                <td>Show</td>
            </tr>
        </thead>

        <?php foreach($articlesData as $row){ ?>

            <tr>
                <td><?php echo $row->articleTitle; ?></td>
                <td><?php echo $row->postedDate; ?></td>
                <td><?php echo $row->postedBy; ?></td>
                <td><?php echo $row->article; ?></td>
                <td><?php echo $row->show; ?></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>