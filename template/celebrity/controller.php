<?php 
 if (isset($_POST['celebrity_insert'])) {
    global $wpdb;
    $default =[
        'celebrity_name'=>'',
        'celebrity_imdb_id'=>'',
        'celebrity_birth_date'=>'',
        'celebrity_birth_place'=>'',
        'celebrity_bio'=>'',
        'celebrity_images'=>'',
        'celebrity_image_galleries'=>'',
        'celebrity_videos'=>'',
        'celebrity_embeds'=>'',
        'celebrity_external_media'=>'',
        'celebrity_filmography'=>''
    ];
    $insert = shortcode_atts($default,$_POST);
    $wpdb->insert('wp_2_bcc_celebrities_data',$insert);
    wp_redirect('?page=celebrities');
  }
  if (isset($_POST['celebrity_update'])) {
    global $wpdb;
    $default =[
      'celebrity_name'=>'',
      'celebrity_imdb_id'=>'',
      'celebrity_birth_date'=>'',
      'celebrity_birth_place'=>'',
      'celebrity_bio'=>'',
      'celebrity_images'=>'',
      'celebrity_image_galleries'=>'',
      'celebrity_videos'=>'',
      'celebrity_embeds'=>'',
      'celebrity_external_media'=>'',
      'celebrity_filmography'=>''
    ];
    $update = shortcode_atts($default,$_POST);
    $wpdb->update('wp_2_bcc_celebrities_data',$update,['ID'=>$_POST['row_id']]);
    wp_redirect('?page=celebrities');
  }

  function getCelebrityDetail($id){
    global $wpdb;
    $query =  "SELECT * FROM `wp_2_bcc_celebrities_data` WHERE ID={$id}";
    $data = $wpdb->get_row($query);
    return $data;
  }
