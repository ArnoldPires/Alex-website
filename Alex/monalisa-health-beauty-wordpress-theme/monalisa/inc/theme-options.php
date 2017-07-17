<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "monalisa";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'monalisa/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */


    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,

         'disable_tracking' => true,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Monalisa Options', 'monalisa' ),
        'page_title'           => esc_html__( 'Monalisa Options', 'monalisa' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => 3,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    );

 

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( esc_html__( '', 'monalisa' ), $v );
    } else {
        $args['intro_text'] = esc_html__( '', 'monalisa' );
    }

    // Add content after the form.
    $args['footer_text'] = esc_html__( '', 'monalisa' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => esc_html__( 'Theme Information 1', 'monalisa' ),
            'content' => esc_html__( '<p>This is the tab content, HTML is allowed.</p>', 'monalisa' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => esc_html__( 'Theme Information 2', 'monalisa' ),
            'content' => esc_html__( '<p>This is the tab content, HTML is allowed.</p>', 'monalisa' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = esc_html__( '<p>This is the sidebar content, HTML is allowed.</p>', 'monalisa' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

      // -> START Basic Fields

    Redux::setSection( $opt_name, array(
		'title'  => esc_html__( 'General Settings', 'monalisa' ),
		'desc'   => esc_html__( '', 'monalisa' ),
		'icon'   => 'el el-cog',
		'fields' => array(
		
			array(
				'id'       => 'monalisa_menu_text_color',
				'type'     => 'color',
				'title'    => esc_html__('Menu Text Color', 'monalisa'), 
				'subtitle' => esc_html__('Choice color here', 'monalisa'),
				'default'  => ''
			),						
			array(
				'id'       => 'monalisa_menu_text_hover_acive_color',
				'type'     => 'color',
				'title'    => esc_html__('Menu Text Hover / Active Color', 'monalisa'), 
				'subtitle' => esc_html__('Choice color here', 'monalisa'),
				'default'  => ''
			),					
			array(
				'id'       => 'monalisa_sticky_menu_bg_color',
				'type'     => 'color',
				'title'    => esc_html__('Sticky Menu Backgrund Color', 'monalisa'), 
				'subtitle' => esc_html__('choice color here', 'monalisa'),
			),			
			
			array(
				'id'       => 'monalisa_sticky_menu_text_color',
				'type'     => 'color',
				'title'    => esc_html__('Sticky Menu Text Color', 'monalisa'), 
				'subtitle' => esc_html__('Please use color ', 'monalisa'),
				'default'  => ''
			),					
			array(
				'id'       => 'monalisa_sticky_menu_text_hover_acive_color',
				'type'     => 'color',
				'title'    => esc_html__('Menu Sticky Text Hover / Active Color', 'monalisa'), 
				'subtitle' => esc_html__('Choice color here', 'monalisa'),
				'default'  => ''
			),	
			
			array(
				'id'       => 'monalisa_home_banner_img',
				'type'     => 'media',
				'compiler' => true,
				'title'    => esc_html__('Main Banner Image', 'monalisa'), 
				'subtitle' => esc_html__('upload banner image here', 'monalisa'),
				'default'  => array(
						   'url'=> esc_url(get_template_directory_uri()).'/assets/img/bg/home-bg.jpg'
				  ),
			), 			
		)
    ) ); 

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Footer Settings', 'monalisa' ),
        'id'               => 'monalisa-foooter-setting',
        'icon'             => 'el el-stop-alt',
        'customizer_width' => '400px',
        'fields'           => array(
		
			
			array(
				'id'       => 'monalisa_footer_bg_color',
				'type'     => 'color',
				'title'    => esc_html__('Footer Backgrund Color', 'monalisa'), 
				'subtitle' => esc_html__('Please use color ', 'monalisa'),
			),				
					
			
			array(
				'id'       => 'monalisa_footer_text_color',
				'type'     => 'color',
				'title'    => esc_html__('Text Color', 'monalisa'), 
				'subtitle' => esc_html__('Please use color ', 'monalisa'),
				'default'  => ''
			),			

			array(
				'id'       => 'monalisa_footer_link_color',
				'type'     => 'color',
				'title'    => esc_html__('Link Color', 'monalisa'), 
				'subtitle' => esc_html__('Please use color ', 'monalisa'),
				'default'  => ''
			),			
			
            array(
                'id'       => 'monalisa_copywrite_text',
                'type'             => 'editor',
                'title'            => esc_html__('CopyWrite Text', 'monalisa'), 
                'subtitle'         => esc_html__('Write Copywrite text here.', 'monalisa'),
                'default'          => 'Monalisa &copy; 2017 All Rights Reserved.',
                'args'   => array(
                    'teeny'            => true,
                    'textarea_rows'    => 4
                )
            ),
		array(
			'id'       => 'monalisa_footer_fb_link',
			'type'             => 'text',
			'default'             => '#',
			'title'            => esc_html__('Facbook Url', 'monalisa'), 
			'subtitle'         => esc_html__('enter url here.', 'monalisa'),			
		),			
		
		array(
			'id'       => 'monalisa_footer_tw_link',
			'type'             => 'text',
			'default'             => '#',
			'title'            => esc_html__('Twitter Url', 'monalisa'), 
			'subtitle'         => esc_html__('enter url here.', 'monalisa'),			
		),			
		
		array(
			'id'       => 'monalisa_footer_gplus_link',
			'type'             => 'text',
			'default'             => '#',
			'title'            => esc_html__('Google Plus Url', 'monalisa'), 
			'subtitle'         => esc_html__('enter url here.', 'monalisa'),			
		),				

		array(
			'id'       => 'monalisa_footer_linkedin_link',
			'type'             => 'text',
			'default'             => '#',
			'title'            => esc_html__('Linkedin Url', 'monalisa'), 
			'subtitle'         => esc_html__('enter url here.', 'monalisa'),			
		),		
		
		array(
			'id'       => 'monalisa_footer_youtube_link',
			'type'             => 'text',
			'default'             => '#',
			'title'            => esc_html__('youtube Url', 'monalisa'), 
			'subtitle'         => esc_html__('enter url here.', 'monalisa'),			
		),			

		array(
			'id'       => 'monalisa_footer_skype_link',
			'type'             => 'text',
			'default'             => '#',
			'title'            => esc_html__('skype Url', 'monalisa'), 
			'subtitle'         => esc_html__('enter url here.', 'monalisa'),			
		),				
		
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Advance Settings', 'monalisa' ),
        'id'               => 'monalisa-advance-setting',
        'customizer_width' => '400px',
        'fields'           => array(
            array(
                'id'       => 'monalisa_preloader_opt',
                'type'     => 'switch',
                'title'    => esc_html__('Display Preloader', 'monalisa'),
                'subtitle' => esc_html__('If yes then click the checkbox.', 'monalisa'),
                'default'  => '1'// 1 = on | 0 = off
            ),  
			array(
                'id'       => 'monalisa_homepage_opt',
                'type'             => 'checkbox',
                'title'            => esc_html__('Only Enable Home Page', 'monalisa'), 
				'default'  => '0',
                'subtitle'         => esc_html__('if check this option preloader only will be enable for home page', 'monalisa'),
				'required' => array( 'monalisa_preloader_opt', '=', '1' ),
            ),				
			
			array(
                'id'       => 'monalisa_spinner_text',
                'type'             => 'text',
                'title'            => esc_html__('Preloader Spinner Text', 'monalisa'), 		
                'subtitle'         => esc_html__('write text here', 'monalisa'),
				'required' => array( 'monalisa_preloader_opt', '=', '1' ),			
				'default' => 'Monalisa',			
            ),				
			
			array(
                'id'       => 'monalisa_spinner_bg_color',
                'type'             => 'color',
                'title'            => esc_html__('Preloader Spinner Backgrund Color', 'monalisa'), 		
                'subtitle'         => esc_html__('choice color here', 'monalisa'),
				'required' => array( 'monalisa_preloader_opt', '=', '1' ),			
            ),			

			array(
                'id'       => 'monalisa_spinner_image',
                'type'             => 'media',
                'title'            => esc_html__('Preloader Spinner Image', 'monalisa'), 		
                'subtitle'         => esc_html__('upload image here', 'monalisa'),
				'required' => array( 'monalisa_preloader_opt', '=', '1' ),
				'default'  => array(
						   'url'=> esc_url(get_template_directory_uri()).'/assets/img/status.gif'
				  ),				
            ),			
		        

            array(
                'id'       => 'monalisa_css_editor',
                'type'     => 'ace_editor',
                'title'    => esc_html__('Custom CSS', 'monalisa'),
                'subtitle' => esc_html__('Write your CSS code here.', 'monalisa'),
                'mode'     => 'css',
                'theme'    => 'monokai',
            ),
			
        )
    ) );




    Redux::setSection( $opt_name, array(
        'icon'            => 'el el-list-alt',
        'title'           => esc_html__( 'Customizer Only', 'monalisa' ),
        'desc'            => esc_html__( '<p class="description">This Section should be visible only in Customizer</p>', 'monalisa' ),
        'customizer_only' => true,
        'fields'          => array(
            array(
                'id'              => 'opt-customizer-only',
                'type'            => 'select',
                'title'           => esc_html__( 'Customizer Only Option', 'monalisa' ),
                'subtitle'        => esc_html__( 'The subtitle is NOT visible in customizer', 'monalisa' ),
                'desc'            => esc_html__( 'The field desc is NOT visible in customizer.', 'monalisa' ),
                'customizer_only' => true,
                //Must provide key => value pairs for select options
                'options'         => array(
                    '1' => esc_html__('Opt 1' , 'monalisa'),
                    '2' => esc_html__('Opt 2' , 'monalisa'),
                    '3' => esc_html__('Opt 3' , 'monalisa')
                ),
                'default'         => '2'
            ),
        )
    ) );

    if ( file_exists( get_template_directory() . '/../README.md' ) ) {
        $section = array(
            'icon'   => 'el el-list-alt',
            'title'  => esc_html__( 'Documentation', 'monalisa' ),
            'fields' => array(
                array(
                    'id'       => '17',
                    'type'     => 'raw',
                    'markdown' => true,
                    'content_path' => get_template_directory() . '/../README.md', // FULL PATH, not relative please
                    //'content' => 'Raw content here',
                ),
            ),
        );
        Redux::setSection( $opt_name, $section );
    }
    /*
     * <--- END SECTIONS
     */


 