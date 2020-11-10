<?php

// Register the new route
add_action( 'rest_api_init', function () {

    register_rest_route( 'example/v2', '/likes/(?P<id>\d+)', array(
        'methods' => array('GET','POST'),
        'callback' => 'example__like',
    ) );

    //V3 REMOVES 1 LIKE
    register_rest_route( 'example/v3', '/likes/(?P<id>\d+)', array(
        'methods' => array('GET','POST'),
        'callback' => 'remove__like',
    ));

});

function example__like( WP_REST_Request $request ) {
    $field_name = 'henkilon_saamat_aanet';
    $current_likes = get_field($field_name, $request['id']);
    $updated_likes = $current_likes + 1;
    $likes = update_field($field_name, $updated_likes, $request['id']);

    return $likes;
}

function remove__like( WP_REST_Request $request ) {
    $field_name = 'henkilon_saamat_aanet';
    $current_likes = get_field($field_name, $request['id']);
    $updated_likes = $current_likes - 1;
    $likes = update_field($field_name, $updated_likes, $request['id']);

    return $likes;
}

?>