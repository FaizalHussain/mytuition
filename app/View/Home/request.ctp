<?php
echo $this->Html->css('home', null, array('inline' => false));
?>
<!-- Contents here -->
<div id="home">

    <div class="page-header">
        <h2>Request for tutor </h2>
    </div>

    <?php
        echo $this->Form->create('TutorRequest', array(
            'url' => array('controller' => 'Home', 'action' => 'request'),
            'inputDefaults' => array('label' => false, 'div' => false, 'class' => 'default')
        ));
    ?>

    <?php echo $this->element('alert'); ?>

    <p><h3><small><b>Kindly fill out the following details to assist us in finding the right tutor for you.<br/>Alternatively, you may leave your contact details to allow us to contact you shortly.</b></small></h3></p>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Contact Details</div>
        <div class="panel-body">
            <label>Name</label>
            <div class="value"><?php echo $this->Form->input('name', array('type' => 'text', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
            <br/>
            <label>Contact Number</label>
            <div class="value"><?php echo $this->Form->input('contact', array('type' => 'number', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
            <br/>
            <label>Email</label>
            <div class="value"><?php echo $this->Form->input('email', array('type' => 'text', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
            <br/>
            <label>How would you like us to contact you?</label>
            <div class="value"><?php echo $this->Form->input('preferrence', array('type' => 'select', 'options' => array('Email','Contact Number'), 'style'=>'width: 400px; text-align:left;', 'class'=>'btn btn-default btn-sm dropdown-toggle')); ?></div>
        </div>
    </div>

    <p><h3><small><b>To allow us to cater to your tutor search more effectively, you may fill out the following additional details.</b></small></h3></p>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Additional Details</div>
        <div class="panel-body">
            <label>Additional Contact Details</label>
            <div class="value"><?php echo $this->Form->input('additional_info', array('type' => 'textarea', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
            <br/>
            <label>Student Information</label>
            <div class="value"><?php echo $this->Form->input('student_info', array('type' => 'textarea', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
            <br/>
            <label>Tuition Details</label>
            <div class="value"><?php echo $this->Form->input('tuition_detail', array('type' => 'textarea', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
            <br/>
            <label>Tutor Preferrences</label>
            <div class="value"><?php echo $this->Form->input('tutor_preferrence', array('type' => 'text', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
        </div>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox"> Accept our <?php echo $this->Html->link(__('Legal Terms & Conditions'), array('action' => 'legal'), array('class' => 'btn_cancel btn_left','target' => '_blank')); ?>
        </label>
    </div>
    <div class="controls view_controls">
        <?php echo $this->Html->link(__('Submit'), array('action' => 'request'), array('class' => 'button')); ?>
        <?php echo $this->Html->link(__('Cancel'), array('action' => 'request'), array('class' => 'button')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>