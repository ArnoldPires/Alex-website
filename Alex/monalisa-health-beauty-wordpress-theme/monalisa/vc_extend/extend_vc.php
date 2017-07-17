<?php

	// disable full scren
	vc_add_param( 'vc_row' , array(
	   "type" => "checkbox",
	   "heading" => esc_html__("Enable Container","monalisa"),
	   "param_name" => "enable_full_screen",
	"value" => array( esc_html__("Yes", "monalisa") => 'yes') ,
	   "description" => ""
	));
	 
	vc_map( 
		array(
			'name' => esc_html__('About Us Area', 'monalisa'),
			'base' => 'about_us_area',
			'class' => '',
			'icon' => 'icon-wpb-vc_icon',
			'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),
			'params' => array(				
				
				//BEGIN ADDING PARAMS
				array(
					'type'        => 'attach_image',
					'heading'     => esc_html__( 'Section Image', 'monalisa' ),
					'param_name'  => 'about_section_img',
					'admin_label' => true,			
				),			

				//BEGIN ADDING PARAMS
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Section Title', 'monalisa' ),
					'param_name'  => 'about_title',
					'admin_label' => true,
					'value' => 'About our <span>Monalisa</span>',					
				),				
				
				//BEGIN ADDING PARAMS
				array(
					'type'        => 'textarea',
					'heading'     => esc_html__( 'Section SubTitle', 'monalisa' ),
					'param_name'  => 'about_content',
					'admin_label' => true,
					'value' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus, possimus soluta illo.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum.</p>',					
				),				
													
			)
		) 
	);	
	
	// Parent container
	vc_map( array(
		'name'                    => esc_html__( 'Why Choice Us Area' , 'monalisa' ),
		'base'                    => 'why_choose_us_area',
		'icon'                    => 'icon-wpb-vc_icon',
		'as_parent'               => array('only' => 'why_choose_us_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		'content_element'         => true,
		'show_settings_on_create' => true,
		'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),	
		'params'          => array(	
			//BEGIN ADDING PARAMS
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Title', 'monalisa' ),
				'param_name' => 'section_title',
				'value' => 'Why Choose <span>Monalisa</span>'
			),
			//END ADDING PARAMS		
			
			//BEGIN ADDING PARAMS
			array(
				'type' => 'textarea',
				'heading' => esc_html__( 'Content', 'monalisa' ),
				'param_name' => 'section_content',
				'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor sit amet.'
			),
			//END ADDING PARAMS		
										
			//BEGIN ADDING PARAMS
			array(
				'type' => 'attach_image',
				'heading' => esc_html__( 'Upload Section Image', 'monalisa' ),
				'param_name' => 'section_image',
			),
			//END ADDING PARAMS					
				
		),
		"js_view" => 'VcColumnView'
	) );

	// Nested Element
	vc_map( array(
		'name'            => esc_html__('Item', 'monalisa'),
		'base'            => 'why_choose_us_item',
		'description'     => esc_html__( 'single item', 'monalisa' ),
		'icon'            => 'icon-wpb-row',
		'content_element' => true,
		'as_child'        => array('only' => 'why_choose_us_area'), // Use only|except attributes to limit parent (separate multiple values with comma)
		'params'          => array(	
			//BEGIN ADDING PARAMS
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Icon', 'monalisa' ),
				'param_name' => 'choose_icon',
				'value' => 'fa fa-lemon-o'

			),
			//END ADDING PARAMS			

			//BEGIN ADDING PARAMS
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Title', 'monalisa' ),
				'param_name' => 'choose_title',
				'value' => 'Xoss Environment'

			),
			//END ADDING PARAMS				

			//BEGIN ADDING PARAMS
			array(
				'type' => 'textarea',
				'heading' => esc_html__( 'Content', 'monalisa' ),
				'param_name' => 'choose_content',
				'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras interdum ante vel aliquet euismod.'

			),
			//END ADDING PARAMS		
	
		),
	) );
	// A must for container functionality, replace Wbc_Item with your base name from mapping for parent container
	if(class_exists('WPBakeryShortCodesContainer'))
	{
	   class WPBakeryShortCode_Why_Choose_Us_Area extends WPBakeryShortCodesContainer {
		}
	}
	// Replace Wbc_Inner_Item with your base name from mapping for nested element
	if(class_exists('WPBakeryShortCode'))
	{
	   class WPBakeryShortCode_Why_Choose_Us_Item extends WPBakeryShortCode {
		}
	}	
	
	
	// Parent container
	vc_map( array(
		'name'                    => esc_html__( 'Counter Area' , 'monalisa' ),
		'base'                    => 'counter_area',
		'icon'                    => 'icon-wpb-vc_icon',
		'as_parent'               => array('only' => 'counter_item_area'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		'content_element'         => true,
		'show_settings_on_create' => true,
		'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),	
		'params'          => array(	
		
			//BEGIN ADDING PARAMS
			array(
				'type' => 'attach_image',
				'heading' => esc_html__( 'Upload Section Image', 'monalisa' ),
				'param_name' => 'counter_bg',
			),
			//END ADDING PARAMS					
				
		),
		"js_view" => 'VcColumnView'
	) );

	// Nested Element
	vc_map( array(
		'name'            => esc_html__('Item', 'monalisa'),
		'base'            => 'counter_item_area',
		'description'     => esc_html__( 'single item', 'monalisa' ),
		'icon'            => 'icon-wpb-row',
		'content_element' => true,
		'as_child'        => array('only' => 'counter_area'), // Use only|except attributes to limit parent (separate multiple values with comma)
		'params'          => array(	
			//BEGIN ADDING PARAMS
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Counter Number', 'monalisa' ),
				'param_name' => 'counter_number',
				'value' => '140'

			),
			//END ADDING PARAMS			

			//BEGIN ADDING PARAMS
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Counter Text', 'monalisa' ),
				'param_name' => 'counter_text',
				'value' => 'Awards won'

			),
			//END ADDING PARAMS				

		),
	) );
	// A must for container functionality, replace Wbc_Item with your base name from mapping for parent container
	if(class_exists('WPBakeryShortCodesContainer'))
	{
	   class WPBakeryShortCode_Counter_Area extends WPBakeryShortCodesContainer {
		}
	}
	// Replace Wbc_Inner_Item with your base name from mapping for nested element
	if(class_exists('WPBakeryShortCode'))
	{
	   class WPBakeryShortCode_Counter_Item_Area extends WPBakeryShortCode {
		}
	}		

	vc_map( 
		array(
			'name' => esc_html__('Gallery Area', 'monalisa'),
			'base' => 'gallery_area',
			'class' => '',
			'icon' => 'icon-wpb-vc_icon',
			'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),
			'params' => array(							

				array(
					'type' => 'textfield',
					'heading' => esc_html__('Title', 'monalisa'),
					'param_name' => 'section_title',
					'admin_label' => true,
					'value' => 'Monalisa <span>Gallery</span>',	
				),					
				
				array(
					'type' => 'textarea',
					'heading' => esc_html__('Section Content', 'monalisa'),
					'param_name' => 'section_content',
					'admin_label' => true,
					'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor sit amet.',	
				),	
				
				array(
					'type' => 'textfield',
					'heading' => esc_html__('Section Button Text', 'monalisa'),
					'param_name' => 'section_btn_text',
					'admin_label' => true,
					'value' => 'See More Projects',	
				),		
				
				array(
					'type' => 'textfield',
					'heading' => esc_html__('Section Button Link', 'monalisa'),
					'param_name' => 'section_btn_link',
					'admin_label' => true,
					'value' => '#',	
				),	
		
			)
		) 
	); 		

	vc_map( 
		array(
			'name' => esc_html__('Offer Area', 'monalisa'),
			'base' => 'offer_area',
			'class' => '',
			'icon' => 'icon-wpb-vc_icon',
			'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),
			'params' => array(							

				array(
					'type' => 'textfield',
					'heading' => esc_html__('Section Title', 'monalisa'),
					'param_name' => 'section_title',
					'admin_label' => true,
					'value' => 'Get your special offer today',	
				),				
				array(
					'type' => 'textarea',
					'heading' => esc_html__('Section Content', 'monalisa'),
					'param_name' => 'section_content',
					'admin_label' => true,
					'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor sit amet. when an unknown printer took a galley of type and scrambled it to make a type specimen book.',	
				),			
				array(
					'type' => 'textfield',
					'heading' => esc_html__('Button Text', 'monalisa'),
					'param_name' => 'section_btn_text',
					'admin_label' => true,
					'value' => 'Make an appointment',	
				),					
				
				array(
					'type' => 'textfield',
					'heading' => esc_html__('Button Link', 'monalisa'),
					'param_name' => 'section_btn_link',
					'admin_label' => true,
					'value' => '#',	
				),			

		
			)
		) 
	); 			

	// Parent container
	vc_map( array(
		'name'                    => esc_html__( 'Opening Hour Area' , 'monalisa' ),
		'base'                    => 'opening_hour_area',
		'icon'                    => 'icon-wpb-vc_icon',
		'as_parent'               => array('only' => 'opening_hour_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		'content_element'         => true,
		'show_settings_on_create' => true,
		'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),	
		'params'          => array(	
		
			//BEGIN ADDING PARAMS
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Section Title', 'monalisa' ),
				'param_name' => 'section_title',
				'value' => 'Monalisa Open Hours'
			),
			//END ADDING PARAMS				
			
			//BEGIN ADDING PARAMS
			array(
				'type' => 'textarea',
				'heading' => esc_html__( 'Section Content', 'monalisa' ),
				'param_name' => 'section_content',
				'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation.'
			),
			//END ADDING PARAMS					
				
		),
		"js_view" => 'VcColumnView'
	) );

	// Nested Element
	vc_map( array(
		'name'            => esc_html__('Item', 'monalisa'),
		'base'            => 'opening_hour_item',
		'description'     => esc_html__( 'single item', 'monalisa' ),
		'icon'            => 'icon-wpb-row',
		'content_element' => true,
		'as_child'        => array('only' => 'opening_hour_area'), // Use only|except attributes to limit parent (separate multiple values with comma)
		'params'          => array(	
			//BEGIN ADDING PARAMS
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Day', 'monalisa' ),
				'param_name' => 'oh_day',
				'value' => 'Monday-Friday'

			),
			//END ADDING PARAMS			

			//BEGIN ADDING PARAMS
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Time', 'monalisa' ),
				'param_name' => 'oh_time',
				'value' => '8.00AM - 5.00PM'

			),
			//END ADDING PARAMS				

		),
	) );
	// A must for container functionality, replace Wbc_Item with your base name from mapping for parent container
	if(class_exists('WPBakeryShortCodesContainer'))
	{
	   class WPBakeryShortCode_Opening_Hour_Area extends WPBakeryShortCodesContainer {
		}
	}
	// Replace Wbc_Inner_Item with your base name from mapping for nested element
	if(class_exists('WPBakeryShortCode'))
	{
	   class WPBakeryShortCode_Opening_Hour_Item extends WPBakeryShortCode {
		}
	}
	
	vc_map( 
		array(
			'name' => esc_html__('Features Area', 'monalisa'),
			'base' => 'feature_area',
			'class' => '',
			'icon' => 'icon-wpb-vc_icon',
			'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),
			'params' => array(							

				array(
					'type' => 'textfield',
					'heading' => esc_html__('Title', 'monalisa'),
					'param_name' => 'section_title',
					'admin_label' => true,
					'value' => 'Monalisa <span>Features</span>',	
				),				
				array(
					'type' => 'textarea',
					'heading' => esc_html__('Content', 'monalisa'),
					'param_name' => 'section_subtitle',
					'admin_label' => true,
					'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor sit amet.',	
				),					
				array(
					'type' => 'textfield',
					'heading' => esc_html__('Number of Post', 'monalisa'),
					'param_name' => 'section_number_post',
					'admin_label' => true,
					'value' => '3',	
				),				
		

		
			)
		) 
	); 			
	
	vc_map( 
		array(
			'name' => esc_html__('Team Area', 'monalisa'),
			'base' => 'team_area',
			'class' => '',
			'icon' => 'icon-wpb-vc_icon',
			'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),
			'params' => array(							

				array(
					'type' => 'textfield',
					'heading' => esc_html__('Title', 'monalisa'),
					'param_name' => 'section_title',
					'admin_label' => true,
					'value' => 'Monalisa <span>Lovely</span> Team',	
				),				
				array(
					'type' => 'textarea',
					'heading' => esc_html__('Content', 'monalisa'),
					'param_name' => 'section_subtitle',
					'admin_label' => true,
					'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor sit amet.',	
				),					
				array(
					'type' => 'textfield',
					'heading' => esc_html__('Number of Post', 'monalisa'),
					'param_name' => 'section_number_post',
					'admin_label' => true,
					'value' => '4',	
				),				
		

		
			)
		) 
	); 			
	

	
	vc_map( 
		array(
			'name' => esc_html__('Video Area', 'monalisa'),
			'base' => 'video_area',
			'class' => '',
			'icon' => 'icon-wpb-vc_icon',
			'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),
			'params' => array(	
			
				array(
					'type' => 'attach_image',
					'heading' => esc_html__('Upload Image', 'monalisa'),
					'param_name' => 'vid_bg',
				),	
				
				array(
					'type' => 'textfield',
					'heading' => esc_html__('Title', 'monalisa'),
					'param_name' => 'vid_title',
					'admin_label' => true,
					'value' => 'How it works',	
				),				
				
				
				array(
					'type' => 'textfield',
					'heading' => esc_html__('Video Url', 'monalisa'),
					'param_name' => 'vid_url',
					'value' => 'https://www.youtube.com/embed/vR9mzDjmS7M',	
				),					
						
			)
		) 
	); 		
	
	vc_map( 
		array(
			'name' => esc_html__('Pricing Area', 'monalisa'),
			'base' => 'pricing_area',
			'class' => '',
			'icon' => 'icon-wpb-vc_icon',
			'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),
			'params' => array(							

				array(
					'type' => 'textfield',
					'heading' => esc_html__('Title', 'monalisa'),
					'param_name' => 'section_title',
					'admin_label' => true,
					'value' => 'Monalisa <span>Pricing</span>',	
				),		
				
				array(
					'type' => 'textarea',
					'heading' => esc_html__('Sub Title', 'monalisa'),
					'param_name' => 'section_subtitle',
					'admin_label' => true,
					'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor sit amet.',	
				),					
				array(
					'type' => 'textfield',
					'heading' => esc_html__('Number of Post', 'monalisa'),
					'param_name' => 'section_number_post',
					'admin_label' => true,
					'value' => '3',	
				),				

		
		
			)
		) 
	); 			
	
	vc_map( 
		array(
			'name' => esc_html__('Testimonials Area', 'monalisa'),
			'base' => 'testimonials_area',
			'class' => '',
			'icon' => 'icon-wpb-vc_icon',
			'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),
			'params' => array(							

				array(
					'type' => 'textfield',
					'heading' => esc_html__('Title', 'monalisa'),
					'param_name' => 'section_title',
					'admin_label' => true,
					'value' => 'Our <span>Clients</span> Say',	
				),		
				
				array(
					'type' => 'textarea',
					'heading' => esc_html__('Sub Title', 'monalisa'),
					'param_name' => 'section_subtitle',
					'admin_label' => true,
					'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor sit amet.',	
				),					
							
			)
		) 
	); 			
	
	vc_map( 
		array(
			'name' => esc_html__('Blog Area', 'monalisa'),
			'base' => 'blog_area',
			'class' => '',
			'icon' => 'icon-wpb-vc_icon',
			'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),
			'params' => array(							

				array(
					'type' => 'textfield',
					'heading' => esc_html__('Title', 'monalisa'),
					'param_name' => 'section_title',
					'admin_label' => true,
					'value' => 'Fresh <span>News</span>',	
				),		
				
				array(
					'type' => 'textarea',
					'heading' => esc_html__('Sub Title', 'monalisa'),
					'param_name' => 'section_subtitle',
					'admin_label' => true,
					'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor sit amet.',	
				),						
				
				array(
					'type' => 'textfield',
					'heading' => esc_html__('Number of Post', 'monalisa'),
					'param_name' => 'number_of_post',
					'admin_label' => true,
					'value' => '2',	
				),					
							
			)
		) 
	); 			
	
	
	vc_map( 
		array(
			'name' => esc_html__('Clients Area', 'monalisa'),
			'base' => 'clients_area',
			'class' => '',
			'icon' => 'icon-wpb-vc_icon',
			'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),
			'params' => array(							

						
			)
		) 
	); 				
	
	vc_map( 
		array(
			'name' => esc_html__('Contact Us Area', 'monalisa'),
			'base' => 'contact_us_area',
			'class' => '',
			'icon' => 'icon-wpb-vc_icon',
			'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),
			'params' => array(							

				array(
					'type' => 'textfield',
					'heading' => esc_html__('Title', 'monalisa'),
					'param_name' => 'sec_title',
					'admin_label' => true,
					'value' => 'get in touch',	
				),				
				array(
					'type' => 'textarea',
					'heading' => esc_html__('Content', 'monalisa'),
					'param_name' => 'sec_subtitle',
					'admin_label' => true,
					'value' => 'If you have any question, get in touch here.',	
				),		
				
				array(
					'type' => 'textfield',
					'heading' => esc_html__('Contact Form7 Shortcode ID', 'monalisa'),
					'param_name' => 'sec_cont_f7_short_id',
					'admin_label' => true,
				),					
		
			)
		) 
	); 			
	

	// Parent container
	vc_map( array(
		'name'                    => esc_html__( 'Contact Us Area' , 'monalisa' ),
		'base'                    => 'contact_us_area',
		'icon'                    => 'icon-wpb-vc_icon',
		'as_parent'               => array('only' => 'contact_info'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		'content_element'         => true,
		'show_settings_on_create' => true,
		'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),	
		'params'          => array(	
		
			//BEGIN ADDING PARAMS
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Section Title', 'monalisa' ),
				'param_name' => 'section_title',
				'value' => 'Get in <span>Touch</span>'
			),
			//END ADDING PARAMS				
			
			//BEGIN ADDING PARAMS
			array(
				'type' => 'textarea',
				'heading' => esc_html__( 'Section Content', 'monalisa' ),
				'param_name' => 'section_subtitle',
				'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru exercit ation Lorem ipsum dolor sit amet.'
			),
			//END ADDING PARAMS					
			
			//BEGIN ADDING PARAMS
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Contact Form7 Shortcode ID', 'monalisa' ),
				'param_name' => 'cont7_shortcode_id',

			),
			//END ADDING PARAMS					
				
		),
		"js_view" => 'VcColumnView'
	) );

	// Nested Element
	vc_map( array(
		'name'            => esc_html__('Contact Info', 'monalisa'),
		'base'            => 'contact_info',
		'description'     => esc_html__( 'Single Item', 'monalisa' ),
		'icon'            => 'icon-wpb-row',
		'content_element' => true,
		'as_child'        => array('only' => 'contact_us_area'), // Use only|except attributes to limit parent (separate multiple values with comma)
		'params'          => array(	
			//BEGIN ADDING PARAMS
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Icon', 'monalisa' ),
				'param_name' => 'cont_icon',
				'value' => 'fa fa-envelope'

			),
			//END ADDING PARAMS			

			//BEGIN ADDING PARAMS
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Title', 'monalisa' ),
				'param_name' => 'cont_title',
				'value' => 'Email Address'

			),
			//END ADDING PARAMS		
			
			
			//BEGIN ADDING PARAMS
			array(
				'type' => 'textarea',
				'heading' => esc_html__( 'Contact Info', 'monalisa' ),
				'param_name' => 'cont_info',
				'value' => 'info@monalisa.com<br>admin@monalisa.com'

			),
			//END ADDING PARAMS				

		),
	) );
	// A must for container functionality, replace Wbc_Item with your base name from mapping for parent container
	if(class_exists('WPBakeryShortCodesContainer'))
	{
	   class WPBakeryShortCode_Contact_Us_Area extends WPBakeryShortCodesContainer {
		}
	}
	// Replace Wbc_Inner_Item with your base name from mapping for nested element
	if(class_exists('WPBakeryShortCode'))
	{
	   class WPBakeryShortCode_Contact_Info extends WPBakeryShortCode {
		}
	}
	
	vc_map( 
		array(
			'name' => esc_html__('Google Map Area', 'monalisa'),
			'base' => 'google_map',
			'class' => '',
			'icon' => 'icon-wpb-vc_icon',
			'category' => esc_html__('Monalisa Shortcodes', 'monalisa'),
			'params' => array(							

				array(
					'type' => 'textfield',
					'heading' => esc_html__('API Key', 'monalisa'),
					'param_name' => 'cont_api_key',
					'admin_label' => true,
					'value' => 'AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA',	
				),				
				array(
					'type' => 'textfield',
					'heading' => esc_html__('Latitude', 'monalisa'),
					'param_name' => 'cont_latitude',
					'admin_label' => true,
					'value' => '40.7127837',	
				),				

				array(
					'type' => 'textfield',
					'heading' => esc_html__('Longitude', 'monalisa'),
					'param_name' => 'cont_longitude',
					'admin_label' => true,
					'value' => '-74.00594130000002',	
				),		
							
		
			)
		) 
	); 	