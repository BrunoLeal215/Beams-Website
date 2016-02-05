<!DOCTYPE html>
<html>
<head>
    <?php include_once('Template/Head.php'); ?>
</head>
<body class="page-template-contact full-content wide red header-absolute menu-hover-edge">
    <?php $page = 'home'; include_once('Template/TopMenu.php'); ?>

<br/><br/>
<!--<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper" data-alias="classicslider1">
<div id="rev_slider_4_1" class="rev_slider" data-version="5.0.7">
    <ul>
        <li>
            <img src="Content/images/slider/backBeams.jpg" alt="" data-bgposition="center center" 
                 data-kenburns="on" data-duration="500000" data-ease="Linear.easeNone" 
                 data-scalestart="100" data-scaleend="100" data-rotatestart="0" 
                 data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" 
                 data-bgparallax="10" class="rev-slidebg" data-no-retina>

        </li>
        <li data-index="rs-18" data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut" 
            data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="" data-rotate="0" 
            data-saveperformance="off" data-title="Ken Burns" data-description="">
            <img src="Content/images/slider/fundoBeams4.jpg" alt="" data-bgposition="center center" 
                 data-kenburns="on" data-duration="50000" data-ease="Linear.easeNone" 
                 data-scalestart="100" data-scaleend="100" data-rotatestart="0" 
                 data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" 
                 data-bgparallax="10" class="rev-slidebg" data-no-retina>
        </li>
    </ul>
    <div class="tp-static-layers"></div>
    <div class="tp-bannertimer tp_bannertimer_custom"></div>
</div>
</div> -->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="overflow: hidden;position:relative">

<ol class="carousel-indicators">
 <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
 <li data-target="#carousel-example-generic" data-slide-to="1"></li>
</ol>

<div class="carousel-inner" role="listbox">
 <div class="item active">
     <img src="Content/images/slider/fundoBeams4.jpg" alt="...">
 </div>
</div>
</div>

<main id="main" class="main index-main_ clearfix" role="main">
    <div class="container">
        <div class="row">
            <section id="content" class="site-content hfeed site-content col-xs-12 col-sm-12 col-md-12" role="main">
<!--                <div class="fitsc-row hidden-xs row-fluid row-fluid-content">
                    <div class="row">
                        <div class="fitsc-column col-md-12 col-sm-12 col-xs-12">
                            
                        </div>
                    </div>
                </div>-->
                    <div class="fitsc-row row-background row-fluid row-no-gutter row-parallax overlay-enabled primary-color">
                        <div class="overlay"></div>
                        <div class="row">
                            <form action="/Contact" method='get'>
                            <div class="fitsc-column col-md-4 col-sm-4 col-xs-12">
                                <div class="fitsc-bubble bubble-number">
                                    <span class="bubble-icon">01</span>
                                    <div class="bubble-text">
                                        <button style="background-color:transparent;border:none;text-align:left" name="enquiry" id="enquiry" name='enquiry' value="bookademo" type="submit">
                                                <p>Book A</p>
                                                <p>Demo</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="fitsc-column col-md-4 col-sm-4 col-xs-12">
                                <div class="fitsc-bubble bubble-number">
                                    <span class="bubble-icon">02</span>
                                    <div class="bubble-text">
                                        <button style="background-color:transparent;border:none;text-align:left" name="enquiry" id="enquiry" name='enquiry' value="downloadtrial" type="submit">
                                            <p>Download</p>
                                            <p>Trial</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="fitsc-column col-md-4 col-sm-4 col-xs-12">
                                <div class="fitsc-bubble bubble-number">
                                    <span class="bubble-icon">03</span>
                                    <div class="bubble-text">
                                        <button style="background-color:transparent;border:none;text-align:left" name="enquiry" id="enquiry" name='enquiry' value="purchasenow" type="submit">
                                            <p>How to</p>
                                            <p>Purchase</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                          </form>
                        </div>
                    </div>
                <div class="container">
                    <div class="row">
                        <div class="fitsc-row ">
                            <div class="row">
                                <div class="fitsc-space"></div>
                                <div class="fitsc-column col-md-7 col-sm-7 col-xs-12">
                                    <h5 class="fitsc-heading fitsc-heading-default fitsc-font-medium   clearfix"><span>BEAMS</span></h5>
                                    <p>With BEAMS, there is no need to switch between other programs when estimating or quoting or keeping track of your accounts. BEAMS was designed for the construction industry in 1993 and the software is now used by many companies in many sectors. Unlike others systems in the market, BEAMS is a complete, fully integrated Estimating, Scheduling and Accounting system with the addition of a Mobile application to deal with all the supervisor’s onsite activities. What this means to your business is no double up of processes or information as it flows seamlessly from one section of the program to the next reducing erosion and increasing profits.</p>
                                </div>
                                <div class="fitsc-column col-md-5 col-sm-5 col-xs-12">
                                    <img class="aligncenter size-full wp-image-1911" src="Content/tape.jpg" alt="01" />
                                    <div class="fitsc-space"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php include_once('Template/BottomMenu.php'); ?>
</body>
</html>
