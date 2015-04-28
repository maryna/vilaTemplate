<?php get_header(); ?>

    <!-- CONTENT AREA -->
    <div class="full-width content-area">
        <div class="row">
            <div class="small-12 medium-5 large-5 columns">
                <div class="callout panel">
                    <?php $upload_dir = wp_upload_dir(); ?>
                    <img src="<?php echo $upload_dir['baseurl']; ?>/logo.jpg">
                </div>
            </div>
            <div class="small-12 medium-7 large-7 columns">
                <div class="callout panel">
                    <ul data-orbit data-options="bullets: false; timer: false; slide_number: false">
                        <li data-orbit-link="headline-1"><img src="<?php echo $upload_dir['baseurl']; ?>/slider_1.jpg"></li>
                        <li data-orbit-link="headline-2"><img src="<?php echo $upload_dir['baseurl']; ?>/slider_2.jpg"></li>
                        <li data-orbit-link="headline-3"><img src="<?php echo $upload_dir['baseurl']; ?>/slider_3.jpg"></li>
                    </ul>
                </div>
            </div>
            </div>

        <div class="row">
            <div class="small-12 medium-12 large-12 columns text-center">
                <div class="callout panel">
                    <div class="appended">
                        <blockquote>Let your eyes stay fixes on the horizon, and surrender your thoughts to the gentle sea breeze. Out there somewhere, at a point where the rainforest meets the ocean, something will catch up with you and carry you away. To a place where no worries in the world can keep you from smiling</blockquote>
                        <p>VILA BARRACUDA pool area</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
	

