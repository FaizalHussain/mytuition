<?php
echo $this->Html->css('home', null, array('inline' => false));
echo $this->Html->script('tutor', false);
echo $this->Html->script('http://maps.google.com/maps/api/js?sensor=true', false);
?>

    <!-- Contents here -->
    <div id="home">
        <div class="page-header">
            <h2>Assignment Available</h2>
        </div>

        <?php echo $this->element('alert'); ?>

        <?php
        echo $this->Form->create('Tutor', array(
            'url' => array(
                'controller' => 'Tutor',
                'action' => 'login'),
            'inputDefaults' => array('label' => false, 'div' => false, 'class' => 'default')
        ));
        ?>

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <?php echo $this->element('topmenu'); ?>
            <div class="container">
                <?php
                    $mapCounter = 11;
                ?>
                <?php foreach($data as $key=>$value){ ?>
                <?php
                    $requestObj = $value['Request'];
                    $studentObj = $value['StudentInfo'];
                    $tuitionObj = $value['TuitionDetail'];
                    $mapCounter = $mapCounter+1;
                    $map_options = array( 'id' => 'map_canvas'.$mapCounter, 'width' => '200px', 'height' => '200px', 'style' => '', 'zoom' => 15, 'type' => 'ROADMAP', 'custom' => null, 'localize' => false, 'address' => 'Singapore '.$studentObj['postal_code'], 'marker' => true, 'markerTitle' => 'This is my position', 'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png', 'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png', 'infoWindow' => true, 'windowText' => 'My Position' );
                ?>
                <div class='row'>
                    <div class="well well-lg" style="padding-top: 0px; padding-bottom: 10px; background-color: rgb(240, 247, 253); text-align: justify">
                        <div class="row">
                                <div class="col-sm-5">
                                    <h4 style="line-height: 1.8em;"><small><span style="color: #1b1b1b;">
                                    <b>Assignment ID:  </b><?php echo $requestObj['id']; ?><br/>
                                    <b>Level:  </b><?php echo $studentObj['level']; ?><br/>
                                    <b>Subjects:  </b><?php echo $studentObj['options']; ?><br/>
                                    <b>Lesson per week:  </b><?php echo $tuitionObj['lesson_per_week']; ?><br/>
                                    <b>Length of session:  </b><?php echo $tuitionObj['session_length']; ?><br/>
                                    <b>Preferred Timeslots:  </b><?php echo $tuitionObj['available_timeslot']; ?><br/>
                                    <b>Preferred Rate:  </b>$<?php echo $tuitionObj['budget']; ?> per hour<br/>
                                    <b>Tutor Preferrence:  </b><?php echo $tuitionObj['tutor_preferrence']; ?><br/>
                                    </span></small></h4>
                                </div>
                                <div class="col-sm-4">
                                    <h4 style="line-height: 1.8em;"><small><span style="color: #1b1b1b;">
                                    <b>Block:  </b><?php echo $studentObj['block']; ?><br/>
                                    <b>Street:  </b><?php echo $studentObj['street']; ?><br/>
                                    <b>Unit-No:  </b><?php echo $studentObj['unit_no']; ?><br/>
                                    <b>Postal Code:  </b><?php echo $studentObj['postal_code']; ?><br/>
                                    <b>Additional Address:  </b><?php echo $studentObj['address']; ?><br/>
                                    </span></small></h4><br/>
                                    <div style="margin-top:-15px; padding-bottom: 5px;">
                                        <input type="button" id="ApplyButton<?php echo $requestObj['id']; ?>" onclick="js:applyAssignment(<?php echo $requestObj['id']; ?>);" name="ApplyAssignment" value="<?php echo 'Apply for Assignment'; ?>" class="button" style="height:30px;" />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <a href="#" class="thumbnail" style="width:210px; margin-top:10px;">
                                    <?php
                                        echo $this->GoogleMap->map($map_options);
                                    ?>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <br>
        </div>
    </div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>