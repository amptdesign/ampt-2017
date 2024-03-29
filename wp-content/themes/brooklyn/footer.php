    </div><!-- close main-content-background -->
        
    <div class="clear"></div>
        
    <?php ut_before_footer_hook(); ?>
           
    <?php if( ut_return_csection_config('ut_activate_csection' , 'on') == 'on' ) {
        
        global $detect;
            
        /* contact section headline */ 
        $ut_csection_header_expertise_slogan = ot_get_option('ut_csection_header_expertise_slogan');
        $ut_csection_header_slogan           = ot_get_option('ut_csection_header_slogan');
        $ut_csection_header_slogan_glow      = ot_get_option('ut_csection_header_slogan_glow') ;
        $ut_csection_header_style            = ot_get_option('ut_csection_header_style' , 'pt-style-1');
        $ut_csection_header_style            = ( $ut_csection_header_style == 'global' ) ? ot_get_option('ut_global_headline_style') : $ut_csection_header_style;
                
        /* contact section background and overlay - available inside theme options as well as on pages */
        $ut_csection_overlay                 = ut_return_csection_config( 'ut_csection_overlay' , 'on' );        
        
        /* contact section background and overlay - currently only located inside theme options panel */
        $ut_csection_background_type         = ot_get_option('ut_csection_background_type' , 'image');
        $ut_csection_parallax                = ot_get_option('ut_csection_parallax' , 'off') == 'on' && !$detect->isMobile() ? 'parallax-background parallax-section' : 'normal-background';
        $ut_csection_overlay_pattern         = ot_get_option('ut_csection_overlay_pattern' , 'off') == 'on' ? 'parallax-overlay-pattern' : '';
        
        /* google map */
        $ut_csection_map                     = ot_get_option( 'ut_csection_map' );
        $ut_csection_map_class               = $ut_csection_map && $ut_csection_background_type == 'map' ? 'contact-map' : '';
        
        /* section video class */
        $ut_csection_video_source            = ot_get_option('ut_csection_video_source' , 'youtube');
        $ut_section_video_class              = $ut_csection_background_type == 'video' && $ut_csection_video_source == 'selfhosted' ? 'ut-video-section' : '';
                
        /* contact section skin */
        $ut_csection_skin                    = ot_get_option( 'ut_csection_skin');
        
        /* contact section areas */
        $ut_left_csection_content_area       = ot_get_option('ut_left_csection_content_area');
        $ut_right_csection_content_area      = ot_get_option('ut_right_csection_content_area');
        
        $ut_left_csection_content_area_width = !empty($ut_right_csection_content_area) ? 'grid-45 suffix-5 mobile-grid-100 tablet-grid-50' : 'grid-100 mobile-grid-100 tablet-grid-100';
        $ut_right_csection_content_area_width= !empty($ut_left_csection_content_area) ? 'grid-50 mobile-grid-100 tablet-grid-50' : 'grid-100  mobile-grid-100 tablet-grid-100';
        
    } ?>
    
    <?php if( ut_return_csection_config('ut_activate_csection' , 'on') == 'on' ) : ?>
    
    <section id="contact-section" data-effect="fadeIn" class="animated contact-section <?php echo $ut_csection_parallax; ?> <?php echo $ut_csection_skin; ?> <?php echo $ut_csection_map_class; ?> <?php echo $ut_section_video_class; ?>">   		
    
    <a class="ut-offset-anchor" id="section-contact"></a> 
        
        <?php if( ot_get_option('ut_csection_parallax' , 'off') == 'on' && !$detect->isMobile() ) : ?>
        
            <div class="parallax-scroll-container"></div>
        
        <?php endif; ?>        
            
        <?php if( $ut_csection_map && $ut_csection_background_type == 'map' ) : ?>       
        
        <div class="background-map"><?php echo do_shortcode($ut_csection_map); ?></div>
        
        <?php endif; ?>
        
        <?php if( $ut_csection_background_type == 'video' ) : ?>
            
            <?php ut_create_csection_bg_video(); ?>
            
        <?php endif; ?>
        
        <?php if( $ut_csection_overlay == 'on' ) : ?>
        
        <div class="parallax-overlay <?php echo $ut_csection_overlay_pattern; ?> <?php echo ot_get_option( 'ut_csection_overlay_pattern_style' , 'style_one' ); ?>">
		
        <?php endif; ?>
        
        <div class="grid-container parallax-content">
        	
            <?php if( !empty($ut_csection_header_slogan) || !empty($ut_csection_header_expertise_slogan) ) : ?>
            
            <!-- parallax header -->
            <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                <header class="parallax-header <?php echo $ut_csection_header_style; ?>">
                    
                    <?php if( !empty($ut_csection_header_slogan) ) : ?>
                    	<h2 class="parallax-title"><span><?php echo do_shortcode( ut_translate_meta($ut_csection_header_slogan) ); ?></span></h2>
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_csection_header_expertise_slogan) ) : ?>
                    	<p class="lead"><?php echo do_shortcode( ut_translate_meta($ut_csection_header_expertise_slogan) ); ?></p>
                    <?php endif; ?>
                    
                </header>
            </div>
            <!-- close parallax header -->
            
            <div class="clear"></div>
            
            <?php endif; ?>
        
        </div>
        <div class="grid-container section-content">
            
            <!-- contact wrap -->
            <div class="grid-100 mobile-grid-100 tablet-grid-100 grid-parent">
                <div class="contact-wrap">
                
                    <?php if( !empty($ut_left_csection_content_area) ) : ?>
                    
                    <!-- contact message -->
                    <div class="<?php echo $ut_left_csection_content_area_width; ?>">
                        <div class="ut-left-footer-area clearfix">
                            
                            <?php echo do_shortcode(wpautop($ut_left_csection_content_area)); ?>
                            
                        </div>
                    </div><!-- close contact message -->
                    
                    <?php endif; ?>
                    
                    <?php if( !empty($ut_right_csection_content_area) ) :?>
                    
                    <!-- contact form-holder -->
                    <div class="<?php echo $ut_right_csection_content_area_width; ?>">
                        <div class="ut-right-footer-area clearfix">
                        	
                            <?php echo do_shortcode(wpautop($ut_right_csection_content_area)); ?>
                                
                        </div>
                    </div><!-- close contact-form-holder -->
                	
                    <?php endif; ?>                    
                    
                </div>
            </div><!-- close contact wrap -->
            
            
		</div><!-- close container -->
        
        <?php if( $ut_csection_overlay == 'on' ) : ?>
        
        </div><!-- parallax overlay -->
		
        <?php endif; ?>
        
	</section>
    
    <div class="clear"></div>
    
    <?php endif; //#ut_activate_csection ?>    
                
	<!-- Footer Section -->
    <footer class="footer <?php echo ot_get_option('ut_footer_skin' , 'ut-footer-light'); ?>">        
        
        <?php get_sidebar( 'footer' ); ?>                
        
        <?php if( ut_return_csection_config('ut_show_scroll_up_button' , 'on') == 'on' ) : ?>
        
            <a href="#top" class="toTop"><i class="fa fa-angle-double-up"></i></a>
    	
        <?php endif; ?>        
        
        <div class="footer-content">        
            
            <div class="grid-container">
                
                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                        
                    <div class="copyright"> Ampt Design &copy; <a href="#" class="tooltip" title="Ahead of the Curve!">2017</a> - Expanding your mind through superior Design! </div>
                        
                </div>
                    
            </div><!-- close container -->        
        </div><!-- close footer content -->
        
	</footer><!-- close footer -->
        
   	<?php ut_after_footer_hook(); // action hook, see inc/ut-theme-hooks.php ?>
	
    <?php wp_footer(); ?>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery(".ut-btn").click(function(e) {
        e.preventDefault();
        jQuery("[name='your-subject']").val(jQuery(this).data("target"));
        });
    });
</script> 

<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/ut-portfolio/assets/js/plugins/prettyphoto/jquery.prettyPhoto.js?ver=3.1.6'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/ut-portfolio/assets/js/jquery.scrollTo.js?ver=1.4.6'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/ut-shortcodes/js/tabs.collapse.js?ver=1.0'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/ut-shortcodes/js/jquery.visible.js?ver=1.0'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/ut-shortcodes/js/jquery.appear.js?ver=1.0'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/ut-shortcodes/js/jquery.fitvids.js?ver=1.0.3'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/ut-shortcodes/js/ut.scplugin.js?ver=1.0'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/themes/brooklyn/js/jquery.easing.js?ver=1.3'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/themes/brooklyn/js/superfish.js?ver=1.7.4'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/themes/brooklyn/js/SmoothScroll.js?ver=0.9.9'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/themes/brooklyn/js/retina.js?ver=1.3'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/themes/brooklyn/js/jquery.parallax.js?ver=1.1.3'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/themes/brooklyn/js/jquery.waypoints.js?ver=2.0.5'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/themes/brooklyn/js/ut-init.js?ver=3.3'></script>
<script type='text/javascript' src='http://localhost:35621/wp-includes/js/wp-embed.js?ver=4.4'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/ut-portfolio/assets/js/jquery.isotope.perfectmasonry.js?ver=4.4'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/ut-portfolio/assets/js/jquery.utmasonry.js?ver=3.8.2'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/ut-portfolio/assets/js/ut.effects.js?ver=3.8.2'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/themes/brooklyn/js/sweet-justice.min.js?ver=1.0.0'></script>




<script type="text/javascript">
/* <![CDATA[ */        

// inc/ut-theme-hooks.php
<?php ut_java_footer_hook(); ?> 
      
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-50605466-1', 'amptdesign.com');
ga('send', 'pageview');
     
/* ]]> */
</script>    
    
    </div><!-- close #main-content -->
                                
    </body>
</html>