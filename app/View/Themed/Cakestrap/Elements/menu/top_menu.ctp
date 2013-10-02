<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">School Education</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><?php echo $this->Html->link('Home', array('controller' => 'Home', 'action' => 'index')); ?></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Parents <b class="caret"></b></a>
          <ul class="dropdown-menu">
              <li><a href="#"><?php echo $this->Html->link('Request tutor', array('controller' => 'Home', 'action' => 'request')); ?></li>
              <li><?php echo $this->Html->link('Rates', array('controller' => 'Home', 'action' => 'rates')); ?></li>
              <li><?php echo $this->Html->link('Testimonial', array('controller' => 'Home', 'action' => 'testimonial')); ?></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tutors <b class="caret"></b></a>
          <ul class="dropdown-menu">
              <li><?php echo $this->Html->link('Tutors login', array('controller' => 'Home', 'action' => 'tutor_login')); ?></li>
              <li><?php echo $this->Html->link('Information for new tutors', array('controller' => 'Home', 'action' => 'information')); ?></li>
              <li><?php echo $this->Html->link('Why Sign up', array('controller' => 'Home', 'action' => 'signup')); ?></li>
          </ul>
        </li>
        <li><?php echo $this->Html->link('Contact Us', array('controller' => 'Home', 'action' => 'contact')); ?></li>
        <li><?php echo $this->Html->link('Help/FAQ', array('controller' => 'Home', 'action' => 'faq')); ?></li>
        <li><?php echo $this->Html->link('About Us', array('controller' => 'Home', 'action' => 'about')); ?></li>
        <li><?php echo $this->Html->link('Tuition Rates', array('controller' => 'Home', 'action' => 'tuition_rate')); ?></li>
      </ul>
    </div><!--/.navbar-collapse -->
  </div>
</div>