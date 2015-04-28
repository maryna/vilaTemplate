<?php get_header(); ?>


<!-- CONTENT AREA -->
	<div class="full-width content-area">	
		<div class="row">
            <div class="small-12 medium-5 large-5 columns">
                <div class="callout panel">
                    <?php $upload_dir = wp_upload_dir(); ?>
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo $upload_dir['baseurl']; ?>/logo.jpg"></a>
                </div>
            </div>
  
            <?php
                if ( is_page( 'Contact' ) ) {
                    get_template_part( 'partials/booking', 'form' );
                } else if ( is_page( 'Media' ) ) {
                    get_template_part( 'partials/media', 'gallery' );
                }else {
                }
            ?>
	</div>	  


<?php get_footer(); ?>
