<?php
echo $this->Html->css('home', null, array('inline' => false));
?>
    <!-- Contents here -->
    <div id="home" style="text-align: justify">

        <div class="page-header">
            <h2>Why Sign up</h2>
        </div>

        <?php echo $this->element('alert'); ?>
        <div class='row'>
            <div class='col-sm-3'>
                <?php echo $this->Html->image('about/signup.jpg'); ?>
            </div>
            <div class='col-sm-9' style="margin-top: -20px;">
                <h3><small><b>
                            We believe in finding the most qualified professional and experienced tutors for our students, so if you think you fit the profile, join us as a Straits tutor today. Registration is free, so join the Straits family and we will be here to aid in finding the most compatible assignments for you.
                            <br/><br/>If you are just starting out as a tutor, do join us as well and indicate this in your tutor profile in the registration process. We will be here to guide you along the way in gaining the necessary valuable experience in being a professional and capable tutor.
                            <br/><br/>
                            <?php echo $this->Html->link(__('Sign up as a Tutor now'), array('action' => 'signup'), array('class' => 'btn btn-primary btn-sm', 'style'=>'font-weight:bold;')); ?>
                </b></small></h3>
            </div>
        </div>

    </div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>