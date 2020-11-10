<?php

function kt_custom_post_type() {
    add_theme_support( 'post-thumbnails' );
    register_post_type('project',
        array(
            'rewrite'   => array('slug' => 'projects'),
            'labels'    => array(
                'name'          => 'Kilpailutyöt',
                'singular_name' => 'Kilpailutyö',
                'add_new_item'  => 'Uusi Kilpailutyö',
                'edit_item'     => 'Muokkaa kilpailutyötä'
                ),
            'menu_icon'     => 'dashicons-images-alt',
            'public'        => true,
            'has_archive'   => true,
            'supports'      => array(
                'title', 'thumbnail',
            )
        )
    );
}
add_action('init', 'kt_custom_post_type');

?>