/* Table of Content
==================================================
	
	# Global Portfolio Styles
	# Portfolio Carousel
	# Portfolio Showcase
	# Grid Gallery 
	# Masonry Gallery
	# Filterable Portfolio
	# Portfolio Pagination
	# Portfolio Details
	# Single Portfolio Slider
	# Single Portfolio Page  */

/* #Global Portfolio Styles
================================================== */
.ut-portfolio-wrap {
	width:100%;
	position:relative;
}
a.close-portfolio-details {
	position:relative;
	width:40px;
	height:40px;
	background: transparent;
	color: #888888;
	font-size:30px;
	line-height:40px;
	text-align:center;
	margin:0 auto 50px auto;
	display:block;
	top:0;
	right:0;
	z-index:1;
	opacity:1;
	-webkit-transition: opacity 0.2s ease-in-out 0s;
	-moz-transition: opacity 0.2s ease-in-out 0s;
	transition: opacity 0.2s ease-in-out 0s;
}
.light .close-portfolio-details {
	color:#FFFFFF;	
}
.light a.close-portfolio-details:hover {
	color:#FFFFFF;
	opacity:0.7;	
}
a.close-portfolio-details:hover {
	color: #888888;
	opacity:0.7;
}
a.close-portfolio-details:before {
	content:"X";
}
a.next-portfolio-details,
a.prev-portfolio-details {
	display:block;
	height: 100px;
    margin-top: -50px;
    position: absolute;
    top: 30%;
    width: 100%;
	-webkit-transition: opacity 0.2s ease-in-out 0s;
	-moz-transition: opacity 0.2s ease-in-out 0s;
	transition: opacity 0.2s ease-in-out 0s;
}
a.prev-portfolio-details {
	background-image: url('../images/dark-arrows.png');
	background-position: 0 0;
	background-repeat:no-repeat;
	cursor: pointer;
    height: 100px;
    opacity: 0;
    position: absolute;
    width: 52px;
    z-index: 3;
	left:0;
	margin-left:10px;
}
a.next-portfolio-details {
	background-image: url('../images/dark-arrows.png');
	background-position: 0 -100px;
	background-repeat:no-repeat;
	cursor: pointer;
    height: 100px;
    opacity: 0;
    position: absolute;
    width: 52px;
	right:0;
    z-index: 3;
	margin-right:10px;
}
.light a.prev-portfolio-details {
	background-image: url('../images/light-arrows.png');
	opacity: 0;
}
.light a.next-portfolio-details {
	background-image: url('../images/light-arrows.png');
	opacity: 0;
}
a.prev-portfolio-details:hover,
a.next-portfolio-details:hover,
.light a.prev-portfolio-details:hover,
.light a.next-portfolio-details:hover {
	opacity: 0.7;
}
.ut-portfolio-media .ut-portfolio-image {
	display:block;
	margin:0 auto;
}
.ut-portfolio-media .fluid-width-video-wrapper {
	margin:0 auto !important;	
}
.ut-portfolio-media video { 
    width: 100%; 
    height: 100%; 
    max-width: 100%;
}
.ut-portfolio-media .wp-video { 
    width: 100% !important;
}
.ut-portfolio-media {
    margin-bottom:50px;
}

/* Style 2 */

.portfolio-style-two h2.portfolio-title {
	font-size:17px;
	margin:0;
	padding:30px;
	text-align:center;
	background:#FFFFFF;	
}
.light .portfolio-style-two h2.portfolio-title {
	background:none;	
}
.portfolio-style-two .ut-portfolio-info i {
	display:block;
	margin:0 auto;
	text-align:center;
	margin-bottom:5px;	
}


/* #Portfolio Carousel
================================================== */
.ut-carousel {
	border:none !important;
	background: none !important;
	overflow:hidden;
}
.ut-carousel .slides img {
	width:101% !important;
	max-width:101% !important;
}
.ut-carousel .flex-direction-nav a  { 
	display: block; 
	width: 60px; 
	height: 60px; 
	margin: 0; 
	position: absolute;
	top:50%; 
	z-index: 10;
	margin-top:-30px;
	overflow: hidden; 
	opacity: 1; 
	cursor: pointer; 
	color:#ffffff; 
	-webkit-transition: all .3s ease; 
	-moz-transition: all .3s ease; 
	transition: all .3s ease; 
	text-align:center;
}

.ut-carousel.portfolio-style-two .flex-direction-nav a {
	margin-top:-70px;
}

.ut-carousel .flex-direction-nav a:before  { font-family: 'FontAwesome'; font-size: 40px; line-height:60px; display: inline-block; content: '\f104'; }
.ut-carousel .flex-direction-nav a.flex-next:before  { content: '\f105'; }

.ut-carousel .flex-direction-nav .flex-prev { left:0; -webkit-border-radius:0 3px 3px 0; -moz-border-radius:0 3px 3px 0; border-radius:0 3px 3px 0; }
.ut-carousel .flex-direction-nav .flex-next { right:0; -webkit-border-radius:3px 0 0 3px; -moz-border-radius:3px 0 0 3px; border-radius:3px 0 0 3px; }

.ut-carousel .flex-direction-nav .flex-prev:hover { background:rgba(255, 255, 255, 0.15);  color:#FFFFFF; }
.ut-carousel .flex-direction-nav .flex-next:hover { background:rgba(255, 255, 255, 0.15);  color:#FFFFFF; }

/* Style 2 */
.ut-carousel-item.style_two h2.portfolio-title {
	font-size:17px;
	margin:0;
	padding:30px;
	text-align:center;
	background:#FFFFFF;	
}
.portfolio-style-two .ut-portfolio-info i {
	display:block;
	margin:0 auto;
	text-align:center;
	margin-bottom:5px;	
}





/* #Portfolio Showcase
================================================== */
.ut-showcase {
	border:none !important;
	background: none !important;
}

.ut-showcase-navigation {
	border:none !important;
	background: none !important;
}

/* #Grid Gallery
================================================== */
.ut-masonry {
	display:block;
	
	/* default state */
	transition: opacity 0.2s ease-in-out 0s;
	opacity:0;		
}

.ut-masonry.show {
	opacity:1;
}

.ut-grid-item img {
	max-width: inherit;
	width: auto;
	height:100%;
	max-height: 100%;
	position: absolute;
}

.ut-grid-item figure {
	height:100%;
}

.ut-masonry a {
	width:100%;
	height:100%;
}

/* #Masonry Gallery
================================================== */
.ut-masonry-image {
    background-position: center center;
	background-repeat: no-repeat;
	display:block;
	width:100%;
	height:100%;
}

/* #Filterable Portfolio
================================================== */
.ut-portfolio-item-container.animated,
.ut-portfolio-item-container .ut-masonry.animated {	
	-webkit-transition-duration: 	0.8s;
	-moz-transition-duration: 		0.8s;
	-ms-transition-duration: 		0.8s;
	-o-transition-duration: 		0.8s;
	transition-duration: 			0.8s;
	
}
.ut-portfolio-item-container.animated {	
	-webkit-transition-property: 	height, width;
    -moz-transition-property: 		height, width;
    -ms-transition-property: 		height, width;
    -o-transition-property: 		height, width;
    transition-property:			height, width;
	
}
.ut-portfolio-item-container .ut-masonry.animated {  	
	-webkit-transition-property: 	-webkit-transform, opacity;
    -moz-transition-property:    	-moz-transform, opacity;
    -ms-transition-property:     	-ms-transform, opacity;
    -o-transition-property:      	-o-transform, opacity;
	transition-property:         	transform, opacity;	
}
.ut-portfolio-item-container .ut-masonry.gutter-1 {
    margin-right: 20px;
    margin-bottom: 20px
}
.ut-portfolio-item-container .ut-masonry.gutter-2 {
    margin-right: 40px;
    margin-bottom: 40px
}
.ut-portfolio-item-container .ut-masonry.gutter-3 {
    margin-right: 60px;
    margin-bottom: 60px
}

@media screen and (max-width: 767px) {
    
    .ut-portfolio-item-container .ut-masonry.gutter-2,
    .ut-portfolio-item-container .ut-masonry.gutter-3 { 
        margin-right: 30px;
        margin-bottom: 30px
    }

}

@media screen and (max-width: 400px) {

    .ut-portfolio-item-container .ut-masonry.gutter-2, 
    .ut-portfolio-item-container .ut-masonry.gutter-3 {        
        margin-right: 20px;
        margin-bottom: 20px;        
    }

}

.ut-portfolio-item-container .ut-masonry.gutter.last {
	margin-right:0px;
}
.ut-portfolio-item .gutter-shadow {
    box-shadow: 0px 40px 50px -40px #000;
}
.ut-portfolio-item {
	display:block;
	width:100%;
	height:100%;
}

/* fix for 1px offset in chrome */
.ut-portfolio-item a {
    -webkit-transform: rotate(0);
}
.ut-portfolio-item img {
    -webkit-backface-visibility: hidden; 
}
.ut-portfolio-title {
	text-transform:uppercase;
	margin-bottom:10px;
	text-align:center;
}
.ut-portfolio-menu-wrap {
	display:block;
	text-align:center;
	margin-bottom:45px;
}
.ut-portfolio-menu {
	list-style:none;
	margin:0;
	padding:0;
	border:none;
	display:block;
	font-family: 'ralewaymedium', Helvetica, Arial, sans-serif;
}
.ut-portfolio-menu li {
	margin:0 10px 0 0;
	display:inline;
	list-style:none;
	position:relative;
}
.ut-portfolio-menu li:last-child {
	margin-right:0;
}
.ut-portfolio-menu li a {
	font-size:11pt;
	letter-spacing:0.5px;
	background: transparent;
	padding:4px 12px;
	margin-bottom:5px;
	color:#888888;
	display:inline-block;
	border:1px solid #888888;
	-webkit-transition:0.2s all linear;
	-moz-transition:0.2s all linear;
	transition:0.2s all linear;
	text-transform:uppercase;
}
.ut-portfolio-menu li a.selected,
.ut-portfolio-menu li a.selected:hover {
	color:#FFFFFF;
	background:#222222;
	border-color:#222222;
}
.ut-portfolio-menu li a:hover {
	border-color:#222222;
	color:#222222;
}
.light .ut-portfolio-menu li a {
	color:#FFFFFF;
	border-color:#FFFFFF;	
}
.light .ut-portfolio-menu li a.selected:hover,
.light .ut-portfolio-menu li a.selected {
	color:#222222 !important;
	background:#FFFFFF;
	border-color:#FFFFFF !important;
}
.ut-portfolio-menu.style_two li a {
	background:#FFFFFF;
	border:none;
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	border-radius:3px;	
}
.light .ut-portfolio-menu.style_two li a {
    background:none;
    color:#FFFFFF;
}
.ut-portfolio-menu.style_two li a:hover,
.ut-portfolio-menu.style_two li a.selected,
.light .ut-portfolio-menu.style_two li a:hover,
.light .ut-portfolio-menu.style_two li a.selected,
.light .ut-portfolio-menu.style_two li a.selected:hover {
	color:#FFFFFF !important;	
}
.ut-portfolio-menu.style_three li a {
	background:#FFFFFF;
	border:none;
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	border-radius:3px;	
}
.light .ut-portfolio-menu.style_three li a {
	background:none;
    color:#FFFFFF;	
}
.light .ut-portfolio-menu.style_three li a:hover {
	background:#FFFFFF !important;
    color:#222222 !important;	
}
.ut-portfolio-menu.style_three li a.selected {
	color:#FFFFFF;
	background:#222222;
	border-color:#222222;
}
.light .ut-portfolio-menu.style_three li a.selected,
.light .ut-portfolio-menu.style_three li a.selected:hover {
	color:#222222 !important;
	background:#FFFFFF;
}
.ut-portfolio-info .portfolio-title {
	margin:0;
	font-size:17px;
	text-transform:uppercase;	
}

.ut-portfolio-info span {
	/*font-size:11px;*/
    font-size: 14pt;
    line-height: 22.5pt;
	letter-spacing:0.5px;
    text-transform: uppercase;
    color: #fff;
    /*background-color: rgba(50,50,50,.2);*/
    padding: 2px 4px;

}
.ut-portfolio-detail {
	margin-bottom:50px;
}

/* #Portfolio Pagination
================================================== */

.ut-portfolio-pagination {
	margin:30px auto 20px auto;
	font-size:11px;
	display:block;
	text-align:center;
	text-transform:uppercase;
	letter-spacing:0.5px;
	font-family: 'ralewaymedium', Helvetica, Arial, sans-serif;
}
.ut-portfolio-pagination a {
	margin-right:10px;
	padding:8px 12px;
	background:transparent;
	color:#888888;
	border:1px solid #888888;
	-webkit-transition:0.2s all linear;
	-moz-transition:0.2s all linear;
	transition:0.2s all linear;
}
.ut-portfolio-pagination a:last-child {
    margin-right:0;
}
.ut-portfolio-pagination.style_two a {
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	border-radius:3px;
	background:#FFFFFF;
	border:none !important;
}
.ut-portfolio-pagination.style_three a {
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	border-radius:3px;
	background:none;
	border:none !important;
}
.light .ut-portfolio-pagination.style_three a:hover {
    background:#FFFFFF;
    color:#222222 !important;   
}
.ut-portfolio-pagination.style_two a {
    color:#888888;
    background:none;
}
.light .ut-portfolio-pagination.style_two a.selected,
.light .ut-portfolio-pagination.style_two a:hover,
.light .ut-portfolio-pagination.style_two a.selected:hover {
    color:#FFFFFF !important;   
}
.ut-portfolio-pagination.style_two a:hover,
.light .ut-portfolio-pagination a {
	color:#FFFFFF;
	border-color:#FFFFFF;
}
.ut-portfolio-pagination a.selected:hover,
.ut-portfolio-pagination a.selected {
	background:#222222;
	border-color:#222222;
	color:#FFFFFF;
}
.light .ut-portfolio-pagination a.selected {
	border-color:#FFFFFF;
	background:#FFFFFF;
	color:#222222;	
}
.light .ut-portfolio-pagination a.selected:hover {
	border-color:#FFFFFF !important;
	background:#FFFFFF !important;
	color:#222222 !important;	
}
.ut-portfolio-pagination a:hover {
	color:#222222;
	border-color:#222222;
}

/* #Portfolio Details
================================================== */
.ut-portfolio-details-wrap {
	max-height: 0;
	position: relative;
	overflow: hidden;
	opacity:0;
		
	-webkit-transition: max-height 0.8s cubic-bezier(0.77, 0, 0.175, 1);
	-moz-transition: max-height 0.8s cubic-bezier(0.77, 0, 0.175, 1);
	transition: max-height 0.8s cubic-bezier(0.77, 0, 0.175, 1);
}

.ut-portfolio-details-wrap.show {
	max-height: 20000px;
	opacity:1;
}

.ut-portfolio-details-wrap.overflow-visible {
	overflow:visible !important;
}

.ut-portfolio-details {
	position:relative;
}

.ut-portfolio-detail {
	display:none;
	opacity:0;
	overflow:hidden;
	position:relative;
}
.ut-portfolio-details-navigation {
	opacity:0;
    position:relative;
    z-index:10;
    
	
	/* Set our transitions up. */
	-webkit-transition: opacity 0.8s;
	-moz-transition: opacity 0.8s;
	transition: opacity 0.8s;	
}
.ut-portfolio-details-navigation.show {
	opacity:1;
}
.ut-portfolio-list {
	margin-left:0;
	list-style:none !important;
	font-size:11px;
	text-transform:uppercase;
	text-align:center;
}
.ut-portfolio-list strong {
	font-weight:normal;
}
.ut-portfolio-list li {
	margin-right:10px;
	display:inline;
}
.ut-portfolio-detail-loader {
	background:#FFFFFF;
	position:fixed;
	z-index:2502;
	top:50%;
	left:50%;
	display:none;
	width:80px;
	height:80px;
	border:1px solid #EFEFEF;
	-webkit-border-radius:50%;
	-moz-border-radius:50%;
	border-radius:50%;
	margin-top:-40px;
	margin-left:-40px;
	color: #999999;
	font-size:40px;
	line-height:80px;
	text-align:center;
	-webkit-box-shadow:0 10px 10px rgba(0, 0, 0, 0.15);
	-moz-box-shadow:0 10px 10px rgba(0, 0, 0, 0.15);
	box-shadow:0 10px 10px rgba(0, 0, 0, 0.15);
}
.ut-portfolio-detail .wp-audio-shortcode {
    visibility:visible !important;
}
/* #Single Portfolio Slider
================================================== */
.ut-portfolio-gallery-slider {
	border:none !important;
	background: none !important;
	overflow:hidden;
}
.ut-portfolio-gallery-slider img {
	max-width:1024px;
	height:auto;
	margin:0 auto;
	display:block;
}
.ut-portfolio-gallery-slider .slides li:after {
	content: ".";
	position:absolute;
	display:block;
	top:0;
	left:0;
	z-index:-1000;
}
.ut-portfolio-gallery-slider .flex-direction-nav a  { 
	display: block; 
	width: 30px; 
	height: 30px; 
	margin: 0; 
	position: absolute;
	bottom:10px; 
	z-index: 10; 
	overflow: hidden; 
	opacity: 1; 
	cursor: pointer; 
	color:#ffffff; 
	-webkit-transition: all .3s ease; 
	-moz-transition: all .3s ease; 
	transition: all .3s ease; 
	text-align:center;
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	border-radius:3px; 
}
.ut-portfolio-gallery-slider .flex-direction-nav a:before  { font-family: 'FontAwesome'; font-size: 20px; line-height:30px; display: inline-block; content: '\f104'; }
.ut-portfolio-gallery-slider .flex-direction-nav a.flex-next:before  { content: '\f105'; }

.ut-portfolio-gallery-slider .flex-direction-nav .flex-prev { right:45px; }
.ut-portfolio-gallery-slider .flex-direction-nav .flex-next { right:10px; }

.ut-portfolio-gallery-slider .flex-direction-nav .flex-prev:hover { background:#121212; }
.ut-portfolio-gallery-slider .flex-direction-nav .flex-next:hover { background:#121212; }

/* #Portfolio Hover
================================================== */
.ut-hover a {
	position: relative;
	display: block;
	overflow: hidden;
	text-align:center;
}
.ut-hover img {
	backface-visibility: hidden;
	-webkit-transition:  all 700ms;
	-moz-transition:  all 700ms;
	transition:  all 700ms;	
}
.ut-hover:hover img {
	transform: scale(1.1) rotate(0.1deg);
	-ms-transform: scale(1.1) rotate(0.1deg);
	-webkit-transform: scale(1.1) rotate(0.1deg);
	-o-transform: scale(1.1) rotate(0.1deg);
	-moz-transform: scale(1.1) rotate(0.1deg);
}
.portfolio-lazy { 
	opacity: 0; 
}
.single-portfolio .ut-portfolio-info {
    padding:0;
}
.ut-portfolio-info {
	backface-visibility: hidden;
    padding: 0 10px;
}
.ut-portfolio-info-c {
    display:table-cell;
    vertical-align:middle;
    text-align:center;
}
.ut-hover-layer > div {
    position:absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    width:100%;
    height:100%;
    display:table; 	
}
.ut-hover-layer {
	bottom: 0;
    left: 0;
    opacity: 0;
    position: absolute;
    right: 0;
    top: 0;
    width:100%;
    height:100%;
	-webkit-transition:  opacity 400ms ease 0s;
	-moz-transition:  opacity 400ms ease 0s;
    transition: opacity 400ms ease 0s;
}
.ut-portfolio-offset-anchor {
	position:absolute;
	visibility:hidden;
	top: -79px; /* must be the same pixel value as for header height */
}
.isotope-hidden { visibility:hidden; }