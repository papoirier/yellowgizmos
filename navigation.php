<!-- NAV - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="navbar-header">
            <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="home"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-navbar.svg" title="logo" alt="Yieldmo logo" class="img-responsive"></a>
            <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php if (is_page_template( 'single.php' ) ) { ?> 
                <p>Blog</p>
            <?php }?></a>
            <ul class="navbar-yieldmo navbar-text navbar-right text-right">
                <li id="nav-contact"><a href="#contact">Contact</a></li>
                <li id="nav-login" class="btn btn-default"><a href="#login">Log in</a></li>
            </ul>
        </div>
            
        
        <div class="side-collapse in">
            <?php if (is_front_page()) { ?>
            <div class="menu-content">
                <ul class="text-white">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <ul class="text-dark-gray">
                    <li><a href="#careers">Careers</a></li>
                    <li><a href="#terms">Terms of Service</a></li>
                    <li><a href="#press">Press &amp; Media</a></li>
                    <li><a href="#privacy">Privacy Policy</a></li>
                </ul>
                <?php } ?>
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
        </div><!--/.nav-collapse -->
</nav>
<div class="spacer"></div>

