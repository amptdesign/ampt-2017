<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    
    <?php ut_meta_hook(); //action hook, see inc/ut-theme-hooks.php ?>
        
    <?php if ( defined('WPSEO_VERSION') ) : ?>
		
        <!-- Title -->
        <title><?php wp_title(); ?></title>

	<?php else : ?>
    	
   		<?php ut_meta_theme_hook(); ?>
    
    <?php endif; ?>
    
    <!-- RSS & Pingbacks -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    
    <!-- Favicon -->
	<?php if( ot_get_option( 'ut_favicon' ) ) : ?>
        
        <?php 
        
        /* get icon info */
        $favicon = ot_get_option( 'ut_favicon' );
        $favicon_info = pathinfo( $favicon ); 
        $type = NULL;
        
        if( isset($favicon_info['extension']) && $favicon_info['extension'] == 'png' ) {
            $type = 'type="image/png"';
        }
        
         if( isset($favicon_info['extension']) && $favicon_info['extension'] == 'ico' ) {
            $type = 'type="image/x-icon"';
        }
        
         if( isset($favicon_info['extension']) && $favicon_info['extension'] == 'gif' ) {
            $type = 'type="image/gif"';
        }
        
        ?>
                
        <link rel="shortcut&#x20;icon" href="<?php echo $favicon; ?>" <?php echo $type; ?> />
        <link rel="icon" href="<?php echo $favicon; ?>" <?php echo $type; ?> />
        
    <?php endif; ?>
    
    <!-- Apple Touch Icons -->    
    <?php if( ot_get_option( 'ut_apple_touch_icon_iphone' ) ) :?>
    <link rel="apple-touch-icon" href="<?php echo ot_get_option( 'ut_apple_touch_icon_iphone' ); ?>">
    <?php endif; ?>
    
    <?php if( ot_get_option( 'ut_apple_touch_icon_ipad' ) ) : ?>
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo ot_get_option( 'ut_apple_touch_icon_ipad' ); ?>" />
    <?php endif; ?>
    
    <?php if( ot_get_option( 'ut_apple_touch_icon_iphone_retina' ) ) : ?>
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo ot_get_option( 'ut_apple_touch_icon_iphone_retina' ); ?>" />
    <?php endif; ?>
    
    <?php if( ot_get_option( 'ut_apple_touch_icon_ipad_retina' ) ) :?>
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo ot_get_option( 'ut_apple_touch_icon_ipad_retina' ); ?>" />
    <?php endif; ?>
        
    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
    	
<meta name='robots' content='noindex,follow' />
<link rel="alternate" type="application/rss+xml" title="Ampt Design &raquo; Feed" href="http://localhost:35621/feed/" />
<link rel="alternate" type="application/rss+xml" title="Ampt Design &raquo; Comments Feed" href="http://localhost:35621/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Ampt Design &raquo; Front Page Comments Feed" href="http://localhost:35621/front-page/feed/" />
<script type="text/javascript">
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/localhost:35621\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.5.2"}};
!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;if(!g||!g.fillText)return!1;switch(g.textBaseline="top",g.font="600 32px Arial",a){case"flag":return g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3;case"diversity":return g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,d=c[0]+","+c[1]+","+c[2]+","+c[3],g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e;case"simple":return g.fillText(h(55357,56835),0,0),0!==g.getImageData(16,16,1,1).data[0];case"unicode8":return g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley, img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 .07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
}
</style>
<link rel='stylesheet' id='mediaelement-css'  href='http://localhost:35621/wp-includes/js/mediaelement/mediaelementplayer.min.css?ver=2.18.1' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='http://localhost:35621/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='ut-flexslider-css'  href='http://localhost:35621/wp-content/themes/brooklyn/css/flexslider.min.css?ver=4.5.2' type='text/css' media='all' />
<!-- <link rel='stylesheet' id='ut-portfolio-css'  href='http://localhost:35621/wp-content/themes/brooklyn/css/ut.portfolio.style.min.css?ver=4.5.2' type='text/css' media='all' /> -->
<link rel='stylesheet' id='ut-portfolio-css'  href='http://localhost:35621/wp-content/themes/brooklyn/css/ut.portfolio.style.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='ut-prettyphoto-css'  href='http://localhost:35621/wp-content/plugins/ut-portfolio/assets/css/plugins/prettyphoto/prettyPhoto.min.css?ver=4.5.2' type='text/css' media='all' />
<!-- <link rel='stylesheet' id='ut-fontawesome-css'  href='//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css?ver=4.5.2' type='text/css' media='all' /> -->
<link rel='stylesheet' id='ut-responsive-grid-css'  href='http://localhost:35621/wp-content/plugins/ut-pricing/assets/css/ut-responsive-grid.min.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='ut-table-css'  href='http://localhost:35621/wp-content/themes/brooklyn/css/ut.table.style.min.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='ut-animate-css'  href='http://localhost:35621/wp-content/plugins/ut-shortcodes/css/ut.animate.min.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='ut-elastislide-css'  href='http://localhost:35621/wp-content/themes/brooklyn/css/ut.elastislide.min.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='ut-fancyrotator-css'  href='http://localhost:35621/wp-content/plugins/ut-shortcodes/css/ut.fancyrotator.min.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='ut-shortcodes-css'  href='http://localhost:35621/wp-content/themes/brooklyn/css/ut.shortcode.min.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='ut-twitter-css'  href='http://localhost:35621/wp-content/plugins/ut-twitter/css/ut.twitter.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='http://localhost:35621/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='http://localhost:35621/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.2.3.5' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'> #rs-demo-id {} </style>
<link rel='stylesheet' id='main-font-face-css'  href='http://localhost:35621/wp-content/themes/brooklyn/css/ut-fontface.min.css?ver=4.5.2' type='text/css' media='all' />
<!-- <link rel='stylesheet' id='ut_body_font_type-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A&#038;ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='ut_front_hero_font_type-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A800&#038;ver=4.5.3' type='text/css' media='all' /> -->
<link rel='stylesheet' id='ut-superfish-css'  href='http://localhost:35621/wp-content/themes/brooklyn/css/ut-superfish.min.css?ver=4.5.2' type='text/css' media='all' />
<link rel='stylesheet' id='unitedthemes-style-css'  href='http://localhost:35621/wp-content/themes/brooklyn/style.css?ver=3.3.2' type='text/css' media='all' />
<script type='text/javascript' src='http://localhost:35621/wp-includes/js/jquery/jquery.js?ver=1.12.3'></script>
<script type='text/javascript' src='http://localhost:35621/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.0'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.2.3.5'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.2.3.5'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/ut-portfolio/assets/js/jquery.isotope.min.js?ver=1.8'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/ut-portfolio/assets/js/jquery.lazyload.min.js?ver=1.9.1'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/ut-shortcodes/js/plugins/modernizr/modernizr.min.js?ver=2.6.2'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/ut-shortcodes/js/plugins/flexslider/jquery.flexslider.min.js?ver=4.5.2'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/plugins/ut-shortcodes/js/plugins/elastislider/jquery.elastislide.min.js?ver=4.5.2'></script>
<script type='text/javascript' src='http://localhost:35621/wp-content/themes/brooklyn/js/jquery.queryloader2.min.js?ver=2.9.0'></script>
<link rel='https://api.w.org/' href='http://localhost:35621/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost:35621/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://localhost:35621/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.5.2" />
<link rel="canonical" href="http://localhost:35621/" />
<link rel='shortlink' href='http://localhost:35621/' />
<link rel="alternate" type="application/json+oembed" href="http://localhost:35621/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%3A35621%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://localhost:35621/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%3A35621%2F&#038;format=xml" />
<!-- <link rel="alternate" type="application/rss+xml" title="Ampt Design GeoRSS-Feed" href="http://localhost:35621/wp-content/plugins/leaflet-maps-marker/leaflet-georss.php?layer=all" /> -->

<style type="text/css">
.about-icon,
.themecolor-bg,
.ut-btn.dark:hover,
.ut-btn.ut-pt-btn:hover,
.ut-dropcap-one,
.ut-dropcap-two,
.ut-mobile-menu a:hover,
.ut-skill-overlay,
::selection {
    background: #77be32
}

.ut-glow,
.ut-pt-wrap-style-3 .ut-btn,
.ut-pt-wrap-style-3 .ut-pt-featured-table .ut-btn {
    text-shadow: 0 0 40px #77be32, 2px 2px 3px #000
}

#about .parallax-title,
#about .section-title,
#contact-section .parallax-title,
#cta .parallax-title,
#cta .section-title,
#google-maps .parallax-title,
#google-maps .section-title,
#our-service .parallax-title,
#our-service .section-title,
#our-working-process .parallax-title,
#our-working-process .section-title,
#some-of-the-clients-we-work-with .parallax-title,
#some-of-the-clients-we-work-with .section-title,
#team .parallax-title,
#team .section-title,
#testimonials .parallax-title,
#testimonials .section-title,
#work .parallax-title,
#work .section-title,
.hero-title,
h2 {
    font-weight: 800
}

#some-of-the-clients-we-work-with h2,
.hero-title {
    text-transform: uppercase
}

::-moz-selection {
    background: #77be32
}

.ha-transparent #navigation ul li a:hover,
.ut-language-selector a:hover,
a {
    color: #77be32
}

.ut-custom-icon-link:hover i {
    color: #fbc02d!important
}

#ut-blog-navigation a:hover,
.light .ut-hide-member-details,
.ut-hide-member-details:hover,
.ut-mm-button:hover:before,
.ut-mm-trigger.active .ut-mm-button:before,
.ut-mobile-menu a:after {
    color: #fbc02d
}

#cancel-comment-reply-link,
#secondary a:hover,
.comments-title span,
.copyright a:hover,
.count,
.entry-meta a:hover,
.entry-title span,
.fa-ul li .fa,
.footer-content a:hover,
.footer-content i,
.icons-ul i,
.lead span,
.member-description-style-3 .ut-member-title,
.member-social a:hover,
.page-template-templatestemplate-archive-php a:hover,
.themecolor,
.toTop:hover,
.ut-footer-dark a.toTop:hover,
.ut-header-dark .site-logo .logo a:hover,
.ut-header-light .ut-mm-button:before,
.ut-icon-list i,
.ut-member-style-2 .member-description .ut-member-title,
.ut-parallax-quote-title span,
.ut-rq-icon,
.ut-service-column h3 span,
.ut-social-title,
.ut-twitter-rotator h2 a,
a.more-link:hover,
blockquote span,
h1 a:hover,
h2 a:hover,
h3 a:hover,
h4 a:hover,
h5 a:hover,
h6 a:hover {
    color: #77be32
}

.client-section,
.cta-section,
.ut-btn.theme-btn,
.ut-member-style-2 .ut-so-link:hover,
.ut-portfolio-pagination.style_two a.selected,
.ut-portfolio-pagination.style_two a.selected:hover,
.ut-portfolio-pagination.style_two a:hover,
.ut-pt-featured,
.ut-social-link:hover .ut-social-icon {
    background: #77be32!important
}

#navigation ul.sub-menu,
.ut-hero-style-5 .hero-description,
.ut-member-style-3 .member-social a:hover,
blockquote,
div.wpcf7-validation-errors {
    border-color: #77be32
}

.button,
.dark button,
.dark input[type=submit],
.dark input[type=button],
.light .button,
.light .ut-portfolio-menu.style_two li a.selected:hover,
.light input[type=submit],
.light input[type=button],
.ut-alert.themecolor,
.ut-portfolio-menu.style_two li a.selected,
.ut-portfolio-menu.style_two li a:hover,
input[type=submit],
input[type=button],
ins,
mark {
    background: #77be32
}

.light .ut-accordion-heading a:hover,
.light .ut-nav-tabs li a:hover,
.light .ut-portfolio-menu li a:hover,
.light .ut-portfolio-pagination a:hover,
.ut-custom-icon a:hover i:first-child,
.ut-portfolio-list li strong,
.ut-pt-featured-table .ut-pt-info .fa-li {
    color: #77be32!important
}

.img-hover,
.portfolio-caption {
    background: #77be32;
    background: rgba(119, 190, 50, .85)
}

.team-member-details {
    background: rgba(119, 190, 50, .85)
}

.ut-avatar-overlay {
    background: #77be32;
    background: rgba(119, 190, 50, .85)
}

.format-link .entry-header a,
.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,
.mejs-controls .mejs-time-rail .mejs-time-current {
    background: #77be32!important
}

.light .ut-accordion-heading a:hover,
.light .ut-nav-tabs li a:hover,
.light .ut-portfolio-menu li a:hover,
.light .ut-portfolio-pagination a:hover {
    border-color: #77be32!important
}

.ut-gallery-slider .flex-direction-nav a,
.ut-portfolio-gallery-slider .flex-direction-nav a,
.ut-rotate-quote .flex-direction-nav a,
.ut-rotate-quote-alt .flex-direction-nav a {
    background: #77be32;
    background: rgba(119, 190, 50, .85)
}

.light .ut-bs-wrap .entry-title a:hover,
.light .ut-bs-wrap a:hover .entry-title,
.ut-footer-area ul.sidebar a:hover,
.ut-rated i {
    color: #77be32
}

.ut-footer-dark .ut-footer-area .widget_tag_cloud a:hover {
    color: #77be32!important;
    border-color: #77be32
}

.elastislide-wrapper nav span:hover {
    border-color: #77be32;
    color: #77be32
}

.ut-footer-so li a:hover {
    border-color: #77be32
}

.ut-footer-so li a:hover i {
    color: #77be32!important
}

.ut-pt-wrap.ut-pt-wrap-style-2 .ut-pt-featured-table .ut-pt-header {
    background: #77be32
}

.ut-pt-wrap-style-3 .ut-btn.ut-pt-btn,
.ut-pt-wrap-style-3 .ut-custom-row,
.ut-pt-wrap-style-3 .ut-pt-featured-table .ut-btn,
.ut-pt-wrap-style-3 .ut-pt-header,
.ut-pt-wrap-style-3 .ut-pt-info ul,
.ut-pt-wrap-style-3 .ut-pt-info ul li {
    border-color: rgba(119, 190, 50, .1)
}

.ut-pt-wrap-style-3 .ut-btn,
.ut-pt-wrap-style-3 .ut-pt-featured-table .ut-btn {
    color: #77be32!important
}

.ut-pt-wrap-style-3 .ut-pt-featured-table .ut-pt-title {
    color: #77be32!important;
    text-shadow: 0 0 40px #77be32, 2px 2px 3px #000
}

.ut-glow {
    color: #77be32
}

.light .ut-shortcode-video-wrap .ut-video-caption {
    border-color: rgba(119, 190, 50, 1)
}

.light .ut-shortcode-video-wrap .ut-video-caption i {
    border-color: rgba(119, 190, 50, .3);
    color: rgba(119, 190, 50, .3)
}

.light .ut-shortcode-video-wrap .ut-video-caption:hover i,
.light .ut-video-caption-text {
    border-color: rgba(119, 190, 50, 1)
}

.light .ut-shortcode-video-wrap .ut-video-caption:hover i,
.light .ut-video-loading {
    color: #77be32!important;
    text-shadow: 0 0 40px #77be32, 2px 2px 3px #000
}

.js #main-content section .section-content,
.js #main-content section .section-header-holder {
    opacity: 0
}

#navigation {
    font-family: ralewaysemibold, Helvetica, Arial, sans-serif!important
}

#navigation .selected,
#navigation li a:hover,
#navigation ul li a:hover,
#navigation ul li.current-menu-ancestor a.active,
#navigation ul li.current_page_parent a.active,
#navigation ul.sub-menu li a:hover {
    color: #77be32
}

#navigation ul.sub-menu li>a {
    color: #999;
    border: 1px bottom
}

#navigation ul li.current-menu-item:not(.current_page_parent) a,
#navigation ul li.current_page_item:not(.current_page_parent) a {
    color: #77be32
}

#navigation ul li.current-menu-item:not(.current_page_parent) .sub-menu li a {
    color: #999
}

.ut-header-dark #navigation .selected,
.ut-header-dark #navigation li a:hover,
.ut-header-dark #navigation ul li a:hover,
.ut-header-dark #navigation ul li.current-menu-ancestor a.active,
.ut-header-dark #navigation ul li.current_page_parent a.active,
.ut-header-dark #navigation ul.sub-menu li a:hover {
    color: #77be32
}

.ut-header-dark #navigation ul.sub-menu li>a {
    color: #999
}

.ut-header-dark #navigation ul li.current-menu-item:not(.current_page_parent) a,
.ut-header-dark #navigation ul li.current_page_item:not(.current_page_parent) a {
    color: #77be32
}

.ut-header-dark #navigation ul li.current-menu-item:not(.current_page_parent) .sub-menu li a {
    color: #999
}

.ut-loader-overlay {
    background: #fff
}

.hero-title span:not(.ut-word-rotator) {
    color: #77be32!important
}

.hero-title.ut-glow span {
    text-shadow: 0 0 40px #77be32, 2px 2px 3px #000
}

body {
    font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif!important
}

#contact-section .parallax-title,
.hero-title,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
}

.pt-style-2 .page-title:after,
.pt-style-2 .parallax-title:after,
.pt-style-2 .section-title:after {
    background-color: #222;
    height: 1px;
    width: 30px
}

.lg-progress-bar .lg-progress {
    background-color: #77be32
}

.lg-outer .lg-thumb-item.active,
.lg-outer .lg-thumb-item:hover {
    border-color: #77be32
}

.hero .parallax-overlay {
    background-color: rgba(44, 62, 80, .1)
}

#contact-section .parallax-title {
    color: #77BE32
}

#contact-section .pt-style-6 .page-title:after,
#contact-section .pt-style-6 .parallax-title:after,
#contact-section .pt-style-6 .section-title:after {
    border-bottom: 1px dotted #77BE32
}

#contact-section .parallax-title span span {
    color: #77be32
}

@media screen and (min-width:1025px) {
    #contact-section .ut-left-footer-area {
        margin: 0 0 0 16%
    }
    #contact-section .ut-right-footer-area {
        margin: 0 11% 0 0
    }
}

#contact-section .ut-left-footer-area {
    background: rgba(255, 255, 255, 1)
}

#contact-section .parallax-overlay {
    background: rgba(255, 255, 255, 1);
    padding-top: 60px;
    padding-bottom: 120px
}

#contact-section .ut-offset-anchor {
    top: -79px
}

.copyright {
    font-family: ralewaysemibold, Helvetica, Arial, sans-serif!important
}

#about .parallax-title,
#about .section-title,
#cta .parallax-title,
#cta .section-title,
#our-service .parallax-title,
#our-service .section-title,
#our-working-process .parallax-title,
#our-working-process .section-title,
#some-of-the-clients-we-work-with .parallax-title,
#some-of-the-clients-we-work-with .section-title,
#team .parallax-title,
#team .section-title,
#testimonials .parallax-title,
#testimonials .section-title,
#work .parallax-title,
#work .section-title,
.lead,
.taxonomy-description,
blockquote {
    font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
}

#ut-loader-logo {
    background-image: url(http://localhost:35621/wp-content/uploads/2016/07/ampt-logo-2017.png);
    background-position: center center;
    background-repeat: no-repeat
}

#about {
    padding-top: 40px;
    padding-bottom: 60px
}

#about .ut-offset-anchor {
    top: -119px
}

#about .parallax-header {
    padding-bottom: 30px
}

#about .section-header {
    padding-bottom: 25px!important
}

#about,
#about .section-header.pt-style-1 .section-title span {
    background-color: #FFF
}

#some-of-the-clients-we-work-with .parallax-overlay {
    padding-top: 80px;
    padding-bottom: 60px;
    background-color: #2c3e50;
    background-color: rgba(44, 62, 80, .3)
}

#some-of-the-clients-we-work-with .ut-offset-anchor {
    top: -79px
}

#some-of-the-clients-we-work-with .parallax-header,
#some-of-the-clients-we-work-with .section-header {
    padding-bottom: 30px
}

#some-of-the-clients-we-work-with .parallax-scroll-container {
    background-repeat: no-repeat!important;
    background-size: cover!important;
    background-image: url(http://localhost:35621/wp-content/uploads/2016/07/s1.jpg)
}

#our-service {
    padding-top: 80px;
    padding-bottom: 40px
}

#our-service .ut-offset-anchor {
    top: -159px
}

#our-service .parallax-header,
#our-service .section-header {
    padding-bottom: 30px
}

#our-service,
#our-service .section-header.pt-style-1 .section-title span {
    background-color: #FFF
}

#our-philosophy-is .parallax-overlay {
    padding-top: 160px;
    padding-bottom: 120px;
    background-color: #77be32;
    background-color: rgba(119, 190, 50, .9)
}

#cta,
#google-maps,
#our-working-process,
#team,
#work {
    padding-top: 80px
}

#our-philosophy-is .ut-offset-anchor {
    top: -79px
}

#cta .ut-offset-anchor,
#our-working-process .ut-offset-anchor,
#team .ut-offset-anchor,
#work .ut-offset-anchor {
    top: -159px
}

#our-philosophy-is .parallax-header,
#our-philosophy-is .section-header {
    padding-bottom: 30px
}

#our-philosophy-is .parallax-title,
#our-philosophy-is .section-title {
    font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: 800
}

#our-philosophy-is .parallax-scroll-container {
    background-repeat: no-repeat!important;
    background-size: cover!important;
    background-image: url(http://localhost:35621/wp-content/uploads/2016/07/b1.jpg)
}

#our-working-process {
    padding-bottom: 60px
}

#our-working-process .parallax-header,
#our-working-process .section-header {
    padding-bottom: 30px
}

#our-working-process,
#our-working-process .section-header.pt-style-1 .section-title span {
    background-color: #F9F9F9
}

#work {
    padding-bottom: 0
}

#work .parallax-header,
#work .section-header {
    padding-bottom: 30px
}

#work,
#work .section-header.pt-style-1 .section-title span {
    background-color: #FFF
}

#cta {
    padding-bottom: 60px
}

#cta .parallax-header,
#cta .section-header {
    padding-bottom: 30px
}

#cta,
#cta .section-header.pt-style-1 .section-title span {
    background-color: #F5F5F5
}

#team {
    padding-bottom: 60px
}

#team .parallax-header,
#team .section-header {
    padding-bottom: 30px
}

#team,
#team .section-header.pt-style-1 .section-title span {
    background-color: #FFF
}

#testimonials .parallax-overlay {
    padding-top: 80px;
    padding-bottom: 60px;
    background-color: #2c3e50;
    background-color: rgba(44, 62, 80, .3)
}

#testimonials .ut-offset-anchor {
    top: -79px
}

#testimonials .parallax-header,
#testimonials .section-header {
    padding-bottom: 30px
}

#testimonials .parallax-scroll-container {
    background-size: cover!important;
    background-image: url(http://localhost:35621/wp-content/uploads/2016/07/p8.jpg)
}

#brands {
    padding-top: 20px;
    padding-bottom: 20px
}

#brands .ut-offset-anchor {
    top: -99px
}

#brands .parallax-header,
#brands .section-header {
    padding-bottom: 30px
}

#brands .parallax-title,
#brands .section-title {
    font-family: ralewayextralight, "Helvetica Neue", Helvetica, Arial, sans-serif
}

#brands,
#brands .section-header.pt-style-1 .section-title span {
    background-color: #77BE32
}

#google-maps {
    padding-bottom: 0
}

#google-maps .ut-offset-anchor {
    top: -159px
}

#google-maps .parallax-header,
#google-maps .section-header {
    padding-bottom: 30px
}

#google-maps .parallax-title,
#google-maps .section-title {
    font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
}

.parallax-overlay-pattern.style_one {
    background-image: url(http://localhost:35621/wp-content/themes/brooklyn/images/overlay-pattern.png)!important
}

.parallax-overlay-pattern.style_two {
    background-image: url(http://localhost:35621/wp-content/themes/brooklyn/images/overlay-pattern2.png)!important
}

.ut-rotate-quote .ut-quote-comment,
.ut-rotate-quote-alt .ut-quote-comment {
    font-size: 22px;
    text-transform: uppercase
}

.hero-title span {
    font-weight: inherit
}

.contact-us-txt b,
.subtit b {
    font-weight: 800
}

.subtit {
    margin: 0!important;
    padding: 0!important;
    font-size: 14pt!important;
    line-height: 22pt!important;
    color: #585858
}

.subtit b {
    color: #333;
    font-size: 15pt;
    letter-spacing: 0;
    text-transform: capitalize
}

.contact-us-txt {
    color: #333;
    font-size: 18px;
    font-height: 23px!important
}

.ppt {
    display: none!important
}

.pp_description {
    font-family: abeatbykai!important;
    font-size: 18px!important;
    font-weight: 400!important;
    line-height: 20px!important;
    color: #000!important;
    letter-spacing: 2px;
    word-spacing: 2px!important;
    background: rgba(255, 181, 0, .71);
    padding: 13px;
    margin: 15px!important;
    border-radius: 5px
}

.ut-btn {
    background: #fff!important
}

.ut-btn:hover {
    border: 2px solid #fbc02d!important
}

.ut-btn.medium:hover {
    color: #fbc02d!important;
    font-size: 11pt!important
}

h3 {
    text-transform: uppercase;
    text-align: center!important
}

::-webkit-input-placeholder {
    color: #666;
    font-size: 1.1em;
    text-transform: uppercase
}

::-moz-placeholder {
    color: #666;
    font-size: 1.1em;
    text-transform: uppercase
}

::-ms-placeholder {
    color: #666;
    font-size: 1.1em;
    text-transform: uppercase
}

::placeholder {
    color: #666;
    font-size: 1.1em;
    text-transform: uppercase
}

textarea::-webkit-input-placeholder {
    color: #666;
    font-size: 1.3em;
    text-transform: uppercase;
    letter-spacing: .8px
}

textarea:-moz-placeholder {
    color: #666;
    font-size: 1.3em;
    text-transform: uppercase;
    letter-spacing: .8px
}

.about-icon,.themecolor-bg,.ut-btn.dark:hover,.ut-btn.ut-pt-btn:hover,.ut-dropcap-one,.ut-dropcap-two,.ut-mobile-menu a:hover,.ut-skill-overlay,::selection{background:#77be32}.ut-glow,.ut-pt-wrap-style-3 .ut-btn,.ut-pt-wrap-style-3 .ut-pt-featured-table .ut-btn{text-shadow:0 0 40px #77be32,2px 2px 3px #000}#about .parallax-title,#about .section-title,#contact-section .parallax-title,#cta .parallax-title,#cta .section-title,#google-maps .parallax-title,#google-maps .section-title,#our-service .parallax-title,#our-service .section-title,#our-working-process .parallax-title,#our-working-process .section-title,#some-of-the-clients-we-work-with .parallax-title,#some-of-the-clients-we-work-with .section-title,#team .parallax-title,#team .section-title,#testimonials .parallax-title,#testimonials .section-title,#work .parallax-title,#work .section-title,.hero-title,h2{font-weight:800}#some-of-the-clients-we-work-with h2,.hero-title{text-transform:uppercase}::-moz-selection{background:#77be32}.ha-transparent #navigation ul li a:hover,.ut-language-selector a:hover,a{color:#77be32}.ut-custom-icon-link:hover i{color:#fbc02d!important}#ut-blog-navigation a:hover,.light .ut-hide-member-details,.ut-hide-member-details:hover,.ut-mm-button:hover:before,.ut-mm-trigger.active .ut-mm-button:before,.ut-mobile-menu a:after{color:#fbc02d}#cancel-comment-reply-link,#secondary a:hover,.comments-title span,.copyright a:hover,.count,.entry-meta a:hover,.entry-title span,.fa-ul li .fa,.footer-content a:hover,.footer-content i,.icons-ul i,.lead span,.member-description-style-3 .ut-member-title,.member-social a:hover,.page-template-templatestemplate-archive-php a:hover,.themecolor,.toTop:hover,.ut-footer-dark a.toTop:hover,.ut-header-dark .site-logo .logo a:hover,.ut-header-light .ut-mm-button:before,.ut-icon-list i,.ut-member-style-2 .member-description .ut-member-title,.ut-parallax-quote-title span,.ut-rq-icon,.ut-service-column h3 span,.ut-social-title,.ut-twitter-rotator h2 a,a.more-link:hover,blockquote span,h1 a:hover,h2 a:hover,h3 a:hover,h4 a:hover,h5 a:hover,h6 a:hover{color:#77be32}.client-section,.cta-section,.ut-btn.theme-btn,.ut-member-style-2 .ut-so-link:hover,.ut-portfolio-pagination.style_two a.selected,.ut-portfolio-pagination.style_two a.selected:hover,.ut-portfolio-pagination.style_two a:hover,.ut-pt-featured,.ut-social-link:hover .ut-social-icon{background:#77be32!important}#navigation ul.sub-menu,.ut-hero-style-5 .hero-description,.ut-member-style-3 .member-social a:hover,blockquote,div.wpcf7-validation-errors{border-color:#77be32}.button,.dark button,.dark input[type=submit],.dark input[type=button],.light .button,.light .ut-portfolio-menu.style_two li a.selected:hover,.light input[type=submit],.light input[type=button],.ut-alert.themecolor,.ut-portfolio-menu.style_two li a.selected,.ut-portfolio-menu.style_two li a:hover,input[type=submit],input[type=button],ins,mark{background:#77be32}.light .ut-accordion-heading a:hover,.light .ut-nav-tabs li a:hover,.light .ut-portfolio-menu li a:hover,.light .ut-portfolio-pagination a:hover,.ut-custom-icon a:hover i:first-child,.ut-portfolio-list li strong,.ut-pt-featured-table .ut-pt-info .fa-li{color:#77be32!important}.img-hover,.portfolio-caption{background:#77be32;background:rgba(119,190,50,.85)}.team-member-details{background:rgba(119,190,50,.85)}.ut-avatar-overlay{background:#77be32;background:rgba(119,190,50,.85)}.format-link .entry-header a,.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,.mejs-controls .mejs-time-rail .mejs-time-current{background:#77be32!important}.light .ut-accordion-heading a:hover,.light .ut-nav-tabs li a:hover,.light .ut-portfolio-menu li a:hover,.light .ut-portfolio-pagination a:hover{border-color:#77be32!important}.ut-gallery-slider .flex-direction-nav a,.ut-portfolio-gallery-slider .flex-direction-nav a,.ut-rotate-quote .flex-direction-nav a,.ut-rotate-quote-alt .flex-direction-nav a{background:#77be32;background:rgba(119,190,50,.85)}.light .ut-bs-wrap .entry-title a:hover,.light .ut-bs-wrap a:hover .entry-title,.ut-footer-area ul.sidebar a:hover,.ut-rated i{color:#77be32}.ut-footer-dark .ut-footer-area .widget_tag_cloud a:hover{color:#77be32!important;border-color:#77be32}.elastislide-wrapper nav span:hover{border-color:#77be32;color:#77be32}.ut-footer-so li a:hover{border-color:#77be32}.ut-footer-so li a:hover i{color:#77be32!important}.ut-pt-wrap.ut-pt-wrap-style-2 .ut-pt-featured-table .ut-pt-header{background:#77be32}.ut-pt-wrap-style-3 .ut-btn.ut-pt-btn,.ut-pt-wrap-style-3 .ut-custom-row,.ut-pt-wrap-style-3 .ut-pt-featured-table .ut-btn,.ut-pt-wrap-style-3 .ut-pt-header,.ut-pt-wrap-style-3 .ut-pt-info ul,.ut-pt-wrap-style-3 .ut-pt-info ul li{border-color:rgba(119,190,50,.1)}.ut-pt-wrap-style-3 .ut-btn,.ut-pt-wrap-style-3 .ut-pt-featured-table .ut-btn{color:#77be32!important}.ut-pt-wrap-style-3 .ut-pt-featured-table .ut-pt-title{color:#77be32!important;text-shadow:0 0 40px #77be32,2px 2px 3px #000}.ut-glow{color:#77be32}.light .ut-shortcode-video-wrap .ut-video-caption{border-color:rgba(119,190,50,1)}.light .ut-shortcode-video-wrap .ut-video-caption i{border-color:rgba(119,190,50,.3);color:rgba(119,190,50,.3)}.light .ut-shortcode-video-wrap .ut-video-caption:hover i,.light .ut-video-caption-text{border-color:rgba(119,190,50,1)}.light .ut-shortcode-video-wrap .ut-video-caption:hover i,.light .ut-video-loading{color:#77be32!important;text-shadow:0 0 40px #77be32,2px 2px 3px #000}.js #main-content section .section-content,.js #main-content section .section-header-holder{opacity:0}#navigation{font-family:ralewaysemibold,Helvetica,Arial,sans-serif!important}#navigation .selected,#navigation li a:hover,#navigation ul li a:hover,#navigation ul li.current-menu-ancestor a.active,#navigation ul li.current_page_parent a.active,#navigation ul.sub-menu li a:hover{color:#77be32}#navigation ul.sub-menu li>a{color:#999;border:1px bottom}#navigation ul li.current-menu-item:not(.current_page_parent) a,#navigation ul li.current_page_item:not(.current_page_parent) a{color:#77be32}#navigation ul li.current-menu-item:not(.current_page_parent) .sub-menu li a{color:#999}.ut-header-dark #navigation .selected,.ut-header-dark #navigation li a:hover,.ut-header-dark #navigation ul li a:hover,.ut-header-dark #navigation ul li.current-menu-ancestor a.active,.ut-header-dark #navigation ul li.current_page_parent a.active,.ut-header-dark #navigation ul.sub-menu li a:hover{color:#77be32}.ut-header-dark #navigation ul.sub-menu li>a{color:#999}.ut-header-dark #navigation ul li.current-menu-item:not(.current_page_parent) a,.ut-header-dark #navigation ul li.current_page_item:not(.current_page_parent) a{color:#77be32}.ut-header-dark #navigation ul li.current-menu-item:not(.current_page_parent) .sub-menu li a{color:#999}.ut-loader-overlay{background:#fff}.hero-title span:not(.ut-word-rotator){color:#77be32!important}.hero-title.ut-glow span{text-shadow:0 0 40px #77be32,2px 2px 3px #000}body{font-family:"Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif!important}#contact-section .parallax-title,.hero-title,h1,h2,h3,h4,h5,h6{font-family:"Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif}.pt-style-2 .page-title:after,.pt-style-2 .parallax-title:after,.pt-style-2 .section-title:after{background-color:#222;height:1px;width:30px}.lg-progress-bar .lg-progress{background-color:#77be32}.lg-outer .lg-thumb-item.active,.lg-outer .lg-thumb-item:hover{border-color:#77be32}.hero .parallax-overlay{background-color:rgba(44,62,80,.1)}#contact-section .parallax-title{color:#77BE32}#contact-section .pt-style-6 .page-title:after,#contact-section .pt-style-6 .parallax-title:after,#contact-section .pt-style-6 .section-title:after{border-bottom:1px dotted #77BE32}#contact-section .parallax-title span span{color:#77be32}@media screen and (min-width:1025px){#contact-section .ut-left-footer-area{margin:0 0 0 16%}#contact-section .ut-right-footer-area{margin:0 11% 0 0}}#contact-section .ut-left-footer-area{background:rgba(255,255,255,1)}#contact-section .parallax-overlay{background:rgba(255,255,255,1);padding-top:60px;padding-bottom:120px}#contact-section .ut-offset-anchor{top:-79px}.copyright{font-family:ralewaysemibold,Helvetica,Arial,sans-serif!important}#about .parallax-title,#about .section-title,#cta .parallax-title,#cta .section-title,#our-service .parallax-title,#our-service .section-title,#our-working-process .parallax-title,#our-working-process .section-title,#some-of-the-clients-we-work-with .parallax-title,#some-of-the-clients-we-work-with .section-title,#team .parallax-title,#team .section-title,#testimonials .parallax-title,#testimonials .section-title,#work .parallax-title,#work .section-title,.lead,.taxonomy-description,blockquote{font-family:"Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif}#ut-loader-logo{background-image:url(http://localhost:35621/wp-content/uploads/2016/07/ampt-logo-2017.png);background-position:center center;background-repeat:no-repeat}#about{padding-top:40px;padding-bottom:60px}#about .ut-offset-anchor{top:-119px}#about .parallax-header{padding-bottom:30px}#about .section-header{padding-bottom:25px!important}#about,#about .section-header.pt-style-1 .section-title span{background-color:#FFF}#some-of-the-clients-we-work-with .parallax-overlay{padding-top:80px;padding-bottom:60px;background-color:#2c3e50;background-color:rgba(44,62,80,.3)}#some-of-the-clients-we-work-with .ut-offset-anchor{top:-79px}#some-of-the-clients-we-work-with .parallax-header,#some-of-the-clients-we-work-with .section-header{padding-bottom:30px}#some-of-the-clients-we-work-with .parallax-scroll-container{background-repeat:no-repeat!important;background-size:cover!important;background-image:url(http://localhost:35621/wp-content/uploads/2016/07/s1.jpg)}#our-service{padding-top:80px;padding-bottom:40px}#our-service .ut-offset-anchor{top:-159px}#our-service .parallax-header,#our-service .section-header{padding-bottom:30px}#our-service,#our-service .section-header.pt-style-1 .section-title span{background-color:#FFF}#our-philosophy-is .parallax-overlay{padding-top:160px;padding-bottom:120px;background-color:#77be32;background-color:rgba(119,190,50,.9)}#cta,#google-maps,#our-working-process,#team,#work{padding-top:80px}#our-philosophy-is .ut-offset-anchor{top:-79px}#cta .ut-offset-anchor,#our-working-process .ut-offset-anchor,#team .ut-offset-anchor,#work .ut-offset-anchor{top:-159px}#our-philosophy-is .parallax-header,#our-philosophy-is .section-header{padding-bottom:30px}#our-philosophy-is .parallax-title,#our-philosophy-is .section-title{font-family:"Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:800}#our-philosophy-is .parallax-scroll-container{background-repeat:no-repeat!important;background-size:cover!important;background-image:url(http://localhost:35621/wp-content/uploads/2016/07/b1.jpg)}#our-working-process{padding-bottom:60px}#our-working-process .parallax-header,#our-working-process .section-header{padding-bottom:30px}#our-working-process,#our-working-process .section-header.pt-style-1 .section-title span{background-color:#F9F9F9}#work{padding-bottom:0}#work .parallax-header,#work .section-header{padding-bottom:30px}#work,#work .section-header.pt-style-1 .section-title span{background-color:#FFF}#cta{padding-bottom:60px}#cta .parallax-header,#cta .section-header{padding-bottom:30px}#cta,#cta .section-header.pt-style-1 .section-title span{background-color:#F5F5F5}#team{padding-bottom:60px}#team .parallax-header,#team .section-header{padding-bottom:30px}#team,#team .section-header.pt-style-1 .section-title span{background-color:#FFF}#testimonials .parallax-overlay{padding-top:80px;padding-bottom:60px;background-color:#2c3e50;background-color:rgba(44,62,80,.3)}#testimonials .ut-offset-anchor{top:-79px}#testimonials .parallax-header,#testimonials .section-header{padding-bottom:30px}#testimonials .parallax-scroll-container{background-size:cover!important;background-image:url(http://localhost:35621/wp-content/uploads/2016/07/p8.jpg)}#brands{padding-top:20px;padding-bottom:20px}#brands .ut-offset-anchor{top:-99px}#brands .parallax-header,#brands .section-header{padding-bottom:30px}#brands .parallax-title,#brands .section-title{font-family:ralewayextralight,"Helvetica Neue",Helvetica,Arial,sans-serif}#brands,#brands .section-header.pt-style-1 .section-title span{background-color:#77BE32}#google-maps{padding-bottom:0}#google-maps .ut-offset-anchor{top:-159px}#google-maps .parallax-header,#google-maps .section-header{padding-bottom:30px}#google-maps .parallax-title,#google-maps .section-title{font-family:"Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif}.parallax-overlay-pattern.style_one{background-image:url(http://localhost:35621/wp-content/themes/brooklyn/images/overlay-pattern.png)!important}.parallax-overlay-pattern.style_two{background-image:url(http://localhost:35621/wp-content/themes/brooklyn/images/overlay-pattern2.png)!important}.ut-rotate-quote .ut-quote-comment,.ut-rotate-quote-alt .ut-quote-comment{font-size:22px;text-transform:uppercase}.hero-title span{font-weight:inherit}.contact-us-txt b,.subtit b{font-weight:800}.subtit{margin:0!important;padding:0!important;font-size:14pt!important;line-height:22pt!important;color:#585858}.subtit b{color:#333;font-size:15pt;letter-spacing:0;text-transform:capitalize}.contact-us-txt{color:#333;font-size:18px;font-height:23px!important}.ppt{display:none!important}.pp_description{font-family:abeatbykai!important;font-size:18px!important;font-weight:400!important;line-height:20px!important;color:#000!important;letter-spacing:2px;word-spacing:2px!important;background:rgba(255,181,0,.71);padding:13px;margin:15px!important;border-radius:5px}.ut-btn{background:#fff!important}.ut-btn:hover{border:2px solid #fbc02d!important}.ut-btn.medium:hover{color:#fbc02d!important;font-size:11pt!important}h3{text-transform:uppercase;text-align:center!important}::-webkit-input-placeholder{color:#666;font-size:1.1em;text-transform:uppercase}::-moz-placeholder{color:#666;font-size:1.1em;text-transform:uppercase}::-ms-placeholder{color:#666;font-size:1.1em;text-transform:uppercase}::placeholder{color:#666;font-size:1.1em;text-transform:uppercase}textarea::-webkit-input-placeholder{color:#666;font-size:1.3em;text-transform:uppercase;letter-spacing:.8px}textarea:-moz-placeholder{color:#666;font-size:1.3em;text-transform:uppercase;letter-spacing:.8px}
.service-icon-title {color:#77BE32!important;}
.ut-service-icon-box-content h3.service-icon-title {color:#000!important;}
.serv-title {color:#fff!important;}
</style>


<meta name="generator" content="Powered by Slider Revolution 5.2.5.4 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." /> 
</head>

<?php 

/*
|--------------------------------------------------------------------------
| Needed Settings
|--------------------------------------------------------------------------
*/

$scrollto 		= ot_get_option('ut_scrollto_effect');
$scrollto 		= !empty( $scrollto['easing'] ) ? $scrollto['easing'] : 'linear' ;
$scrollspeed 	= ot_get_option('ut_scrollto_speed'  , '650'); 

$ut_site_border_body_class = ot_get_option( 'ut_site_border', 'hide' ) == 'show' ? 'ut-site-border' : '';
$ut_site_top_header_body_class = ot_get_option( 'ut_top_header', 'hide' ) == 'show' ? 'ut-has-top-header' : '';
$ut_site_border_header_class = ot_get_option( 'ut_site_border', 'hide' ) == 'show' ? 'bordered-navigation' : '';
$ut_top_header_class = ot_get_option( 'ut_top_header' , 'hide' ) == 'show' ? 'bordered-top' : '';

?>

<body id="ut-sitebody" <?php body_class( $ut_site_border_body_class . ' ' .  $ut_site_top_header_body_class ); ?> data-scrolleffect="<?php echo $scrollto; ?>" data-scrollspeed="<?php echo $scrollspeed; ?>">

<a class="ut-offset-anchor" id="top" style="top:0px !important;"></a>

<?php 

/*
|--------------------------------------------------------------------------
| Pre Loader Overlay
|--------------------------------------------------------------------------
*/

if( ot_get_option('ut_use_image_loader') == 'on' ) : 
	
	if( ut_dynamic_conditional('ut_use_image_loader_on') ) : ?>
	
	<div class="ut-loader-overlay"></div>

	<?php endif; ?>

<?php endif; ?>


<?php ut_before_header_hook(); // action hook, see inc/ut-theme-hooks.php ?> 


<?php

/*
|--------------------------------------------------------------------------
| Navigation Setting
|--------------------------------------------------------------------------
*/

/* skin */
$ut_navigation_skin = ot_get_option('ut_navigation_skin' , 'ut-header-light');

/* visibility */
$headerstate = NULL;

if( is_home() || is_front_page() || is_singular('portfolio') || get_post_meta( get_the_ID() , 'ut_activate_page_hero' , true ) == 'on' ) {
	
	if( ot_get_option('ut_navigation_state' , 'off') == 'off' ) { $headerstate = 'ha-header-hide';}

}

/* width */
$navigation_width = ot_get_option('ut_navigation_width' , 'centered');
$logo_push = ( $navigation_width == 'fullwidth' ) ? 'push-5' : '';
$navigation_pull = ( $navigation_width == 'fullwidth' ) ? 'pull-5' : '';
			
/* main navigation settings*/
$mainmenu = array('echo'             => false,
                  'container'        => 'nav',
                  'container_id'     => 'navigation',
                  'fallback_cb' 	 => 'ut_default_menu',
                  'container_class'  => 'grid-80 hide-on-tablet hide-on-mobile ' . $navigation_pull ,
                  'items_wrap'       => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'theme_location'   => 'primary', 
                  'walker'           => new ut_menu_walker()
);

/* mobile navigation settings */						 
$mobilemenu = array('echo'              => false,
                    'container'        	=> 'nav',
                    'container_id'    	=> 'ut-mobile-nav',
                    'menu_id'		   	=> 'ut-mobile-menu',
                    'menu_class'	   	=> 'ut-mobile-menu',
                    'fallback_cb' 	   	=> 'ut_default_menu',
                    'container_class'  	=> 'ut-mobile-menu mobile-grid-100 tablet-grid-100 hide-on-desktop',
                    'items_wrap'       	=> '<div class="ut-scroll-pane"><ul id="%1$s" class="%2$s">%3$s</ul></div>',
                    'theme_location'   	=> 'primary', 
                    'walker'           	=> new ut_menu_walker()
);

/* check if current page has an option tp show a hero */
$ut_activate_page_hero = get_post_meta( get_the_ID() , 'ut_activate_page_hero' , true );                    				

?>

<?php get_template_part( 'partials/top', 'header' ); ?> 

<!-- header section -->
<header id="header-section" class="ha-header <?php echo $ut_site_border_header_class; ?> <?php echo $ut_top_header_class; ?> <?php echo $navigation_width; ?> <?php echo ( ot_get_option('ut_navigation_state' , 'off') == 'on_transparent' && ( is_home() || is_front_page() || is_singular('portfolio') || ( is_page() && $ut_activate_page_hero == 'on' ) ) ) ? 'ha-transparent' : $ut_navigation_skin; ?> <?php echo $headerstate; ?>">
            
    <?php if( $navigation_width == 'centered' ) :?>
    
    <div class="grid-container">
    
	<?php endif; ?>	
        
        <div class="ha-header-perspective">
        	<div class="ha-header-front">
            	
                <div class="grid-20 tablet-grid-50 mobile-grid-50 <?php echo $logo_push; ?>">
                
					<?php if ( get_theme_mod( 'ut_site_logo' ) ) : ?>
                        
                        <?php 
                        
                        $sitelogo = !is_front_page() && !is_home() && ( $ut_activate_page_hero == 'off' || empty($ut_activate_page_hero) ) ? get_theme_mod( 'ut_site_logo_alt' ) : get_theme_mod( 'ut_site_logo' );                        
                        
                        $alternate_logo = get_theme_mod( 'ut_site_logo_alt' ) ? get_theme_mod( 'ut_site_logo_alt' ) : get_theme_mod( 'ut_site_logo' ) ;?>
                        
                        <div class="site-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img data-altlogo="<?php echo $alternate_logo; ?>" src="<?php echo $sitelogo; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
                        </div>
                        
                    <?php else : ?>
                    
                    	<div class="site-logo">
                        	<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        </div>
                        
                    <?php endif; ?>             	
                
                </div>    
                
                <?php if ( has_nav_menu( 'primary' ) ) : ?>

					<?php echo wp_nav_menu( $mainmenu ); ?>
                    
                    <div class="ut-mm-trigger tablet-grid-50 mobile-grid-50 hide-on-desktop">
                    	<button class="ut-mm-button"></button>
                    </div>
                    
					<?php echo wp_nav_menu( $mobilemenu ); ?>
                                        
                <?php endif; ?>
                                                        
                </div>
            </div><!-- close .ha-header-perspective -->
    
	<?php if( $navigation_width == 'centered') :?>        
	
    </div> 
    
    <?php endif; ?>
    
</header><!-- close header -->

<div class="clear"></div>

<?php get_template_part( 'template-part', 'hero' ); ?>       

<?php ut_before_content_hook(); // action hook, see inc/ut-theme-hooks.php ?>

<div id="main-content" class="wrap ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-small">
	
    <a class="ut-offset-anchor" id="to-main-content"></a>
		
        <div class="main-content-background">