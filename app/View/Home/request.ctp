<?php
echo $this->Html->css('home', null, array('inline' => false));
?>
<!-- Contents here -->
<div id="home">

    <div class="page-header">
        <h2>Request for tutor </h2>
    </div>

    <?php
        echo $this->Form->create('Request', array(
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
            <div class="value"><?php echo $this->Form->input('contact_preferrence', array('type' => 'select', 'options' => array('Email'=>'Email','Contact Number'=>'Contact Number'), 'style'=>'width: 400px; text-align:left;', 'class'=>'btn btn-default btn-sm dropdown-toggle')); ?></div>
        </div>
    </div>

    <p><h3><small><b>To allow us to cater to your tutor search more effectively, you may fill out the following additional details.</b></small></h3></p>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Additional Details</div>
        <div class="panel-body" style="margin-top: -20px;">
            <h2><small><span class="glyphicon glyphicon-user"></span> Student Information</small></h2>
            <label>Level</label>
            <div class="value"><?php echo $this->Form->input('level', array('type' => 'select', 'options' => array('JC / Polytechinic'=>'JC / Polytechinic','IP (Yr 5 - 6)'=>'IP (Yr 5 - 6)','IP (Yr 1 - 4)'=>'IP (Yr 1 - 4)','Upper Secondary'=>'Upper Secondary','Lower Secondary'=>'Lower Secondary','Upper Primary'=>'Upper Primary','Lower Primary'=>'Lower Primary','Kindergarden'=>'Kindergarden'), 'style'=>'width: 400px; text-align:left;', 'class'=>'btn btn-default btn-sm dropdown-toggle')); ?></div>
            <br/>
            <label>Subjects</label>
            <div class="control-group span10">
                <label class="checkbox span2">
                    <?php
                        echo $this->Form->input('options', array('type' => 'select', 'multiple' => 'checkbox','style' => 'float: left; display: inline','options' => array(
                            'Accounting' => 'Accounting',
                            'Biology' => 'Biology',
                            'Chemistry' => 'Chemistry',
                            'China Studies(Chi)' => 'China Studies(Chi)',
                            'China Studies(Eng)' => 'China Studies(Eng)',
                            'Chinese A' => 'Chinese A',
                            'Chinese AO' => 'Chinese AO',
                            'Computing' => 'Computing',
                            'Economics' => 'Economics',
                            'General Paper' => 'General Paper',
                            'Geography' => 'Geography',
                            'History' => 'History',
                            'KI' => 'KI',
                            'Literature' => 'Literature',
                            'Malay' => 'Malay',
                            'Maths' => 'Maths',
                            'Physics' => 'Physics',
                            'Project Work' => 'Project Work',
                            'Tamil' => 'Tamil'
                        )
                        ));
                    ?>
                </label>
            </div>
            <h2><small><span class="glyphicon glyphicon-user"></span> Student Address</small></h2>
            <div class="control-group span10">
                <div class='row'>
                    <div class='col-sm-6'>
                        <label>Block</label>
                        <div class="value"><?php echo $this->Form->input('block', array('type' => 'text', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
                        <br/>
                        <label>Street</label>
                        <div class="value"><?php echo $this->Form->input('street', array('type' => 'number', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
                        <br/>
                        <label>Additional Address Information</label>
                        <div class="value"><?php echo $this->Form->input('address', array('type' => 'textarea', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
                    </div>
                    <div class='col-sm-6'>
                        <label>Unit-No</label>
                        <div class="value"><?php echo $this->Form->input('unit_no', array('type' => 'text', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
                        <br/>
                        <label>Postal Code</label>
                        <div class="value"><?php echo $this->Form->input('postal_code', array('type' => 'number', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
                        <br/>
                    </div>
                </div>
            </div>
            <h2><small><span class="glyphicon glyphicon-home"></span> Tuition Detail</small></h2>
            <div class="control-group span10">
                <div class='row'>
                    <div class='col-sm-6'>
                        <label>No of lessons per week</label>
                        <div class="value"><?php echo $this->Form->input('lesson_per_week', array('type' => 'select', 'options' => array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7'), 'style'=>'width: 400px; text-align:left;', 'class'=>'btn btn-default btn-sm dropdown-toggle')); ?></div>
                        <br/>
                        <label>Length of each tuition session</label>
                        <div class="value"><?php echo $this->Form->input('session_length', array('type' => 'select', 'options' => array('45 min'=>'45 min','1 hr'=>'1 hr', '1.5 hrs'=>'1.5 hrs', '2 hrs'=>'2 hrs', '2.5 hrs'=>'2.5 hrs', '3 hrs'=>'3 hrs', '3.5 hrs'=>'3.5 hrs', '4 hrs'=>'4 hrs', '4.5 hrs'=>'4.5 hrs', '5 hrs'=>'5 hrs'), 'style'=>'width: 400px; text-align:left;', 'class'=>'btn btn-default btn-sm dropdown-toggle')); ?></div>
                        <br/>
                        <label>Budget</label>
                        <div class="value">
                            <?php echo $this->Form->input('budget', array('type' => 'text', 'style'=>'width: 400px;', 'class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <label>Available timeslot</label>
                        <div class="value">
                            <?php echo $this->Form->input('available_timeslot', array('type' => 'text', 'style'=>'width: 400px;', 'class'=>'form-control')); ?>
                        </div>
                        <br/>
                        <label>Start Date</label>
                        <div class="value">
                            <div class="control-group span10">

                                <div style="float:left;width: 100px;">
                                    <?php echo $this->Form->day('start_date', array('empty' => 'DAY', 'style'=>'width: 90px;', 'class'=>'form-control')); ?>
                                </div>
                                <div style="float:left;width: 15px;">
                                    <span style="font-family: Arial; font-size: 21px; font-weight: bold;">/</span>
                                </div>
                                <div style="float:left;width: 120px;">
                                    <?php echo $this->Form->month('start_date', array('empty' => 'MONTH', 'style'=>'width: 110px;', 'class'=>'form-control')); ?>
                                </div>
                                <div style="float:left;width: 15px;">
                                    <span style="font-family: Arial; font-size: 21px; font-weight: bold;">/</span>
                                </div>
                                <div style="float:left;width: 100px;">
                                    <?php echo $this->Form->year('start_date', date('Y'), date('Y') + 2, array('empty' => 'YEAR', 'style'=>'width: 100px;', 'class'=>'form-control')); ?>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </div>
                        <br/>
                        <label>Tutor Preferrences</label>
                        <div class="value"><?php echo $this->Form->input('tutor_preferrence', array('type' => 'select', 'options' => array('No preferrence'=>'No preferrence','Male'=>'Male', 'Female'=>'Female'), 'style'=>'width: 400px; text-align:left;', 'class'=>'btn btn-default btn-sm dropdown-toggle')); ?></div>
                    </div>
                </div>
            </div>

            <br/>
            <label>Other Request</label>
            <div class="value"><?php echo $this->Form->input('other_request', array('type' => 'textarea', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
            <br/>
        </div>
    </div>
    <div class="checkbox">
        <label>
            <div class="control-group span10">

                <div style="float:left;width: 10px;">
                    <?php echo $this->Form->input('agreement', array('type' => 'checkbox', 'class'=>'form-control')); ?>
                </div>
                <div style="float:left;width: 300px; padding-top: 9px; margin-left: -10px;">
                    Accept our <?php echo $this->Html->link(__('Legal Terms & Conditions'), array('action' => 'legal'), array('class' => 'btn_cancel btn_left','target' => '_blank')); ?>
                </div>
                <div style="clear: both"></div>
            </div>
        </label>
    </div>
    <div class="controls view_controls">
        <input type="submit" name="CreateRequest" value="<?php echo 'Submit Request'; ?>" class="button" style="height:30px;" />
        <?php echo $this->Html->link(__('Cancel'), array('action' => 'request'), array('class' => 'button')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>