<header>
    <div class="width">

        <h1><a href="#">M7 TECH</a></h1>

        <nav>

            <ul class="sf-menu dropdown">
                <li class="selected"><a href="<?php echo $this->config->item('baseURL'); ?>">Home</a></li>

                <li><a href="#">Education</a>
                    <ul>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>homeStudent/myClasses">My Classes [ X ]</a></li>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>homeStudent/courseInfo">Course Info [ X ]</a></li>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>homeStudent/myGrades">My Grades [ X ]</a></li>
                    </ul>
                </li>

                <li><a href="#">Other Info</a>
                    <ul>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>homeStudent/personalInfo">Personal Info [ X ]</a></li>
                        <li><a href="<?php echo $this->config->item('baseURL'); ?>homeStudent/financialInfo">Financial Info [ X ]</a></li>
                    </ul>
                </li>


                <li><a href="<?php echo $this->config->item('baseURL'); ?>email">Email</a></li>

                <li><a href="<?php echo $this->config->item('baseURL'); ?>login/logout">Log Out</a></li>
            </ul>

            <div class="clear"></div>
        </nav>
    </div>

    <div class="clear"></div>

</header>