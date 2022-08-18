<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package isning_theme
 */

?>
<!--
	FOOTER
-->
	<footer id="colophon" class="site-footer">
		<div class="bg-darkblue">
			<div class="container ">
				<div class="row">
					<div class="col-12 col-lg-3 pt-4 text-center text-lg-start">
						<img src="<?php $footerLogo = get_field('footer_logo', 'option');  echo esc_url($footerLogo['sizes']['large']);?>" alt="" class="img-fluid mb-3" width="250px">
						<p class="text-white"> <?php the_field('footer_text', 'option'); ?> </p>
					</div>
					<div class="col-6 col-lg-3 pt-5">
						<h4 class="text-blue"> QUICK MENU </h4>
						<?php
							wp_nav_menu( array(
								'menu'			 => 'sc_menu',
								// 'theme_location' => '',
								// 'container_id'	 => 'navbarSupportedContent',
								'container_class'	 => '',
								// 'menu_id'   => '',
								'menu_class'=> 'navbar-nav justify-content-end white w-100',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">  %3$s	   </ul>',
								'add_li_class'  => 'nav-item py-2 text-white',
							));
						?>
					</div>
					<div class="col-6 col-lg-3 pt-5">
						<h4 class="text-blue"> SERVICES </h4>
						<ul class="p-0 footer-service-list">							
						<?php
							if( have_rows('services') ):
								while( have_rows('services') ) : the_row();
						?>
							<li class="text-white py-2"> <i class="fa-solid fa-angle-right text-blue mr-1"></i>  <?php echo the_sub_field('service_name');?>  </li>
						<?php
								endwhile;
							endif;
						?>
						</ul>
					</div>
					<div class="col-12 col-lg-3">
						<div class="row bg-blue"> 
							<h4 class="text-white text-center py-3"> OPEN HOURS </h4>
						 </div>
						<div class="row bg-lightblue px-4 pt-3 pb-5">
							<table class="table text-white">
								<tbody>									
								<?php
									if( have_rows('open_hours', 'option') ):
										while( have_rows('open_hours', 'option') ) : the_row();
								?>
									<tr>
										<td> <?php echo the_sub_field('open_day');?> </td>
										<td> <?php echo the_sub_field('open_hour');?> </td>
									</tr>
								<?php
										endwhile;
									endif;
								?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-deepblue">
			<div class="container ">			
				<div class="row align-items-center py-4">
					<div class="col-12 col-sm-6 text-center text-sm-start">
						<img src="<?php $subFooterImage = get_field('sub_footer_image', 'option');  echo esc_url($subFooterImage['sizes']['large']);?>" alt="" class="img-fluid" width="250">
					</div>
					<div class="col-12 col-sm-6">
						<p class="text-white text-center text-sm-end m-0"> <?php the_field('site_copyright', 'option'); ?> </p>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
