<?php
echo $this->Html->css('home', null, array('inline' => false));
?>
    <!-- Contents here -->
    <div id="home">
        <div class="page-header">
            <h2>Information for new tutors</h2>
        </div>

        <?php
        echo $this->Form->create('Signup', array(
            'url' => array('controller' => 'Home', 'action' => 'signup'),
            'inputDefaults' => array('label' => false, 'div' => false, 'class' => 'label')
        ));
        ?>

        <?php echo $this->element('alert'); ?>

        <p><h3><small><b>Join us today by registering for a tutor’s account as per the required fields below.
                    You will then be taken to a tutor’s profile page whereby you should attempt to fill out the necessary information as thoroughly as possible.
         </b></small></h3></p>


        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Account Information</div>
            <div class="panel-body">
                <label>Name</label>
                <div class="value"><?php echo $this->Form->input('name', array('type' => 'text', 'required'=>true, 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
                <br/>
                <label>NRIC</label>
                <div class="value"><?php echo $this->Form->input('nric', array('type' => 'text', 'required'=>true, 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
                <br/>
                <label>Contact Number</label>
                <div class="value"><?php echo $this->Form->input('contact', array('type' => 'number', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
                <br/>
                <label>Email</label>
                <div class="value"><?php echo $this->Form->input('email', array('type' => 'text', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
                <br/>
                <label>Password</label>
                <div class="value"><?php echo $this->Form->input('password', array('type' => 'password', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
                <br/>
                <label>Re-Enter Password</label>
                <div class="value"><?php echo $this->Form->input('password2', array('type' => 'password', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
                <br/>
                <?php echo $this->Captcha->render(array('captchaType'=>'image',
                                                            'jquerylib'=>true,
                                                            'modelName'=>'Signup',
                                                            'fieldName'=>'captcha')
                                                 ); ?>

                <br/>
                    <input type="submit" name="CreateAccount" value="<?php echo 'Create Account'; ?>" class="button" style="height:30px;" />
                    <input type="reset" name="Reset Fields" value="<?php echo 'Reset Fields'; ?>" class="button" style="height:30px;" />
                </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>