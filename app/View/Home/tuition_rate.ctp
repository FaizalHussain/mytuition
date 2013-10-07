<?php
echo $this->Html->css('home', null, array('inline' => false));
?>
    <!-- Contents here -->
    <div id="home" style="text-align: justify">

        <div class="page-header">
            <h2>Tuition Rates</h2>
        </div>

        <?php echo $this->element('alert'); ?>
        <table id="user" class="table table-bordered table-striped" style="clear: both">
            <tbody>
            <tr style="text-align: center">
                <td width="15%">Rates per hour </td>
                <td width="85%" colspan="5">Tutor's Qualifications</td>
            </tr>
            <tr style="text-align: center">
                <td width="15%"></td>
                <td>A Level / Dip</td>
                <td>Undergraduate</td>
                <td>Graduate</td>
                <td>Full-Time</td>
                <td>MOE Teachers</td>
            </tr>
            <tr style="text-align: center">
                <td width="15%">Level of Student</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="text-align: center">
                <td width="15%">Kindergarden</td>
                <td>$12 - $15</td>
                <td>$15 - $18</td>
                <td>$15 - $20</td>
                <td>$20 - $25</td>
                <td>$25 - $30</td>
            </tr>
            <tr style="text-align: center">
                <td width="15%">Lower Primary</td>
                <td>$12 - $15</td>
                <td>$15 - $18</td>
                <td>$15 - $20</td>
                <td>$20 - $25</td>
                <td>$25 - $30</td>
            </tr>
            <tr style="text-align: center">
                <td width="15%">Upper Primary</td>
                <td>$12 - $15</td>
                <td>$15 - $18</td>
                <td>$15 - $20</td>
                <td>$20 - $25</td>
                <td>$25 - $30</td>
            </tr>
            <tr style="text-align: center">
                <td width="15%">Lower Secondary</td>
                <td>$12 - $15</td>
                <td>$15 - $18</td>
                <td>$15 - $20</td>
                <td>$20 - $25</td>
                <td>$25 - $30</td>
            </tr>
            <tr style="text-align: center">
                <td width="15%">Upper Secondary</td>
                <td>$12 - $15</td>
                <td>$15 - $18</td>
                <td>$15 - $20</td>
                <td>$20 - $25</td>
                <td>$25 - $30</td>
            </tr>
            <tr style="text-align: center">
                <td width="15%">Kindergarden</td>
                <td>$12 - $15</td>
                <td>$15 - $18</td>
                <td>$15 - $20</td>
                <td>$20 - $25</td>
                <td>$25 - $30</td>
            </tr>
            <tr style="text-align: center">
                <td width="15%">Kindergarden</td>
                <td>$12 - $15</td>
                <td>$15 - $18</td>
                <td>$15 - $20</td>
                <td>$20 - $25</td>
                <td>$25 - $30</td>
            </tr>
            <tr style="text-align: center">
                <td width="15%">Kindergarden</td>
                <td>$12 - $15</td>
                <td>$15 - $18</td>
                <td>$15 - $20</td>
                <td>$20 - $25</td>
                <td>$25 - $30</td>
            </tr>
            </tbody>
        </table>



    </div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>