<?php

add_action( 'gform_after_submission_2', 'meh_set_post_content', 10, 2 );
function meh_set_post_content( $entry, $form ) {


// add the new post child 1
$child_post_args = array(
    'comment_status' => 'closed', // or open
    'ping_status' => 'closed',
    'post_author' => 1,
    'post_title' => $entry[10],
    'post_status' => 'publish',
    'post_type' => 'family',
);

// this returns an integer on success, 0 on failure - creates post!
$post_id = wp_insert_post( $child_post_args );

// add more meta values if you need
$child_meta_values = array(
    'child_grade'       => $entry[13],
);

// as long as wp_insert_post didnt fail...
if($post_id > 0){
    foreach($child_meta_values as $key => $value) {
        // add our post meta
        update_post_meta($post_id, $key, $value);
    }
}


// add the new post child 2
$child_post_args = array(
    'comment_status' => 'closed', // or open
    'ping_status' => 'closed',
    'post_author' => 1,
    'post_title' => $entry[11],
    'post_status' => 'publish',
    'post_type' => 'family',
);

// this returns an integer on success, 0 on failure - creates post!
$post_id = wp_insert_post( $child_post_args );

// add more meta values if you need
$child_meta_values = array(
    'child_grade'       => $entry[14],
);

// as long as wp_insert_post didnt fail...
if($post_id > 0){
    foreach($child_meta_values as $key => $value) {
        // add our post meta
        update_post_meta($post_id, $key, $value);
    }
}


// add the new post child 3
$child_post_args = array(
    'comment_status' => 'closed',
    'ping_status' => 'closed',
    'post_author' => 1,
    'post_title' => $entry[12],
    'post_status' => 'publish',
    'post_type' => 'family',
);

// this returns an integer on success, 0 on failure - creates post!
$post_id = wp_insert_post( $child_post_args );

// add more meta values if you need
$child_meta_values = array(
    'child_grade'       => $entry[15],
);

// as long as wp_insert_post didnt fail...
if($post_id > 0){
    foreach($child_meta_values as $key => $value) {
        // add our post meta
        update_post_meta($post_id, $key, $value);
    }
}




// add the new post child 4
$child_post_args = array(
    'comment_status' => 'closed',
    'ping_status' => 'closed',
    'post_author' => 1,
    'post_title' => $entry[21],
    'post_status' => 'publish',
    'post_type' => 'family',
);

// this returns an integer on success, 0 on failure - creates post!
$post_id = wp_insert_post( $child_post_args );

// add more meta values if you need
$child_meta_values = array(
    'child_grade'       => $entry[21],
);

// as long as wp_insert_post didnt fail...
if($post_id > 0){
    foreach($child_meta_values as $key => $value) {
        // add our post meta
        update_post_meta($post_id, $key, $value);
    }
}



// add the new post child 5
$child_post_args = array(
    'comment_status' => 'closed',
    'ping_status' => 'closed',
    'post_author' => 1,
    'post_title' => $entry[25],
    'post_status' => 'publish',
    'post_type' => 'family',
);

// this returns an integer on success, 0 on failure - creates post!
$post_id = wp_insert_post( $child_post_args );

// add more meta values if you need
$child_meta_values = array(
    'child_grade'       => $entry[26],
);

// as long as wp_insert_post didnt fail...
if($post_id > 0){
    foreach($child_meta_values as $key => $value) {
        // add our post meta
        update_post_meta($post_id, $key, $value);
    }
}



// add the new post child  6
$child_post_args = array(
    'comment_status' => 'closed',
    'ping_status' => 'closed',
    'post_author' => 1,
    'post_title' => $entry[28],
    'post_status' => 'publish',
    'post_type' => 'family',
);

// this returns an integer on success, 0 on failure - creates post!
$post_id = wp_insert_post( $child_post_args );

// add more meta values if you need
$child_meta_values = array(
    'child_grade'       => $entry[29],
);

// as long as wp_insert_post didnt fail...
if($post_id > 0){
    foreach($child_meta_values as $key => $value) {
        // add our post meta
        update_post_meta($post_id, $key, $value);
    }
}

}
