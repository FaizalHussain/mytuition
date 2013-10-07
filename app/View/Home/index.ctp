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
    $(function() {
        $('.testimonial').unslider({
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
<div id="home" style="padding-top:60px;">
    <div>
        <div class="row">
            <div class="col-2 col-sm-2 col-lg-6">
                <div class="row">
                    <div class="col-2 col-sm-2 col-lg-12">
                        <div class="well well-lg" style="padding-top: 0px; padding-bottom: 10px; background-color: rgb(240, 247, 253); text-align: justify">
                            <h3 style="line-height: 1.3em;"><small><span style="color: #1b1b1b;">
                                <b>Straits Tutors</b> is founded on the principle of sourcing the best match in tutors for all our customers, regardless of budget, requirements or requests. A stringent process of personally verifying the profile, qualifications, capabilities and teaching experience of each and every single tutor is our way of fulfilling the aim in which every expectation of our customers is fully and satisfactorily met.
                                <br/><br/>Click here to begin your search in finding the best tutor, or alternatively you may choose give us a call at 8444 0210 where we can aid you in the process.
                            </span></small></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 col-sm-2 col-lg-12">
                        <div class="well well-lg" style="padding-top: 0px; padding-bottom: 10px; background-color: rgb(252, 242, 242);">
                            <h4>Testimonials</h4>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-lg-6">
                <div class="banner">
                    <ul>
                        <li style="background-image: url(<?php echo $this->Html->url('/img/slider/1.jpg',true) ?>);"></li>
                        <li style="background-image: url(<?php echo $this->Html->url('/img/slider/2.jpg',true) ?>);"></li>
                        <li style="background-image: url(<?php echo $this->Html->url('/img/slider/3.jpg',true) ?>);"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<?php //echo $this->element('sql_dump'); ?>
    <div class="clear_both"></div>
<?php echo $this->Js->writeBuffer(); ?>