<?php

function widget_setup() {
    
    register_sidebar(
        array(
            'name'          => 'Sidebar',
            'class'         => 'custom-sidebar',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$2">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'  => '</h1>'
        )
    );
    
    register_sidebar(
        array(
            'name'          => 'Like button',
            'id'            => 'custom_like_button',
            'class'         => 'custom-like-button',
            'description'   => 'Adding like button to the image',
            'before_widget' => '<aside id="%1$s" class="widget %2$2">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h6 class="widget-title">',
            'after_title'  => '</h6>'
        )
    );
}

?>