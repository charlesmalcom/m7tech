<div id="container">

    <fieldset>
        <legend>Compose</legend>
            <a href="<?php echo $this->config->item('baseURL'); ?>email/single" class="button">Single Email [ X ]</a>
            <a href="<?php echo $this->config->item('baseURL'); ?>email/group" class="button">Group Email [ X ]</a>
            <a href="<?php echo $this->config->item('baseURL'); ?>email/any" class="button">Email Any [ X ]</a>

    </fieldset>


    <fieldset>
        <legend>Check</legend>
            <a href="<?php echo $this->config->item('baseURL'); ?>email/checkInternal" class="button">Check Email (int)</a>
            <a href="<?php echo $this->config->item('baseURL'); ?>email/checkExternal" class="button">Check Email (ext)</a>
            <a href="<?php echo $this->config->item('baseURL'); ?>email/unread" class="button">Unread Email</a>
            <a href="<?php echo $this->config->item('baseURL'); ?>email/show" class="button">Show Email</a>
    </fieldset>


    <fieldset>
        <legend>Search</legend>
            <a href="<?php echo $this->config->item('baseURL'); ?>email/search" class="button">Search Email [ X ]</a>
    </fieldset>

</div>

<div class="clear"></div>