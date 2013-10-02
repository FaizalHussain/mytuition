<?php
echo $this->Html->css('home', null, array('inline' => false));
?>
    <!-- Contents here -->
    <div id="home">

        <div class="page-header">
            <h2>Tutor Login </h2>
        </div>

        <?php
        echo $this->Form->create('TutorRequest', array(
            'url' => array('controller' => 'Home', 'action' => 'request'),
            'inputDefaults' => array('label' => false, 'div' => false, 'class' => 'default')
        ));
        ?>

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Login Details</div>
            <div class="panel-body">
                <label>Email</label>
                <div class="value"><?php echo $this->Form->input('name', array('type' => 'text', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
                <br/>
                <label>Password</label>
                <div class="value"><?php echo $this->Form->input('contact', array('type' => 'number', 'style'=>'width: 400px;', 'class'=>'form-control')); ?></div>
                <br/>
                <input type="submit" name="Login" value="<?php echo 'Login Account'; ?>" class="button" style="height:30px;" />
                <input type="reset" name="Reset Fields" value="<?php echo 'Reset Fields'; ?>" class="button" style="height:30px;" />
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>