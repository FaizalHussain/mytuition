<?php
echo $this->Html->css('home', null, array('inline' => false));
?>
    <!-- Contents here -->
    <div id="home" style="text-align: justify">

        <div class="page-header">
            <h2>Rates</h2>
        </div>

        <?php echo $this->element('alert'); ?>



    </div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>