<div id="container">

    <table>
        <thead>
        <tr>
            <td colspan='7'>
                <a href="<?php echo $this->config->item('baseURL'); ?>bookmarks/create" class="button">New Bookmark</a>
                <a href="<?php echo $this->config->item('baseURL'); ?>bookmarks/search" class="button">Search</a>
            </td>
        </tr>
        <tr>
        <tr>
            <td>Link</td>
            <td>Link Text</td>
            <td>Category</td>
            <td>Sub-Category</td>
            <td>Description</td>
            <td colspan="3" align="center">ACTIONS</td>
        </tr>
        </thead>

        <?php foreach($bookmarksData as $row){ ?>

            <?php
                $link = $this->model_options->maxLength($row->link, "25");
                $description = $this->model_options->maxLength($row->description, "25");
            ?>

            <tr>
                <td><?php echo "<a href='$link[1]' title='$link[1]'>$link[0]</a>"; ?></td>
                <td><?php echo $row->link_text; ?></td>
                <td><?php echo $row->category; ?></td>
                <td><?php echo $row->sub_category; ?></td>
                <td><?php echo $description[0]; ?></td>

                <td><a href="<?php echo $this->config->item('baseURL'); ?>bookmarks/update/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/edit.gif"></a></td>
                <td><a href="<?php echo $this->config->item('baseURL'); ?>bookmarks/delete/<?php echo $row->id; ?>"><img src="<?php echo $this->config->item('public'); ?>images/actions/delete.gif"></a></td>
                <td><a><img src="<?php echo $this->config->item('public'); ?>images/actions/info.png"></a></td>
            </tr>

        <?php } ?>

    </table>

</div>

<div class="clear"></div>