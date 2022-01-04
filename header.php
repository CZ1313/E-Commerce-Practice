<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site ">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'e-commerce-practice' ); ?></a>

	<header id="masthead" class="site-header ">

	<nav id="site-navigation" class=" navbar navbar-expand-lg navbar-light bg-light ">
  		<div class="container-fluid">
			<div class="site-branding">
			<?php
			the_custom_logo();
				?>
		</div>
    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    	</button>

    	<div class="collapse navbar-collapse menu" id="navbarNav">
      		<ul class="navbar-nav ms-auto">
        		<li class="nav-link">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container' => '',
       							'items_wrap' => '%3$s' 
							)
						);
						?>
        		</li>
        <li class="nav-item">
          <a class="nav-link" href="#">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Donate</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

	</header><!-- #masthead -->
