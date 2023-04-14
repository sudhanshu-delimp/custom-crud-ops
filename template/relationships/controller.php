<?php 
 if (isset($_POST['relation_insert'])) {
    global $wpdb;
    $default =[
          'post_author'=>'',
          'post_date'=>date('Y-m-d H:m:s'),
          'post_date_gmt'=>date('Y-m-d H:m:s'),
          'post_content'=>'',
          'post_title'=>$_POST['post_type_from'].' to '.$_POST['post_type_to'],
          'post_excerpt'=>'',
          'post_status'=>'publish',
          'comment_status'=>'closed',
          'ping_status'=>'closed',
          'post_password'=>'',
          'post_name'=>'',
          'to_ping'=>'',
          'pinged'=>'',
          'post_modified'=>date('Y-m-d H:m:s'),
          'post_modified_gmt'=>'',
          'post_content_filtered'=>'',
          'post_parent'=>'',
          'guid'=>'',
          'menu_order'=>'',
          'post_type'=>'cb-relationship',
          'post_mime_type'=>'',
          'comment_count'=>''
    ];
    $insert = shortcode_atts($default,$_POST);
    $wpdb->insert('wp_posts',$insert);


    //Inserting in `wp_postmeta` table
    $metaValues = [
      'from' => $_POST['post_type_from'],
      'to' => $_POST['post_type_to']
    ];

    $metaKey = 'relationship';
    $postId = $wpdb->insert_id;
 
    // Set all key/value pairs in $metaValues
    update_post_meta($postId, $metaKey, maybe_serialize($metaValues));


    // $default1 =[
    //   'from'=>$_POST['post_type_from'],
    //   'to'=>$_POST['post_type_to'],
    //   'type'=>$_POST['post_title']
    // ];
    // $insert1 = shortcode_atts($default1,$_POST);
    // $wpdb->insert('wp_mb_relationships',$insert1);
    wp_redirect('?page=relationships');
  }
  if (isset($_POST['relation_update'])) {
    global $wpdb;
    $default =[
          'post_author'=>'',
          'post_date'=>date('Y-m-d H:m:s'),
          'post_date_gmt'=>date('Y-m-d H:m:s'),
          'post_content'=>'',
          'post_title'=>$_POST['post_type_from'].' to '.$_POST['post_type_to'],
          'post_excerpt'=>'',
          'post_status'=>'publish',
          'comment_status'=>'closed',
          'ping_status'=>'closed',
          'post_password'=>'',
          'post_name'=>'',
          'to_ping'=>'',
          'pinged'=>'',
          'post_modified'=>date('Y-m-d H:m:s'),
          'post_modified_gmt'=>'',
          'post_content_filtered'=>'',
          'post_parent'=>'',
          'guid'=>'',
          'menu_order'=>'',
          'post_type'=>'cb-relationship',
          'post_mime_type'=>'',
          'comment_count'=>''
    ];
    $update = shortcode_atts($default,$_POST);
    $wpdb->update('wp_posts',$update,['ID'=>$_POST['row_id']]);

        //Updating in `wp_postmeta` table
        $metaValues = [
          'from' => $_POST['post_type_from'],
          'to' => $_POST['post_type_to']
        ];
    
        $metaKey = 'relationship';
        $postId = $_POST['row_id'];
     
        // Set all key/value pairs in $metaValues
        update_post_meta($postId, $metaKey, maybe_serialize($metaValues));

    wp_redirect('?page=relationships');
  }

  function getRelationshipDetail($id){
    global $wpdb;
    $query =  "SELECT * FROM `wp_posts` WHERE ID={$id}";
    $data = $wpdb->get_row($query);
    // $query2 =  "SELECT * FROM `wp_mb_relationships` WHERE type='$data1->post_title'";
    // $data2 = $wpdb->get_row($query2);
    return $data;
  }
