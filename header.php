<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php
		do_action( 'travelify_meta' );
		do_action( 'travelify_links' );
		wp_head();
	?>
</head>

<body <?php body_class(); ?>>

	<div class="container">
	  <div class="row">
	    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
	      	      <a href="/" title="Hiel">
      <img src="https://hiel.ru/wp-content/uploads/2020/10/cropped-LOGO_FINAL1-300x136.png">	   </a>
	    </div>
	    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
			<div class="special-search">
				<?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
			</div>
		</div>
	    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
	      	<div class="contact-top">
				<p><b>Телефон</b>: <a href="tel:8 985 785 60 00">8 (985) 785 60 00</a></p>
			 	<p><a href="mailto:info@hiel.ru"><b>E-mail</b>: info@hiel.ru</a></p>
			</div>
	    </div>
	  </div>
	</div>

	<?php
		if ( has_nav_menu( 'primary' ) ) {
			$args = array(
				'theme_location'    => 'primary',
				'container'         => '',
				'items_wrap'        => '<ul class="root">%3$s</ul>'
			);
			echo '<nav id="main-nav" class="clearfix">
					<div class="container clearfix">';
				wp_nav_menu( $args );
			echo '</div><!-- .container -->
					</nav><!-- #main-nav -->';
		}
		else {
			echo '<nav id="main-nav" class="clearfix">
					<div class="container clearfix">';
				wp_page_menu( array( 'menu_class'  => 'root' ) );
			echo '</div><!-- .container -->
					</nav><!-- #main-nav -->';
		}
	?>

	<div id="main" class="container clearfix">
			
			