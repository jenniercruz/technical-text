<?php
    /* Template Name: home */

    get_header();
?>

	<main id="primary" class="site-main">
        
<!--
	BANNER - (ACF PRO BLOCK TEMPLATE)
-->	
        <section class="landing-banner" style="background-image: url('<?php $image = get_field('background_image');  echo esc_url($image['sizes']['large']);?>')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-5">
                        <h1 class="text-weight-600 pb-2">
                            <?php the_field('banner_title'); ?>
                        </h1>
                        <p class="pb-4">
                            <?php the_field('banner_text'); ?>
                        </p>
                        <?php
                            $learnButton = get_field('learn_button');
                            if( $learnButton ):
                        ?>
                            <a href="<?php echo esc_url( $learnButton['button_link'] ); ?>" class="btn-blue sc-btn mr-1 d-inline-block"> <?php echo esc_html( $learnButton['button_text'] ); ?> </a>
                        <?php endif; ?>

                        <?php
                            $callButton = get_field('call_button');
                            if( $callButton ):
                        ?>
                            <a href="tel:<?php echo esc_html( $callButton['phone_number'] ); ?>" class="btn-transparent sc-btn"> <i class="fa-solid fa-phone-volume icon-rotate-20deg"></i> <span class="text-dark"><?php echo esc_html( $callButton['button_text'] ); ?></span> </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

<!--
	BENEFITS - (ACF PRO BLOCK TEMPLATE)
-->	
        <section class="benefits bg-lightblue">
            <div class="container">
                <div class="row py-5 text-center">
                <?php
                    if( have_rows('benefits') ):
                        while( have_rows('benefits') ) : the_row();
                ?>
                    <div class="col-6 col-sm-3">
                        <figure>
                            <i class="fa-solid <?php echo the_sub_field('benefit_icon');?> text-white benefits-icon mb-2"></i>
                            <figcaption>
                                <h4 class="text-white "> <?php echo the_sub_field('benefit_text');?> </h4>
                            </figcaption>
                        </figure>
                    </div>

                <?php
                        endwhile;
                    endif;
                ?>
                </div>
            </div>
        </section>

<!--
	SERVICES - (ACF PRO BLOCK TEMPLATE)
-->	
        <section class="services">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class=" col-lg-7 text-center">
                        <h2 class="text-blue text-weight-600"> <?php the_field('services_section_title'); ?> </h2>
                        <p> <?php the_field('services_section_text'); ?> </p>
                    </div>
                </div>
                <div class="row pb-5">

                <?php
                    if( have_rows('services') ):
                        while( have_rows('services') ) : the_row();
                ?>
                    <div class="col-12 col-sm-6 col-lg-4 p-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="<?php $serviceImage = get_sub_field('service_image');  echo esc_url($serviceImage['sizes']['large']);?>" class="card-img-top" alt="service">
                            </div>                            
                            <div class="card-body bg-blue">
                                <span class="card-service-icon mb-1">
                                    <i class="fa-solid fa-bed-pulse text-lightblue "></i>
                                </span>
                                <h5 class="card-title text-white text-center"> <?php echo the_sub_field('service_name');?> </h5>
                            </div>
                        </div>
                    </div>
                <?php
                        endwhile;
                    endif;
                ?>
                </div>
            </div>
        </section>

<!--
	CONTACT - (ACF PRO BLOCK TEMPLATE)
-->	
        <section class="contact bg-blue">
            <div class="container">
                <div class="row text-center py-5 align-items-center">
                    <div class="col-12 col-sm-6 col-lg-4 mb-3 mb-lg-0">
                        <h3 class="text-white"> <?php the_field('contact_section_text'); ?> </h3>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-3 mb-lg-0">
                    <?php
                        $contactPhone = get_field('contact_phone');
                        if( $contactPhone ):
                    ?>
                        <h3 class="text-white"> <a href="tel:<?php echo $contactPhone['phone_number']?>"> <i class="fa-solid fa-phone-volume text-white icon-rotate-20deg"></i> <?php echo $contactPhone['phone_text']?> </a></h3>
                    <?php endif; ?>
                    </div>
                    
                    <div class="col-12 col-sm-12 col-lg-4 mt-sm-4 mt-lg-0 text-sm-center">

                    <?php
                        $emailButton = get_field('email_button');
                        if( $emailButton ):
                    ?>
                        <a href="<?php echo $emailButton['button_link']?>" class="btn-white sc-btn"> <i class="fa-solid fa-envelope"></i> <?php echo $emailButton['button_text']?> </a>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

<!--
	TESTIMONIALS - (ACF PRO BLOCK TEMPLATE)
-->	
        <section class="testimonials">
            <div class="container py-5">
                <div class="row justify-content-center py-4">
                    <div class="col-lg-7 text-center">
                        <h2 class="text-blue text-weight-600"> <?php the_field('testimonials_section_title'); ?></h2>
                        <p> <?php the_field('testimonials_section_text'); ?> </p>
                    </div>
                </div>
                <div class="row pb-4">

                <?php
                    if( have_rows('testimonials') ):
                        while( have_rows('testimonials') ) : the_row();
                ?>
                    <div class="col-12 col-lg-4 mb-4">
                        <div class="card" >
                            <div class="card-img cursor-pointer">
                                <img src=" <?php $testimonialPicture = get_sub_field('testimonial_picture');  echo esc_url($testimonialPicture['sizes']['large']);?> " class="card-img-top js-modal-btn" alt="testimonials"  data-video-id="<?php the_sub_field('testimonial_video'); ?>">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title text-blue text-weight-600"> <?php the_sub_field('testimonial_name'); ?> </h5>
                                <p class="card-text"> <?php the_sub_field('testimonial_text'); ?> </p>
                            </div>
                        </div>
                    </div>
                <?php
                        endwhile;
                    endif;
                ?>
                </div>
            </div>
        </section>

	</main><!-- #main -->

<?php
get_footer();
