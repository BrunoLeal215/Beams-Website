<!--HEADER BEGIN-->
<?php
    echo '<div id="page" class="wrapper">';
    echo '<div id="topbar" class="top-header topbar hidden-xs">';
    echo '<div class="container">';
    echo '<div id="topbar-left" class="topbar-left top-left-header topbar-sidebar">';
    echo '<div id="text-5" class="widget widget_text">';
    echo '<div class="textwidget">';
    echo '<div class="contact-font-icon">';
    echo '<span class="contact-info phone-info"><i class="fa fa-phone"></i><a href="tel:94547760">(08) 9454 7760</a></span>';
    echo '<span class="contact-info email-info"><i class="fa fa-envelope-o"></i><a href="mailto:enquiries@beamsbuild.com.au">enquiries@beamsbuild.com.au</a></span>';
    echo '</div></div></div></div>';
    
    echo '<div id="topbar-right" class="topbar-right top-right-header topbar-sidebar">';
    echo '<div id="fitwp-social-links-widget-4" class="widget social-links-widget">';
    echo '<a href="https://www.facebook.com/pages/BEAMS/68325436659" target="_blank" rel="nofollow" title="Facebook"><i class="fa fa-facebook"></i><span> / Facebook</span></a>';
    echo '<a href="https://twitter.com/BEAMSSoftware" target="_blank" rel="nofollow" title="Twitter"><i class="fa fa-twitter"></i><span> / Twitter</span></a>';
    echo '<a href="https://www.youtube.com/user/BEAMSSoftware" target="_blank" rel="nofollow" title="Youtube"><i class="fa fa-youtube"></i><span> / Youtube</span></a>';
    echo '</div></div></div></div>';
    
    echo '<header id="masthead" class="site-header">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="site-branding header-left col-xs-9 col-sm-3">';
    echo '<h1 class="site-title"><a href="/home" rel="home">Beams Build</a></h1>';
    echo '<a href="/home">';
    echo '<img alt="beams" src="Content/images/Beams/beamsSmall.png" /></a>';
    echo '</div>';
    echo '<div class="header-right hidden-xs hidden-sm col-sm-1 pull-right"></div>';
    
    echo '<nav id="site-nav" class="site-nav navbar col-xs-3 col-sm-8 right">';
    echo '<div class="navbar-header">';
    echo '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav">';
    echo '<span class="sr-only">Toggle Navigation</span>';
    echo '<span class="icon-bar"></span>';
    echo '<span class="icon-bar"></span>';
    echo '<span class="icon-bar"></span>';
    echo '</button></div>';
        
    echo '<div id="primary-nav" class="primary-nav collapse navbar-collapse">';
    echo '<ul id="navigation" class="nav navbar-nav">';
    echo '<li class='.($page == 'home' ? 'active' : '').'>';
    echo  '<a href="/home">Home</a>';
    echo '</li><li class='.($page == 'aboutus' ? 'active' : '').'>';
    echo '<a href="/aboutus">About Us</a>';
    echo '</li><li class='.($page == 'testimonials' ? 'active' : '').'>';
    echo '<a href="/testimonials">Testimonials</a>';
    echo '</li><li class='.($page == 'products' ? 'active' : '').'>';
    echo '<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="dropdown" data-delay="1" href="javascript:;"><font style="font-size: 100%">Products</font></a>';
    echo '<ul class="dropdown-menu">';
    echo '<li><a href="/products-beams">BEAMS</a></li>';
    echo '<li><a href="/products-mobile">Mobile</a></li>';
    echo '<li><a href="/products-crm">CRM</a></li></ul>';
    echo '</li><li class='.($page == 'support' ? 'active' : '').'>';
    echo '<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="dropdown" data-delay="1" href="javascript:;">Support</a>';
    echo '<ul class="dropdown-menu">';
    echo '<li id="technical"><a href="/support">Technical Support</a></li>';
    echo '<li id="training"><a href="/training">Training</a></li>';
    echo '<li><a href="/KB">Knowledge Base</a></li></ul>';
    echo '</li><li id="contact" class='.($page == 'contact' ? 'active' : '').'>';
    echo '<a href="/contact">Contact Us</a></li></ul></div>';
    echo '</nav></header></div>';
?>
<!--HEADER END-->
