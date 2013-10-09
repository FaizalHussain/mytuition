<?php
echo $this->Html->css('home', null, array('inline' => false));
echo $this->Html->script('tutor', false);
?>

    <!-- Contents here -->
    <div id="home">
        <div class="page-header">
            <h2>Create Assignment </h2>
        </div>

        <?php echo $this->element('alert'); ?>
        <?php
        echo $this->Form->create('Coordinator', array(
            'url' => array(
                'controller' => 'Coordinator',
                'action' => 'create'),
            'inputDefaults' => array('label' => false, 'div' => false, 'class' => 'default')
        ));
        ?>

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <?php echo $this->element('topmenu'); ?>
            <div class="container">

            </div>
            <br>
        </div>
    </div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>