<?php
echo $this->Html->css('home', null, array('inline' => false));
echo $this->Html->script('tutor', false);
?>

    <!-- Contents here -->
    <div id="home">
        <div class="page-header">
            <h2>Tutor Profile </h2>
        </div>

        <?php echo $this->element('alert'); ?>

        <p><h3><small><b>Do take note that you should be ensuring your tutor profile is as complete as possible. There will be more assignment opportunities if you provide a comprehensive tutor profile. All further liaisons will be made through this tutor’s portal, email or via phone should there be any assignment opportunities available for you.</b></small></h3></p>


        <div class="panel panel-default">
            <!-- Default panel contents -->
            <?php echo $this->element('topmenu'); ?>
            <div class="container">
                <div class='row'>
                    <div class='col-sm-3'>
                        <div class='form-group'>
                            <div class="thumbnail">
                                    <a href="#" class="thumbnail">
                                        <?php echo $this->Html->image('Tutor/default-sm.jpg?'.rand(1,100)); ?>
                                    </a>
                                <div class="caption">
                                    <h4>Tutor ID: <?php echo $tutor['id']; ?></h4>
                                    <h4>Gender: <?php echo $tutor['gender']; ?></h4>
                                    <h4>Age: <?php echo $tutor['age']; ?></h4>
                                    <h4>Highest Qualification: <br/><?php echo $tutor['highest_qualification']; ?></h4>
                                    <h4>NRIC: <br/><?php echo $tutor['nric']; ?></h4>
                                    <h4>Contact No: <br/><?php echo $tutor['contact']; ?></h4>
                                    <h4>Address: <br/><?php echo $tutor['address']; ?></h4>
                                    <h4>Do you own a vehicle: <br/><?php echo $tutor['own_vehicle']; ?></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class='col-sm-9'>
                        <div class='form-group'>
                            <div class="panel panel-default">
                                <div class="panel-heading"><a id="Teaching-anchor" style="color: #a9302a">Teaching Level & Subjects</a> <a href="#Teaching-anchor" onclick="js:switchTeach()" id="teach_edit" style="float:right">Edit</a> </div>
                                <div class="panel-body">
                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody>
                                        <tr>
                                            <td width="35%">JC2 </td>
                                            <td width="65%"><a href="#" id="teach_jc2" data-type="textarea" data-pk="1" data-url="<?php echo $this->Session->read('Page.url');?>" data-title="Enter JC2"><?php echo $tutor['teach_jc2']; ?></a></td>
                                        </tr>
                                        <tr>
                                            <td>Secondary Level</td>
                                            <td><a href="#" id="teach_secondary" data-type="textarea" data-pk="1" data-url="<?php echo $this->Session->read('Page.url');?>" data-title="Enter Secondary"><?php echo $tutor['teach_secondary']; ?></a></td>
                                        </tr>
                                        <tr>
                                            <td>Primary Level</td>
                                            <td><a href="#" id="teach_primary" data-type="textarea" data-pk="1" data-url="<?php echo $this->Session->read('Page.url');?>" data-title="Enter Primary"><?php echo $tutor['teach_primary']; ?></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><a id="Location-anchor" style="color: #a9302a">Location Preferrence</a> <a href="#Location-anchor" onclick="js:switchLocation()" id="location_edit" style="float:right">Edit</a></div>
                                <div class="panel-body">
                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody>
                                        <tr>
                                            <td width="35%">East</td>
                                            <td width="65%"><a href="#" id="location_east" data-type="textarea" data-pk="1" data-url="<?php echo $this->Session->read('Page.url');?>" data-title="Enter East"><?php echo $tutor['location_east']; ?></a></td>
                                        </tr>
                                        <tr>
                                            <td>West</td>
                                            <td><a href="#" id="location_west" data-type="textarea" data-pk="1" data-url="<?php echo $this->Session->read('Page.url');?>" data-title="Enter West"><?php echo $tutor['location_west']; ?></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><a id="qualification-anchor" style="color: #a9302a">Qualifications/Experience</a> <a href="#qualification-anchor" onclick="js:switchQualification()" id="qualification_edit" style="float:right">Edit</a></div>
                                <div class="panel-body">
                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody>
                                        <tr>
                                            <td width="35%">University</td>
                                            <td width="65%"><a href="#" id="qualification_university" data-type="textarea" data-pk="1" data-url="<?php echo $this->Session->read('Page.url');?>" data-title="Enter University"><?php echo $tutor['qualification_university']; ?></a></td>
                                        </tr>
                                        <tr>
                                            <td>Polytechnic</td>
                                            <td><a href="#" id="qualification_polytechnic" data-type="textarea" data-pk="1" data-url="<?php echo $this->Session->read('Page.url');?>" data-title="Enter Polytechnic"><?php echo $tutor['qualification_polytechnic']; ?></a></td>
                                        </tr>
                                        <tr>
                                            <td>Junior College</td>
                                            <td><a href="#" id="qualification_jc" data-type="textarea" data-pk="1" data-url="<?php echo $this->Session->read('Page.url');?>" data-title="Enter JC"><?php echo $tutor['qualification_jc']; ?></a></td>
                                        </tr>
                                        <tr>
                                            <td>Additional Remarks</td>
                                            <td><a href="#" id="qualification_remarks" data-type="textarea" data-pk="1" data-url="<?php echo $this->Session->read('Page.url');?>" data-title="Enter Additional Remarks"><?php echo $tutor['qualification_remarks']; ?></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><a id="tutor-anchor" style="color: #a9302a">Tutor Rates (Expected)</a> <a href="#tutor-anchor" onclick="js:switchTutor()" id="tutor_edit" style="float:right">Edit</a></div>
                                <div class="panel-body">
                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody>
                                        <tr>
                                            <td width="35%">JC</td>
                                            <td width="65%"><a href="#" id="tutor_jc" data-type="text" data-pk="1" data-url="<?php echo $this->Session->read('Page.url');?>" data-title="Enter JC Rate"><?php echo $tutor['tutor_jc']; ?></a></td>
                                        </tr>
                                        <tr>
                                            <td>West</td>
                                            <td><a href="#" id="tutor_polytechnic" data-type="text" data-pk="1" data-url="<?php echo $this->Session->read('Page.url');?>" data-title="Enter Polytechnic Rate"><?php echo $tutor['tutor_polytechnic']; ?></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>