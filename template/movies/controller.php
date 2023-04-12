<?php 
 if (isset($_POST['movie_insert'])) {
    global $wpdb;
    $default =[
          'movie_name'=>'',
          'movie_imdb_id'=>'',
          'movie_runtime'=>'',
          'movie_release_date'=>'',
          'movie_description'=>'',
          'movie_images'=>'',
          'movie_image_galleries'=>'',
          'movie_videos'=>'',
          'movie_embeds'=>'',
          'movie_external_media'=>'',
          'movie_cast'=>'',
          'movie_crew'=>''
    ];
    $insert = shortcode_atts($default,$_POST);
    $wpdb->insert('wp_2_bcc_movies_data',$insert);
    wp_redirect('?page=movies');
  }
  if (isset($_POST['movie_update'])) {
    global $wpdb;
    $default =[
        'movie_name'=>'',
        'movie_imdb_id'=>'',
        'movie_runtime'=>'',
        'movie_release_date'=>'',
        'movie_description'=>'',
        'movie_images'=>'',
        'movie_image_galleries'=>'',
        'movie_videos'=>'',
        'movie_embeds'=>'',
        'movie_external_media'=>'',
        'movie_cast'=>'',
        'movie_crew'=>''
    ];
    $update = shortcode_atts($default,$_POST);
    $wpdb->update('wp_2_bcc_movies_data',$update,['ID'=>$_POST['row_id']]);
    wp_redirect('?page=movies');
  }

  function getMovieDetail($id){
    global $wpdb;
    $query =  "SELECT * FROM `wp_2_bcc_movies_data` WHERE ID={$id}";
    $data = $wpdb->get_row($query);
    return $data;
  }
