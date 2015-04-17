<div id="container">

    <h1>No Access</h1>
    <h3>You do not have the privilges needed to access the module</h3>
    <h3>Click <a href="<?php echo $this->config->item('baseURL'); ?>">here</a> to fo to the home page</h3>
    <p><?php echo "login cookie ".$this->input->cookie('login'); ?></p>

    <div class="clear"></div>
</div>