<div class="navbar navbar-inverse navbar-static-top" style="background-color: #000000; margin-bottom: -25px;">
    <div style="background-color: #ffffff; ">
        <div class="container">
            <div class='row'>
                <div class='col-sm-8'>
                    <?php echo $this->Html->image('logo.jpg'); ?>
                </div>
                <?php if(empty($authUser)){ ?>
                <div class='col-sm-4'>
                    <div class="form-group">
                        <div class="searchdiv">
                            <input type="text" class="form-control" placeholder="Search">
                            <div style="padding-top:10px;">
                                <div style="float: left">
                                    <?php echo $this->Html->image('icons/twitter.jpg'); ?>
                                </div>
                                <div style="float: left">
                                    <a href="https://www.facebook.com/pages/Straits-Tutors/616459565070820" target="_blank"><?php echo $this->Html->image('icons/facebook.jpg'); ?></a>
                                </div>
                                <div style="float: left">
                                    <?php echo $this->Html->image('icons/instagram.jpg'); ?>
                                </div>
                                <div style="float: left">
                                    <a href="mailto:support@straitstutors.com" id="mymailto"><?php echo $this->Html->image('icons/email.jpg'); ?></a>
                                </div>
                                <div style="float: left">
                                    <?php echo $this->Html->image('icons/rss.jpg'); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php if(empty($authUser)){ ?>
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--<a class="navbar-brand" href="#" style="color: #ffffff">Raffles Education</a>-->
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active" style="color: #ffffff"><?php echo $this->Html->link('Home', array('controller' => 'Home', 'action' => 'index')); ?></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffffff">Parents <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="#"><?php echo $this->Html->link('Request tutor', array('controller' => 'Home', 'action' => 'request')); ?></li>
                      <li><?php echo $this->Html->link('Rates', array('controller' => 'Home', 'action' => 'rates')); ?></li>
                      <li><?php echo $this->Html->link('Testimonial', array('controller' => 'Home', 'action' => 'testimonial')); ?></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #ffffff">Tutors <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><?php echo $this->Html->link('Tutors login', array('controller' => 'Tutor', 'action' => 'login')); ?></li>
                      <li><?php echo $this->Html->link('Information for new tutors', array('controller' => 'Home', 'action' => 'signup')); ?></li>
                      <li><?php echo $this->Html->link('Why Sign up', array('controller' => 'Home', 'action' => 'why_signup')); ?></li>
                  </ul>
                </li>
                <li><?php echo $this->Html->link('Contact Us', array('controller' => 'Home', 'action' => 'contact'), array('style' => 'color: #ffffff')); ?></li>
                <li><?php echo $this->Html->link('Help/FAQ', array('controller' => 'Home', 'action' => 'faq'), array('style' => 'color: #ffffff')); ?></li>
                <li><?php echo $this->Html->link('About Us', array('controller' => 'Home', 'action' => 'about'), array('style' => 'color: #ffffff')); ?></li>
                <li><?php echo $this->Html->link('Tuition Rates', array('controller' => 'Home', 'action' => 'tuition_rate'), array('style' => 'color: #ffffff')); ?></li>
              </ul>
            </div><!--/.navbar-collapse -->
        </div>
    <?php }else{ ?>
        <?php
            $role = $authUser['role'];
        ?>
        <?php if($role=='tutor'){ ?>
        <div class="container">
            <div class="navbar-header" style="margin-left: -15px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php echo $this->Html->link('Tutor Administration', array('controller' => 'Tutor', 'action' => 'profile'), array('class' => 'navbar-brand','style' => 'color: #ffffff')); ?>
            </div>
            <div class="navbar-collapse collapse">
                <div class="navbar-form navbar-right">
                    <a href="<?php echo $this->Session->read('Page.rootUrl'); ?>User/logout"><button class="btn btn-small"><span class="glyphicon glyphicon-off"></span> <b>Sign Out</b></button></a>
                </div>
            </div><!--/.navbar-collapse -->
        </div>
        <?php } ?>
        <?php if($role=='coordinator'){ ?>
            <div class="container">
                <div class="navbar-header" style="margin-left: -15px;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php echo $this->Html->link('Coordinator Administration', array('controller' => 'Tutor', 'action' => 'profile'), array('class' => 'navbar-brand','style' => 'color: #ffffff')); ?>
                </div>
                <div class="navbar-collapse collapse">
                    <div class="navbar-form navbar-right">
                        <a href="<?php echo $this->Session->read('Page.rootUrl'); ?>User/logout"><button class="btn btn-small"><span class="glyphicon glyphicon-off"></span> <b>Sign Out</b></button></a>
                    </div>
                </div><!--/.navbar-collapse -->
            </div>
        <?php } ?>
        <?php if($role=='admin'){ ?>
            <div class="container">
                <div class="navbar-header" style="margin-left: -15px;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php echo $this->Html->link('Tutor Administration', array('controller' => 'Tutor', 'action' => 'profile'), array('class' => 'navbar-brand','style' => 'color: #ffffff')); ?>
                </div>
                <div class="navbar-collapse collapse">
                    <div class="navbar-form navbar-right">
                        <a href="<?php echo $this->Session->read('Page.rootUrl'); ?>User/logout"><button class="btn btn-small"><span class="glyphicon glyphicon-off"></span> <b>Sign Out</b></button></a>
                    </div>
                </div><!--/.navbar-collapse -->
            </div>
        <?php } ?>
    <?php } ?>
</div>