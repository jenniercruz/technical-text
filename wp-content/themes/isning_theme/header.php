<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package isning_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<!-- font awesome -->
	<script src="https://kit.fontawesome.com/bff50fba1b.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'isning_theme' ); ?></a>

<!--
	HEADER
-->
	
	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg shadow-sm bg-white fixed-top py-4">
			<div class="container">

				<a class="navbar-brand" href="#">
					<img src="<?php $siteLogo = get_field('site_logo', 'option');  echo esc_url($siteLogo['sizes']['large']);?>" alt="logo"> 
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Dropdown
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled">Disabled</a>
						</li>
					</ul>
				</div> -->
				<?php
					wp_nav_menu( array(
						'menu'			 => 'sc_menu',
						'theme_location' => 'primary',
						'container_id'	 => 'navbarSupportedContent',
						'container_class'	 => 'collapse navbar-collapse',
						// 'menu_id'   => '',
						'menu_class'=> 'navbar-nav justify-content-end text-dark w-100',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">  %3$s	   </ul>',
						'add_li_class'  => 'nav-item px-3 py-2',
					));
				?>
			</div>
		</nav>
	</header><!-- #masthead -->
