<!-- NAV - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<nav class="navbar navbar-default navbar-fixed-top dash-navbar-top dnl-hidden">
    <div class="navbar-header">
        <button class="dnl-btn-toggle" id="nav-icon3">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </button>
        <?php if ( is_home() || is_single()  ) { ?>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" title="home"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-blog.svg" title="logo" alt="Yieldmo logo" class="logo-blog img-responsive"></a>
        <?php } else { ?>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="home"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-navbar.svg" title="logo" alt="Yieldmo logo" class="img-responsive"></a>
        <?php } ?>
        <ul class="navbar-yieldmo navbar-text navbar-right text-right">
            <li id="nav-contact"><a href="#contact">Contact</a></li>
            <li id="nav-ad-formats"><a href="http://adformatlab.yieldmo.com">Ad Formats</a></li>
            <li id="nav-login" class="btn btn-default"><a href="#login">Log in</a></li>
        </ul>
    </div>      
</nav> <!-- /.navbar -->

<div class="dash-navbar-left dnl-hidden">
    <div class="menu-content">
        <?php if (is_front_page()) { ?>
        <ul class="text-white">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <?php } else { ?>
        <ul class="text-white">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#about">About</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#team">Team</a></li>
            <li><a href="<?php echo get_page_link(6); ?>">Blog</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">Contact</a></li>
        </ul>
        <?php } ?>

        <ul class="text-dark-gray">
            <li><a href="<?php echo get_page_link(141); ?>">Careers</a></li>
            <li><a href="<?php echo get_page_link(125); ?>">FAQ</a></li>
            <li><a href="<?php echo get_page_link(126); ?>">Terms &amp; Privacy</a></li>
        </ul>
        <ul class="social-logos">
            <li>Follow us</li>
            <?php $on = "Yieldmo on"?>
            <li><a href="https://www.facebook.com/Yieldmo" title="<?php echo $on?> Facebook" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/social-logos/logo-facebook.svg" class="img-responsive"></a></li>
            <li><a href="https://twitter.com/yieldmo" title="<?php echo $on?> Twitter" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/social-logos/logo-twitter.svg" class="img-responsive"></a></li>
            <li><a href="https://www.linkedin.com/company/yieldmo" title="<?php echo $on?> Linkedin" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/social-logos/logo-linkedin.svg" class="img-responsive"></a></li>
            <li><a href="http://vimeo.com/adformatlab" title="<?php echo $on ?> Vimeo" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/social-logos/logo-vimeo.svg" class="img-responsive"></a></li>
        </ul>
        <div class="made-in-nyc">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/made-in-nyc.png" title="Made in NYC" class="img-responsive">
        </div>
    </div> 
</div> <!-- /.dash-navbar-left -->

<div id="spacer"></div>