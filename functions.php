<?php	
	// No one except hackers value the wordpress version number
	remove_action('wp_head', 'wp_generator');
	
	if ( function_exists('register_sidebar') )
	    register_sidebars(2, array(
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		));
?>