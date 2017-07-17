<?php


add_action( 'cmb2_init', 'monalisa_metabox_options' );

function monalisa_metabox_options(){
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_monalisa_';


	// Page Options	

	$cmb2_post_1_options = new_cmb2_box( array(
		'id'           => $prefix . 'p1banner_option',
		'title'        => esc_html__( 'Upload Banner Image', 'monalisa' ),
		'object_types' => array( 'page' , 'post', 'portfolios'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_post_1_options->add_field( array(
	    'id'               => $prefix .'upload_banner_image',
	    'desc'             => esc_html__( 'Please upload banner image here ','monalisa' ),
		 'type'             => 'file',
	) );	
	
	//Post Options	
	$cmb2_post_options = new_cmb2_box( array(
		'id'           => $prefix . 'posts_option',
		'title'        => esc_html__( 'Post Options', 'monalisa' ),
		'object_types' => array( 'post'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );	
	
	
	$cmb2_post_options->add_field( array(
	    'name'             => esc_html__('Audio / Video Post Embed Code ' , 'monalisa'),
	    'id'               => $prefix .'vid_post_title',
	    'type'    => 'title',
	) );		
	
	$cmb2_post_options->add_field( array(
	    'name'             => esc_html__('Embed Code' , 'monalisa'),
	    'id'               => $prefix .'embed_code',
		'desc'    => esc_html__('enter embed code here' , 'monalisa'),
	    'type'    => 'textarea_code',
	) );		
	
	$cmb2_feature = new_cmb2_box( array(
		'id'           => $prefix . 'feature_options',
		'title'        => esc_html__( 'Feature Info', 'monalisa' ),
		'object_types' => array( 'feature'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_feature->add_field( array(
	    'name'             => esc_html__('Price' , 'monalisa'),
	    'id'               => $prefix .'feature_price',
	    'desc'             => esc_html__( 'write text here','monalisa' ),
		'type'             => 'text',
		'default'    => '$100',
	) );	
	
	$cmb2_feature->add_field( array(
	    'name'             => esc_html__('Button Text' , 'monalisa'),
	    'id'               => $prefix .'feature_btn_text',
	    'desc'             => esc_html__( 'write text here','monalisa' ),
		'type'             => 'text',
		'default'    => 'Read More',
	) );		
	
	$cmb2_feature->add_field( array(
	    'name'             => esc_html__('Button Link' , 'monalisa'),
	    'id'               => $prefix .'feature_link',
	    'desc'             => esc_html__( 'enter link here','monalisa' ),
		'type'             => 'text',
		'default'    => '#',
	) );		

	
	$cmb2_pricing = new_cmb2_box( array(
		'id'           => $prefix . 'pric_options',
		'title'        => esc_html__( 'Pricing Info', 'monalisa' ),
		'object_types' => array( 'pricing'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Feature Pricing' , 'monalisa'),
		'id'               => $prefix .'pricing_feature_item',
		'desc'             => esc_html__( 'select feature item','monalisa' ),
		'type'             => 'checkbox',
		'default'    => '0',
	) );	
	

	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Pricing Amount' , 'monalisa'),
		'id'               => $prefix .'pricing_amount',
		'desc'             => esc_html__( 'write text here','monalisa' ),
		'type'             => 'text',
		'default'    => '$28',
	) );	
	
	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Pricing Period' , 'monalisa'),
		'id'               => $prefix .'pricing_period',
		'desc'             => esc_html__( 'write text here','monalisa' ),
		'type'             => 'text',
		'default'    => 'per month',
	) );		
	$pricing_group_field_id = $cmb2_pricing->add_field( array(
		'id'          => $prefix .'pricing_group_field_opt',
		'type'        => 'group',
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'   => esc_html__( 'Feature {#}', 'monalisa' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add New Feature', 'monalisa' ),
			'remove_button' => esc_html__( 'Remove Feature', 'monalisa' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$cmb2_pricing->add_group_field( $pricing_group_field_id, array(
		'name' => esc_html__('Single Feature' , 'monalisa'),
		'id'   => $prefix .'single_feature',
		'type' => 'textarea',
		'default' => 'Free Access',
		'description' => esc_html__('write text here' , 'monalisa'),
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );
	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Button Text' , 'monalisa'),
		'id'               => $prefix .'pricing_btn_text',
		'desc'             => esc_html__( 'write text here','monalisa' ),
		'type'             => 'text',
		'default'    => 'Get Plan',
	) );		
	$cmb2_pricing->add_field( array(
		'name'             => esc_html__('Button Link' , 'monalisa'),
		'id'               => $prefix .'pricing_btn_link',
		'desc'             => esc_html__( 'write text here','monalisa' ),
		'type'             => 'text',
		'default'    => '#',
	) );		
	$cmb2_team = new_cmb2_box( array(
		'id'           => $prefix . 'team_mem_options',
		'title'        => esc_html__( 'Team Member Info', 'monalisa' ),
		'object_types' => array('team'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	
	$cmb2_team->add_field( array(
	    'name'             => esc_html__('Designation' , 'monalisa'),
	    'id'               => $prefix .'team_designation',
	    'desc'             => esc_html__( 'write designation here','monalisa' ),
		'type'       => 'text',
		'default'       => 'Beauty Expert',
	) );		
	
	$teamgroup_field_id = $cmb2_team->add_field( array(
		'id'          => $prefix .'team_group_field_opt',
		'type'        => 'group',
		// 'repeatable'  => false, // use false if you want non-repeatable group
		'options'     => array(
			'group_title'   => esc_html__( 'Social Media link {#}', 'monalisa' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add New Link', 'monalisa' ),
			'remove_button' => esc_html__( 'Remove Link', 'monalisa' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );


	$cmb2_team->add_group_field( $teamgroup_field_id, array(
	    'name'             => esc_html__('Social Icon' , 'monalisa'),
	    'id'               => $prefix .'social_icon',
	    'desc'             => esc_html__( 'write icon here. get all icon here http://fontawesome.io/icons/ ','monalisa' ),
		'type'             => 'text',
		'default'    => 'fa-facebook',
	) );		
	$cmb2_team->add_group_field( $teamgroup_field_id, array(
	    'name'             => esc_html__('Social Link' , 'monalisa'),
	    'id'               => $prefix .'social_link',
	    'desc'             => esc_html__( 'write url here','monalisa' ),
		'type'             => 'text',
		'default'    => '#',
	) );			

	$cmb2_clients = new_cmb2_box( array(
		'id'           => $prefix . 'client_options',
		'title'        => esc_html__( 'Client Info', 'monalisa' ),
		'object_types' => array( 'clients'), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		//'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
	) );

	$cmb2_clients->add_field( array(
		'name'             => esc_html__('Client Website Address' , 'monalisa'),
		'id'               => $prefix .'client_web_url',
		'desc'             => esc_html__( 'enter url here','monalisa' ),
		'type'             => 'text',
	) );	
	
}