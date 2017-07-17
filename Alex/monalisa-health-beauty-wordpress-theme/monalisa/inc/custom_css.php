<?php 
function monalisa_movers_custom_css(){
	global $monalisa;
	
	if(!is_admin()) :
	?>
  
	<?php 
	
		$monalisa_menu_text_color						 = '';
		$monalisa_menu_text_hover_acive_color						 = '';
		$monalisa_sticky_menu_bg_color						 = '';
		$monalisa_sticky_menu_text_color						 = '';
		$monalisa_sticky_menu_text_hover_acive_color						 = '';
		$monalisa_footer_bg_color						 = '';
		$monalisa_footer_bottom_bg_color						 = '';
		$monalisa_footer_text_color						 = '';
		$monalisa_footer_link_color						 = '';
		$monalisa_spinner_image						 = '';
		$monalisa_spinner_bg_color						 = '';
		$monalisa_css_editor						 = '';
		

		if ( isset( $monalisa['monalisa_menu_text_color'] ) ) {
			$monalisa_menu_text_color = $monalisa['monalisa_menu_text_color'];
		}		
		if ( isset( $monalisa['monalisa_menu_text_hover_acive_color'] ) ) {
			$monalisa_menu_text_hover_acive_color = $monalisa['monalisa_menu_text_hover_acive_color'];
		}			
		if ( isset( $monalisa['monalisa_sticky_menu_bg_color'] ) ) {
			$monalisa_sticky_menu_bg_color = $monalisa['monalisa_sticky_menu_bg_color'];
		}		
		if ( isset( $monalisa['monalisa_sticky_menu_text_color'] ) ) {
			$monalisa_sticky_menu_text_color = $monalisa['monalisa_sticky_menu_text_color'];
		}			
		if ( isset( $monalisa['monalisa_sticky_menu_text_hover_acive_color'] ) ) {
			$monalisa_sticky_menu_text_hover_acive_color = $monalisa['monalisa_sticky_menu_text_hover_acive_color'];
		}	
	
		if ( isset( $monalisa['monalisa_footer_bg_color'] ) ) {
			$monalisa_footer_bg_color = $monalisa['monalisa_footer_bg_color'];
		}			
		
		if ( isset( $monalisa['monalisa_footer_text_color'] ) ) {
			$monalisa_footer_text_color = $monalisa['monalisa_footer_text_color'];
		}			

		if ( isset( $monalisa['monalisa_footer_link_color'] ) ) {
			$monalisa_footer_link_color = $monalisa['monalisa_footer_link_color'];
		}			
		if ( isset( $monalisa['monalisa_spinner_image'] ) ) {
			$monalisa_spinner_image = $monalisa['monalisa_spinner_image']['url'];
		}			
		
		if ( isset( $monalisa['monalisa_spinner_bg_color'] ) ) {
			$monalisa_spinner_bg_color = $monalisa['monalisa_spinner_bg_color'];
		}	
		if ( isset( $monalisa['monalisa_css_editor'] ) ) {
			$monalisa_css_editor = $monalisa['monalisa_css_editor'];
		}
	

	wp_enqueue_style( 'monalisa-custom-css', get_template_directory_uri() . '/assets/css/custom-style.css' );
	
	//add custom css
	$monalisa_custom_css = "

		.preloader {
			background: {$monalisa_spinner_bg_color};
		}			
		
		.status {
			background-image: url($monalisa_spinner_image);
			background-repeat: no-repeat;
		}			
		
		.menu-top li a {
			color: {$monalisa_menu_text_color}!important;
		}		
		
		.menu-top li a:hover {
			color: {$monalisa_menu_text_hover_acive_color}!important;
		}		
		
		.navbar-default.menu-shrink {
			background: {$monalisa_sticky_menu_bg_color};
		}		
		.navbar-default.menu-shrink li a {
			color: {$monalisa_sticky_menu_text_color}!important;
		}	
		.navbar-default.menu-shrink li a:hover{
			color: {$monalisa_sticky_menu_text_hover_acive_color} !important;
		}		
		
		.footer{
			background: {$monalisa_footer_bg_color};
		}		
		.footer_copyright{
			color: {$monalisa_footer_text_color};
		}		
		.footer_copyright a{
			color: {$monalisa_footer_link_color};
		}

		{$monalisa_css_editor};
	";
	
	//Add the above custom CSS via wp_add_inline_style
	wp_add_inline_style( 'monalisa-custom-css', $monalisa_custom_css ); //Pass the variable into the main style sheet ID
	
	
  endif;
}

add_action( 'wp_enqueue_scripts', 'monalisa_movers_custom_css'  ) ;