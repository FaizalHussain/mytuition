<?php
echo $this->Html->css('home', null, array('inline' => false));
echo $this->Html->script('jquery-latest.min', false);
echo $this->Html->script('unslider.min', false);
?>
<script>
    $(function() {
        $('.banner').unslider({
            speed: 500,               //  The speed to animate each slide (in milliseconds)
            delay: 3000,              //  The delay between slide animations (in milliseconds)
            complete: function() {},  //  A function that gets called after every slide animation
            keys: true,               //  Enable keyboard (left, right) arrow shortcuts
            dots: true,               //  Display dot navigation
            fluid: false              //  Support responsive design. May break non-responsive designs
        });
    });
</script>
<!-- Contents here -->
<div id="home">
    <div>
        <div class="row">
            <div class="col-2 col-sm-2 col-lg-6">
                <div class="row">
                    <div class="col-2 col-sm-2 col-lg-12">
                        <h2 style="margin-top: -5px;">Heading 1 </h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 col-sm-2 col-lg-12">
                        <h2 style="margin-top: -5px;">Heading 2 </h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
                    </div>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-lg-6">
                <div class="banner">
                    <ul>
                        <li>This is a slide.</li>
                        <li>This is another slide.</li>
                        <li>This is a final slide.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>