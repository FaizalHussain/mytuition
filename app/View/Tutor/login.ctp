<?php
echo $this->Html->css('home', null, array('inline' => false));
?>
    <!-- Contents here -->
    <div id="home">
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
                                <div class="panel-heading">Teaching Level & Subjects</div>
                                <div class="panel-body">
                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody>
                                        <tr>
                                            <td width="35%">JC2</td>
                                            <td width="65%"><a href="#" id="username" data-type="text" data-pk="1" data-original-title="Enter username">superuser</a></td>
                                        </tr>
                                        <tr>
                                            <td>Secondary Level</td>
                                            <td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-original-title="Enter your firstname"></a></td>
                                        </tr>
                                        <tr>
                                            <td>Primary Level</td>
                                            <td><a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-original-title="Select sex"></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">Location Preferrence</div>
                                <div class="panel-body">
                                    <table id="user" class="table table-bordered table-striped" style="clear: both">
                                        <tbody>
                                        <tr>
                                            <td width="35%">East</td>
                                            <td width="65%"><a href="#" id="username" data-type="text" data-pk="1" data-original-title="Enter username">superuser</a></td>
                                        </tr>
                                        <tr>
                                            <td>West</td>
                                            <td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-original-title="Enter your firstname"></a></td>
                                        </tr>
                                        <tr>
                                            <td>North</td>
                                            <td><a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-original-title="Select sex"></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">Qualifications/Experience</div>
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
                                <div class="panel-heading">Tutor Rates (Expected)</div>
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