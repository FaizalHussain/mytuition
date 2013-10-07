<?php
echo $this->Html->css('home', null, array('inline' => false));
?>
    <!-- Contents here -->
    <div id="home" style="text-align: justify">

        <div class="page-header">
            <h2>Contact Us</h2>
        </div>

        <?php
        echo $this->Form->create('ContactForm', array(
            'url' => array('controller' => 'Home', 'action' => 'contact'),
            'inputDefaults' => array('label' => false, 'div' => false, 'class' => 'default')
        ));
        ?>

        <?php echo $this->element('alert'); ?>

        <p><h3><small><b>For further queries which are not listed below, you can send us an email and we shall get back to you as soon as possible.</b></small></h3></p>
        <div class='row'>

            <div class='col-sm-7' style="margin-top: 10px;">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Contact Us Form</div>
                    <div class="panel-body">
                        <label>Name</label>
                        <div class="value"><?php echo $this->Form->input('name', array('type' => 'text', 'style'=>'width: 400px;', 'class'=>'form-control', 'required' => true)); ?></div>
                        <br/>
                        <label>Email</label>
                        <div class="value"><?php echo $this->Form->input('email', array('type' => 'text', 'style'=>'width: 400px;', 'class'=>'form-control', 'required' => true)); ?></div>
                        <br/>
                        <label>Subject</label>
                        <div class="value"><?php echo $this->Form->input('subject', array('type' => 'text', 'style'=>'width: 400px;', 'class'=>'form-control', 'required' => true)); ?></div>
                        <br/>
                        <label>Message</label>
                        <div class="value"><?php echo $this->Form->input('message', array('type' => 'textarea', 'style'=>'width: 400px;', 'class'=>'form-control', 'required' => true)); ?></div>
                        <br>
                        <div class="controls view_controls">
                            <input type="submit" name="Submit" value="<?php echo 'Send a message'; ?>" class="button" style="height:30px;" />
                            <input type="reset" name="Reset Fields" value="<?php echo 'Reset Fields'; ?>" class="button" style="height:30px;" />
                        </div>
                    </div>

                </div>
            </div>
            <div class='col-sm-4'>
                <h4><span class="glyphicon glyphicon-star"></span> Tutor Enquiries</h4>
                <div style="padding-left: 20px;">
                    <h4><small>
                            <b><span class="glyphicon glyphicon-envelope"></span> Email:</b> <a href="mailto:request@straitstutors.com.sg">request@straitstutors.com.sg</a><br>
                            <b><span class="glyphicon glyphicon-phone-alt"></span> Phone:</b> 8444 0210<br>
                            <b><span class="glyphicon glyphicon-home"></span> Mailing Address:</b> PO Box 12345
                    </small></h4>
                </div>
                <br/>
                <h4><span class="glyphicon glyphicon-star"></span> Feedback and Other enquiries</h4>
                <div style="padding-left: 20px;">
                    <h4><small>
                            <b><span class="glyphicon glyphicon-envelope"></span> Email:</b> <a href="mailto:enquiry@straitstutors.com.sg">enquiry@straitstutors.com.sg</a><br>
                        </small></h4>
                </div>
                <br/>
                <h4><span class="glyphicon glyphicon-star"></span> Company Details</h4>
                <div style="padding-left: 20px;">
                    <h4><small>
                            <b><span class="glyphicon glyphicon-info-sign"></span> ACRA Registration No:</b> 1234567M<br>
                            <b><span class="glyphicon glyphicon-home"></span> Mailing Address:</b> PO Box 12345<br>
                        </small></h4>
                </div>

            </div>

        </div>


    </div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>