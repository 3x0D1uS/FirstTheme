<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="nav">
            <a class="logo" href="#">
                <img src="<?php echo get_theme_file_uri()?>/images/logo.png" alt="">
            </a>
        <div class="menu">
            <!-- <ul>
                <li class="active"><a href="#about">about</a></li>
                <li><a href="#second">service</a></li>
                <li><a href="#third">work</a></li>
                <li><a href="#blog">blog</a></li>
                <li><a href="#">contact</a></li>
            </ul> -->
			<?php wp_nav_menu( ['theme_location'  => 'menu-1'] ); ?>
            <button type="button" class="search-toggle" >
            </button>
            <div class="search-form">
                <form role="search" method="get" id="searchform">
                    <div class="search-form-inner">
                        <input type="text" placeholder="Search">
                        <button type="submit" id="search">
                        </button>
                    </div>
                </form>
            </div>
    </div>
        <button type="button" class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>