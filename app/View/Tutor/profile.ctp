<?php
echo $this->Html->css('home', null, array('inline' => false));
echo $this->Html->script('tutor', false);
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
                                    <h3>Tutor ID:</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Button</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class='col-sm-9'>
                        <div class='form-group'>
                            <div class="panel panel-default">
                                <div class="panel-heading"><a id="Teaching-anchor" style="color: #a9302a">Teaching Level & Subjects</a> <a href="#Teaching-anchor" onclick="js:switchTeach()" id="teach-edit" style="float:right">Edit</a> </div>
                                <div class="panel-body">
                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody>
                                        <tr>
                                            <td width="35%">JC2</td>
                                            <td width="65%"><a href="#" id="teach-jc2" data-type="textarea" data-pk="1" data-url="/post" data-title="Enter JC2">GP, EL, H1 Maths</a></td>
                                        </tr>
                                        <tr>
                                            <td>Secondary Level</td>
                                            <td><a href="#" id="teach-secondary" data-type="textarea" data-pk="1" data-url="/post" data-title="Enter Secondary">Literature, History, A-Maths</a></td>
                                        </tr>
                                        <tr>
                                            <td>Primary Level</td>
                                            <td><a href="#" id="teach-primary" data-type="textarea" data-pk="1" data-url="/post" data-title="Enter Primary">Maths, Science, Mandarin</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"><a id="Location-anchor" style="color: #a9302a">Location Preferrence</a> <a href="#Location-anchor" onclick="js:switchLocation()" id="teach-location" style="float:right">Edit</a></div>
                                <div class="panel-body">
                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody>
                                        <tr>
                                            <td width="35%">East</td>
                                            <td width="65%"><a href="#" id="location-east" data-type="textarea" data-pk="1" data-url="/post" data-title="Enter East">Simei, Tampines</a></td>
                                        </tr>
                                        <tr>
                                            <td>West</td>
                                            <td><a href="#" id="location-west" data-type="textarea" data-pk="1" data-url="/post" data-title="Enter West">Jurong</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">Qualifications/Experience <button id="enable" class="btn btn-default" style="float: right; margin-top: -7px;">Edit / Un-Edit</button></div>
                                <div class="panel-body">
                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody>
                                        <tr>
                                            <td width="35%">University</td>
                                            <td width="65%"><a href="#" id="username" data-type="text" data-pk="1" data-original-title="Enter username">superuser</a></td>
                                        </tr>
                                        <tr>
                                            <td>Polytechnic</td>
                                            <td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-original-title="Enter your firstname"></a></td>
                                        </tr>
                                        <tr>
                                            <td>Additional Remark</td>
                                            <td><a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-original-title="Select sex"></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">Tutor Rates (Expected) <button id="enable" class="btn btn-default" style="float: right; margin-top: -7px;">Edit / Un-Edit</button></div>
                                <div class="panel-body">
                                    Panel content
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