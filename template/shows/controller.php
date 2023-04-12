<?php 
 if (isset($_POST['show_insert'])) {
    global $wpdb;
    $default =[
          'show_name'=>'',
          'show_imdb_id'=>'',
          'show_runtime'=>'',
          'show_release_date'=>'',
          'show_status'=>'',
          'show_description'=>'',
          'show_images'=>'',
          'show_image_galleries'=>'',
          'show_videos'=>'',
          'show_embeds'=>'',
          'show_external_media'=>'',
          'show_cast'=>'',
          'show_crew'=>''
    ];
    $insert = shortcode_atts($default,$_POST);
    $wpdb->insert('wp_2_bcc_shows_data',$insert);
    wp_redirect('?page=shows');
  }
  if (isset($_POST['show_update'])) {
    global $wpdb;
    $default =[
          'show_name'=>'',
          'show_imdb_id'=>'',
          'show_runtime'=>'',
          'show_release_date'=>'',
          'show_status'=>'',
          'show_description'=>'',
          'show_images'=>'',
          'show_image_galleries'=>'',
          'show_videos'=>'',
          'show_embeds'=>'',
          'show_external_media'=>'',
          'show_cast'=>'',
          'show_crew'=>''
    ];
    $update = shortcode_atts($default,$_POST);
    $wpdb->update('wp_2_bcc_shows_data',$update,['ID'=>$_POST['row_id']]);
    wp_redirect('?page=shows');
  }

  function getShowDetail($id){
    global $wpdb;
    $query =  "SELECT * FROM `wp_2_bcc_shows_data` WHERE ID={$id}";
    $data = $wpdb->get_row($query);
    return $data;
  }
?>