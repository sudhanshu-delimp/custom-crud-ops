<?php 
 if (isset($_POST['character_insert'])) {
    global $wpdb;
    $default =[
          'character_name'=>'',
          'character_title_choice'=>'',
          'character_movie'=>'',
          'character_show'=>'',
          'character_celebrity'=>'',
          'character_primary'=>'',
          'character_description'=>'',
          'character_character'=>'',
          'character_images'=>'',
          'character_image_galleries'=>'',
          'character_videos'=>'',
          'character_embeds'=>'',
          'character_external_media'=>''
    ];
    $insert = shortcode_atts($default,$_POST);
    $wpdb->insert('wp_2_bcc_characters_data',$insert);
    wp_redirect('?page=characters');
  }
  if (isset($_POST['character_update'])) {
    global $wpdb;
    $default =[
          'character_name'=>'',
          'character_title_choice'=>'',
          'character_movie'=>'',
          'character_show'=>'',
          'character_celebrity'=>'',
          'character_primary'=>'',
          'character_description'=>'',
          'character_character'=>'',
          'character_images'=>'',
          'character_image_galleries'=>'',
          'character_videos'=>'',
          'character_embeds'=>'',
          'character_external_media'=>''
    ];
    $update = shortcode_atts($default,$_POST);
    $wpdb->update('wp_2_bcc_characters_data',$update,['ID'=>$_POST['row_id']]);
    wp_redirect('?page=characters');
  }

  function getCharacterDetail($id){
    global $wpdb;
    $query =  "SELECT * FROM `wp_2_bcc_characters_data` WHERE ID={$id}";
    $data = $wpdb->get_row($query);
    return $data;
  }
