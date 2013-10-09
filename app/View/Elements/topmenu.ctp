<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <?php echo $this->Html->link('Profile Summary', array('controller' => 'Tutor', 'action' => 'profile'), array('class' => 'navbar-brand', 'target' => '_self')); ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Your Assignments <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link('Pending Assignments', array('controller' => 'Tutor', 'action' => 'pending')); ?></li>
                    <li><?php echo $this->Html->link('Confirmed Assignments', array('controller' => 'Tutor', 'action' => 'confirmed')); ?></li>
                </ul>
            </li>
            <li><?php echo $this->Html->link('Assignments Available', array('controller' => 'Tutor', 'action' => 'assignment')); ?></li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
