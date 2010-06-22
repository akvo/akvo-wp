<?php
$pretty_source = "\n\t\t\t\t\t"; // prettify source code

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
        'before_widget' => $pretty_source . '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li></ul>' .  "\n",
        'before_title' => $pretty_source . '<h2 class="widgettitle">',
        'after_title' => '</h2>',
		'name' => 'Left Sidebar',
    ));
	register_sidebar(array(
        'before_widget' => $pretty_source . '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li></ul>' .  "\n",
        'before_title' => $pretty_source . '<h2 class="widgettitle">',
        'after_title' => '</h2>',
		'name' => 'Right Sidebar',
    ));

	}
?>