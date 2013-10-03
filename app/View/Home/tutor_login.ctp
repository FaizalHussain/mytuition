<?php
echo $this->Html->css('home', null, array('inline' => false));
?>
    <!-- Contents here -->
    <div id="home">

        <div class="page-header">
            <h2>Tutor Login </h2>
        </div>

        <?php
            echo $this->Form->create('Tutor', array(
                'url' => array(
                'controller' => 'Tutor',
                'action' => 'login'),
                'inputDefaults' => array('label' => false, 'div' => false, 'class' => 'default')
            ));
        ?>

        <?php echo $this->Session->flash('auth'); ?>

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Login Details</div>
            <div class="panel-body">
                <label>Email</label>
                <div class="value"><?php echo $this->Form->input('email', array('type' => 'text', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
                <br/>
                <label>Password</label>
                <div class="value"><?php echo $this->Form->input('password', array('type' => 'password', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
                <br/>
                <div style="float:left;"><?php echo $this->Form->submit('Login Account', array('class' => 'button', 'style' => 'height:30px;')); ?></div>
                <div style="float:left; padding-left: 10px;"><?php echo $this->Html->link(__('Sign Up'), array('action' => 'signup'), array('class' => 'button', 'style' => 'height:30px;')); ?></div>
                <div style="clear: both;"></div>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>