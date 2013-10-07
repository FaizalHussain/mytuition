<?php
echo $this->Html->css('home', null, array('inline' => false));
?>
    <!-- Contents here -->
    <div id="home" style="text-align: justify">

        <div class="page-header">
            <h2>About Us</h2>
        </div>

        <?php echo $this->element('alert'); ?>
        <div class='row'>
            <div class='col-sm-3'>
                <?php echo $this->Html->image('about/profile.jpg'); ?>
            </div>
            <div class='col-sm-9' style="margin-top: -20px;">
                <h3><small><b>There are many options for parents in home tuition matching services locally, where the education system is competitive and there are high expectations for students to excel in their academics. <br/><br/>What then makes us stand out from the rest, for us to be your number 1 choice in sourcing out the best tutor available as per your requirements?
                </b></small></h3>
            </div>
        </div>
        <div class='row'>
           <div class='col-sm-12'>
               <h3><small><b>
               Straits Tutors does not work as a simple matching service for students and tutors. We work on the fundamental principle of employing stringent and rigorous processes in interviewing our tutors in person as well as verifying their respective qualifications and teaching experience, because we strongly believe that all parents should get a quality, transparent and trustworthy service for an investment in their child’s education.
               </b></small></h3>
            </div>
        </div>

        <div class='row'>
            <div class='col-sm-12'>
                <h3><small><b>
                As a company, we believe in building a strong reputation where every customer of ours has every requirement and requested fulfilled to complete satisfaction. Rest assured that we will work to the best of our means in ensuring you get a fully satisfactory tuition experience with a capable and professional tutor, regardless of your budget, requirements or requests.
                </b></small></h3>
            </div>
        </div>


    </div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>