<?php
echo $this->Html->css('home', null, array('inline' => false));
?>
<!-- Contents here -->
<div id="home">
    <?php echo $this->Html->link('Request tutor', array('controller' => 'Home', 'action' => 'request')); ?>
</div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>