<?php

if(isset($_POST['name'])) {
    
    add_theme_support( 'post-thumbnails', array('project'));

    $my_post = array(
        'post_type'     => 'project',
        'post_title'    => $_POST['photo'],
        'post_status'   => 'publish',
        );
    
    $post_id = wp_insert_post($my_post);
    
    // Save custom fields data
    $field_key = "henkilon_nimi";
    $value = $_POST['name'];
    update_field( $field_key, $value, $post_id );
    
    $field_key = "henkilon_sahkoposti";
    $value = $_POST['email'];
    update_field( $field_key, $value, $post_id );

    
    if(!function_exists('wp_generate_attachement_metadata')) {
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        require_once(ABSPATH . "wp-admin" . '/includes/media.php');
    }
        if ($_FILES) {
            foreach ($_FILES as $file => $array) {
                if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {
                    return "upload error : " . $_FILES[$file]['error'];
                }
                $attach_id = media_handle_upload( $file, $post_id);
            }
        }
        if ($attach_id > 0) {
            update_post_meta($post_id,'_thumbnail_id',$attach_id);
        }
    
        header("Location:http://kansallisteatteri.local/lahetetty");
    
    die;
}

?>