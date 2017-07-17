<?php

function monalisa_blog_banner(){ 
global $monalisa;
$monalisa_home_banner_img = $monalisa['monalisa_home_banner_img']['url'];	
$monalisa_default_banner_img = get_template_directory_uri() . '/assets/img/bg/home-bg.jpg';

?>

	<!-- START  HOME DESIGN -->
	<section class="section-top" style="background: url(<?php if($monalisa_home_banner_img){ echo esc_url($monalisa_home_banner_img);}else{ echo esc_url($monalisa_default_banner_img);}?>)no-repeat;background-size:cover; background-position: center center;background-attachment:fixed">
		<div class="overlay">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
					<div class="section-top-title" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h2><?php esc_html_e('Blog' , 'monalisa');?></h2>
						<ol class="breadcrumb">
						  <li><a href="<?php echo esc_url(home_url('/'));?>"><?php esc_html_e('Home' , 'monalisa');?></a></li>
						  <li class="active"><?php esc_html_e('Blog' , 'monalisa');?></li>
						</ol>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</div><!--- END HOME OVERLAY -->
	</section>	
	<!-- END  HOME DESIGN -->	
		
<?php }

function monalisa_archive_banner(){ 
global $monalisa;
$monalisa_home_banner_img = $monalisa['monalisa_home_banner_img']['url'];	
$monalisa_default_banner_img = get_template_directory_uri() . '/assets/img/bg/home-bg.jpg';

?>

	<!-- START  HOME DESIGN -->
	<section class="section-top" style="background: url(<?php if($monalisa_home_banner_img){ echo esc_url($monalisa_home_banner_img);}else{ echo esc_url($monalisa_default_banner_img);}?>)no-repeat;background-size:cover; background-position: center center;background-attachment:fixed">
		<div class="overlay">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
					<div class="section-top-title" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h2><?php esc_html_e('Archive' , 'monalisa');?></h2>
						<ol class="breadcrumb">
						  <li><a href="<?php echo esc_url(home_url('/'));?>"><?php esc_html_e('Home' , 'monalisa');?></a></li>
						  <li class="active"><?php the_archive_title();?></li>
						</ol>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</div><!--- END HOME OVERLAY -->
	</section>	
	<!-- END  HOME DESIGN -->	
		
<?php }

function monalisa_search_banner(){ 
global $monalisa;
$monalisa_home_banner_img = $monalisa['monalisa_home_banner_img']['url'];	
$monalisa_default_banner_img = get_template_directory_uri() . '/assets/img/bg/home-bg.jpg';

?>

	<!-- START  HOME DESIGN -->
	<section class="section-top" style="background: url(<?php if($monalisa_home_banner_img){ echo esc_url($monalisa_home_banner_img);}else{ echo esc_url($monalisa_default_banner_img);}?>)no-repeat;background-size:cover; background-position: center center;background-attachment:fixed">
		<div class="overlay">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
					<div class="section-top-title" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h2><?php esc_html_e('Search' , 'monalisa');?></h2>
						<ol class="breadcrumb">
						  <li><a href="<?php echo esc_url(home_url('/'));?>"><?php esc_html_e('Home' , 'monalisa');?></a></li>
						  <li class="active"><?php printf( esc_html__( 'Search Results for: %s', 'monalisa' ), '<span>' . get_search_query() . '</span>' ); ?></li>
						</ol>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</div><!--- END HOME OVERLAY -->
	</section>	
	<!-- END  HOME DESIGN -->	
		
<?php }

function monalisa_single_banner(){ 
global $monalisa;
$monalisa_home_banner_img = $monalisa['monalisa_home_banner_img']['url'];	
$monalisa_upload_banner_image = get_post_meta(get_the_ID(), '_monalisa_upload_banner_image', true);
$monalisa_default_banner_img = get_template_directory_uri() . '/assets/img/bg/home-bg.jpg';

?>

	<!-- START  HOME DESIGN -->
	<section class="section-top" style="background: url(<?php if($monalisa_upload_banner_image){ echo esc_url($monalisa_upload_banner_image);}elseif($monalisa_home_banner_img){ echo esc_url($monalisa_home_banner_img);}else{ echo esc_url($monalisa_default_banner_img);}?>)no-repeat;background-size:cover; background-position: center center;background-attachment:fixed">
		<div class="overlay">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
					<div class="section-top-title" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h2><?php the_title();?></h2>
						<ol class="breadcrumb">
						  <li><a href="<?php echo esc_url(home_url('/'));?>"><?php esc_html_e('Home' , 'monalisa');?></a></li>
						  <li class="active"><?php the_title();?></li>
						</ol>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</div><!--- END HOME OVERLAY -->
	</section>	
	<!-- END  HOME DESIGN -->	
		
<?php }

function monalisa_404_banner(){ 
global $monalisa;
$monalisa_home_banner_img = $monalisa['monalisa_home_banner_img']['url'];	
$monalisa_default_banner_img = get_template_directory_uri() . '/assets/img/bg/home-bg.jpg';

?>

	<!-- START  HOME DESIGN -->
	<section class="section-top" style="background: url(<?php if($monalisa_home_banner_img){ echo esc_url($monalisa_home_banner_img);}else{ echo esc_url($monalisa_default_banner_img);}?>)no-repeat;background-size:cover; background-position: center center;background-attachment:fixed">
		<div class="overlay">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
					<div class="section-top-title" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
						<h2><?php esc_html_e('404' , 'monalisa');?></h2>
						<ol class="breadcrumb">
						  <li><a href="<?php echo esc_url(home_url('/'));?>"><?php esc_html_e('Home' , 'monalisa');?></a></li>
						  <li class="active"><?php esc_html_e('404' , 'monalisa');?></li>
						</ol>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</div><!--- END HOME OVERLAY -->
	</section>	
	<!-- END  HOME DESIGN -->	
		
<?php }

function monalisa_header(){ 
global $monalisa;
$monalisa_default_logo_img = get_template_directory_uri() . '/assets/img/logo.png';
$monalisa_spinner_text = $monalisa['monalisa_spinner_text'];
$monalisa_preloader_opt = $monalisa['monalisa_preloader_opt'];
$monalisa_homepage_opt = $monalisa['monalisa_homepage_opt'];
?>

<?php if($monalisa_preloader_opt == '1' && !$monalisa_homepage_opt == '1') { ?>

<!-- START PRELOADER -->
<div class="preloader">
	<div class="status">
		<div class="status-mes"><h4><?php echo esc_attr($monalisa_spinner_text);?></h4></div>
	</div>
</div>
<!-- END PRELOADER -->

<?php }elseif($monalisa_preloader_opt == '1' && $monalisa_homepage_opt == '1'){ ?>	

<?php if(is_front_page()) {?>
<!-- START PRELOADER -->
<div class="preloader">
	<div class="status">
		<div class="status-mes"><h4><?php echo esc_attr($monalisa_spinner_text);?></h4></div>
	</div>
</div>
<!-- END PRELOADER -->
<?php } } ?>



<!-- START NAVBAR -->
<div class="navbar navbar-default navbar-fixed-top menu-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only"><?php echo esc_html_e('Toggle navigation' , 'monalisa');?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="<?php echo esc_url(home_url('/'));?>" class="navbar-brand">
				<?php if(get_custom_logo()){
					 the_custom_logo();
				}else { ?>
				  <img src="<?php echo esc_url($monalisa_default_logo_img);?>" alt="">
				<?php } ?>		
			</a>
		</div>
		<div class="navbar-collapse collapse">
			<nav id="navigation">
				<?php monalisa_main_menu();?>
			</nav>
		</div> 
	</div><!--- END CONTAINER -->
</div> 
<!-- END NAVBAR -->	
<?php 	
}
function monalisa_footer(){ 
	global $monalisa;
	$monalisa_default_logo_img = get_template_directory_uri() . '/assets/img/logo.png';
	$monalisa_copywrite_text = $monalisa['monalisa_copywrite_text'];	
	$monalisa_footer_fb_link = $monalisa['monalisa_footer_fb_link'];	
	$monalisa_footer_tw_link = $monalisa['monalisa_footer_tw_link'];	
	$monalisa_footer_gplus_link = $monalisa['monalisa_footer_gplus_link'];	
	$monalisa_footer_linkedin_link = $monalisa['monalisa_footer_linkedin_link'];	
	$monalisa_footer_youtube_link = $monalisa['monalisa_footer_youtube_link'];	
	$monalisa_footer_skype_link = $monalisa['monalisa_footer_skype_link'];	
?>
	<!-- START FOOTER BOTTOM -->
	<footer class="footer section-padding">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12 col-sm-12 col-xs-12 wow zoomIn">
					<a href="<?php echo esc_url(home_url('/'));?>" class="footer-logo">
					
						<?php if(get_custom_logo()){
							 the_custom_logo();
						}else { ?>
						  <img src="<?php echo esc_url($monalisa_default_logo_img);?>" alt="">
						<?php } ?>	
					</a>
					<div class="footer_social">
						<ul>
							<?php if($monalisa_footer_fb_link){ ?>
								<li><a class="footer_facebook  wow bounceInDown" data-wow-delay=".1s" href="<?php echo esc_url($monalisa_footer_fb_link);?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<?php } if($monalisa_footer_tw_link){ ?>
								<li><a class="footer_twitter wow bounceInDown" data-wow-delay=".2s" href="<?php echo esc_url($monalisa_footer_tw_link);?>" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<?php } if($monalisa_footer_gplus_link){ ?>
								<li><a class="footer_google wow bounceInDown" data-wow-delay=".3s" href="<?php echo esc_url($monalisa_footer_gplus_link);?>" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<?php } if($monalisa_footer_linkedin_link){ ?>
							<li><a class="footer_linkedin wow bounceInDown" data-wow-delay=".4s" href="<?php echo esc_url($monalisa_footer_linkedin_link);?>" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<?php } if($monalisa_footer_youtube_link){ ?>
							<li><a class="footer_youtube wow bounceInDown" data-wow-delay=".5s" href="<?php echo esc_url($monalisa_footer_youtube_link);?>" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a></li>
							<?php } if($monalisa_footer_skype_link){ ?>
							<li><a class="footer_skype wow bounceInDown" data-wow-delay=".6s" href="<?php echo esc_url($monalisa_footer_skype_link);?>" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
							<?php } ?>
						</ul>
					</div>	
					<p class="footer_copyright"><?php echo monalisa_wp_kses($monalisa_copywrite_text);?></p>							
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</footer>
	<!-- END FOOTER BOTTOM-->	
<?php }