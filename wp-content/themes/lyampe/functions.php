<?php
/**
 * Lyampe functions and definitions.
 *
 * @package lyampe
 * @since 1.0.0
 */

define( 'LYAMPE_VERSION', '1.0.0' );

/**
 * Load assets.
 *
 * @since 1.0.0
 */
function lyampe_enqueue() {
    $parent = 'gtl-multipurpose-style';
    $style  = '/style.css';

    // Parent style
    wp_enqueue_style( 
        $parent, 
        get_template_directory_uri() . $style,
        array(),
        LYAMPE_VERSION
    );

    // Child style
    wp_enqueue_style( 
        'lyampe-style', 
        get_stylesheet_directory_uri() . $style, 
        array( $parent ), 
        LYAMPE_VERSION 
    );
}
add_action( 'wp_enqueue_scripts', 'lyampe_enqueue' );

/**
 * Dequeue default Google Fonts
 *
 * @since  1.0.0
 * @return void
 */
function lyampe_dequeue_fonts() {
    wp_dequeue_style( 'gtl-multipurpose-font' );
}
add_action( 'wp_enqueue_scripts', 'lyampe_dequeue_fonts', 15 );

/**
 * Enqueue Google Fonts
 *
 * @since  1.0.0
 * @return void
 */
function lyampe_enqueue_fonts() {
    wp_enqueue_style( 
        'lyampe-fonts', 
        lyampe_fonts_setup(), 
        array(), 
        LYAMPE_VERSION 
    );
}
add_action( 'wp_enqueue_scripts', 'lyampe_enqueue_fonts', 5 );

/**
 * Google Fonts setup
 *
 * @since  1.0.0
 * @return string Google Fonts URL
 */
function lyampe_fonts_setup() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = 'latin,latin-ext';

    $fonts[] = 'Muli:400,700,300';
    $fonts[] = 'Lato:400,300,700,900,300italic,400italic,700italic';

    $fonts_args = apply_filters( 'lyampe_fonts_setup', array(
        'family' => urlencode( implode( '|', $fonts ) ),
        'subset' => urlencode( $subsets ),
    ), compact( 'fonts', 'subsets' ) );

    return add_query_arg( $fonts_args, 'https://fonts.googleapis.com/css' );
}








        function customizer_options( $wp_customize ) {

			/**
			 * Panel
			 */
			$panel = 'general_panel-section';
			$wp_customize->add_panel( $panel , array(
				'title' 			=> esc_html__( 'General Options', 'gtl-multipurpose' ),
				'priority' 			=> 18
			) );


    
	
	/**
			 * Section
			 */
			$wp_customize->add_section( 'gtl_general_scroll_top' , array(
				'title' 			=> esc_html__( 'Scroll To Top', 'gtl-multipurpose' ),
				'priority' 			=> 10,
				'panel' 			=> 'general_panel-section',
			) );

			/**
			 * 
			 * 
			 * Scroll To Top
			 */
			 
			 
			
			/**
			 * Scroll Top Position
			 */
			 
			 
			 $wp_customize->add_setting('gtl_scroll_top_position', array(
		    'default' => 'right',
		    'sanitize_callback' => 'gtl_sanitize_error_page_blank',
	        ));

	        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'gtl_scroll_top_position-radio-control', array(
			'description' => 'Additional features in GTL Multipurpose PRO theme',
			'label' => 'Position',
			'section' => 'gtl_general_scroll_top',
			'settings' => 'gtl_scroll_top_position',
			 'type'        => 'radio',
			 'choices' => array(

                	'left'  			=> esc_html__( 'Left', 'gtl-multipurpose' ),
					'right' 			=> esc_html__( 'Right', 'gtl-multipurpose' ),
             )
		    )));
         
			$wp_customize->add_setting('gtl_scroll_top_display', array(
		    'default' => 'block',
		    'sanitize_callback' => 'gtl_sanitize_error_page_blank',
	        ));

	        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'gtl_scroll_top_display-radio-control', array(
			'label' => 'Display or Hide ',
			'section' => 'gtl_general_scroll_top',
			'settings' => 'gtl_scroll_top_display',
			 'type'        => 'radio',
			 'choices' => array(

                	'block'  			=> esc_html__( 'Display', 'gtl-multipurpose' ),
					'none' 			=> esc_html__( 'Hide', 'gtl-multipurpose' ),
             )
		    )));
           
            
           
        
            
            /**
			 * 404 Section
			 */
            
            $wp_customize->add_section('gtl_general_error_page' , array(
				'title' 			=> esc_html__('404 Error Page', 'gtl-multipurpose'),
				
				'panel' 			=> 'general_panel-section'
				
			) );
			
			 
			 $wp_customize->add_setting('gtl_error_page_blank', array(
		    'default' => 'off',
		    'sanitize_callback' => 'gtl_sanitize_error_page_blank',
	        ));

	        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'gtl_error_page_blank-radio-control', array(
			'label' => 'Blank Page',
			'description' => 'Enable this option to remove all the elements and have full control of the 404 error page.',
			'section' => 'gtl_general_error_page',
			'settings' => 'gtl_error_page_blank',
			 'type'        => 'radio',
			 'choices' => array(

                               'on'  			=> esc_html__( 'On', 'gtl-multipurpose' ),
                			   'off' 			=> esc_html__( 'Off', 'gtl-multipurpose' ),

            ),
		    )));
		    
           
           
            
            
            

}




add_action('customize_register', 'customizer_options');




     function gtl_sanitize_error_page_blank( $input ) {

    $valid = array(

        'on'    => __('On', 'gtl-multipurpose'),

        'off'     => __('Off', 'gtl-multipurpose'),

        'block'   => __( 'Display', 'gtl-multipurpose' ),

		'none' 	  => __( 'Hide', 'gtl-multipurpose' ),

		'left'  			=> __( 'Left', 'gtl-multipurpose' ),
		
		'right' 			=> __( 'Right', 'gtl-multipurpose' ),
               

    );

    if ( array_key_exists( $input, $valid ) ) {

        return $input;

    } else {

        return '';

    }

}

if( ! function_exists('gtl_multipurpose_dynamic_css') ):

function gtl_multipurpose_dynamic_css(){

	

	?>

	<style>

        #scroll-top {
            background: #df3d8c !important;

            padding: 15px;

            margin: 50px;
            
            float:<?php echo get_theme_mod('gtl_scroll_top_position') ?> !important;
            
            display:<?php echo get_theme_mod('gtl_scroll_top_display') ?> !important;
            
           
           
        }  
        
        #scroll-top span {
             color: #fff ;
             font-size: 20px;
             font-weight: 700;
        }
        
    
    </style>

	<?php 

	echo ob_get_clean();

}



endif;

add_action( 'wp_head' , 'gtl_multipurpose_dynamic_css' , 55 );

