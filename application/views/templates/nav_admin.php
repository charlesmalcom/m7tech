<header>
    <div class="width">

        <nav>

            <ul class="sf-menu dropdown">

                <li class="selected"><a href="<?php echo $this->config->item('baseURL'); ?>admin">Home</a></li>

                <li><a href="#">Projects</a>
                    <ul>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>projects">Projects</a></li>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>clients">Clients</a></li>                        
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>rates">Rates</a></li>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>contracts">Contracts [ X ]</a></li>
                    </ul>
                </li>

                <li><a href="#">Business</a>
                    <ul>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>advertising">Advertising [ X ]</a></li>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>consults">Consults [ X ]</a></li>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>leads">Leads</a></li>                        
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>forms">Forms [ X ]</a></li>
                    </ul>
                </li>

                <li><a href="#">Front Page</a>
                    <ul>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>news">News</a></li>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>calendar">Calendar</a></li>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>articles">Articles</a></li>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>services">Services</a></li>
                    </ul>
                </li>

                <li><a href="#">Financial</a>
                    <ul>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>bills">Bills [ X ]</a></li>                        
                    </ul>
                </li>
                
                <li><a href="#"><img src="<?php echo $this->config->item('public'); ?>images/actions/email.png" alt="Messaging"></a>
                    <ul>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>email">eMail</a></li>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>googlevoice">Google Voice [ X ]</a></li>
                    </ul>
                </li>

                <li><a href="#"><img src="<?php echo $this->config->item('public'); ?>images/actions/settings.gif" alt="Settings"></a>
                    <ul>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>appsecurity">App Security</a></li>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>apptimeout">App Timeout [ X ]</a></li>
                        <li><hr /></li>

                        <li><a href="<?php echo $this->config->item('baseURL'); ?>accounts">Accounts [ X ]</a></li>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>groups">Groups [ X ]</a></li>
                        <li><hr /></li>
                        
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>bookmarkcategorys">Bookmark Categorys [ X ]</a></li>
                        <li><hr /></li>
                        
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>bookmarks">Bookmarks</a></li>                        
                    </ul>
                </li>

                <li><a href="<?php echo $this->config->item('baseURL'); ?>search" alt="Search">
                        <img src="<?php echo $this->config->item('public'); ?>images/actions/search.png">
                    </a></li>

                <li><a href="<?php echo $this->config->item('baseURL'); ?>login/logout">
                        <img src="<?php echo $this->config->item('public'); ?>images/actions/exit.png" alt="Logout">
                    </a></li>

            </ul>

            <div class="clear"></div>

        </nav>

    </div>

    <div class="clear"></div>

</header>