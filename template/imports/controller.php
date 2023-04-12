<?php 
 if (isset($_POST['import_insert'])) {
    global $wpdb;
    $default =[
          'title'=>'',
          'status'=>'',
          'post_status'=>'',
          'get_status'=>'',
          'created_at'=>'',
          'started_at'=>'',
          'finished_at'=>'',
          'input_parameters'=>'',
          'endpoint'=>'',
          'error'=>'',
          'robot_id'=>'',
          'bulk_run_id'=>'',
          'task_count'=>'',
          'captured_texts'=>'',
          'captured_lists'=>'',
          'captured_screenshots'=>'',
          'video_recording'=>''
    ];
    $insert = shortcode_atts($default,$_POST);
    $wpdb->insert('wp_2_bcc_imports_data',$insert);
    wp_redirect('?page=imports');
  }
  if (isset($_POST['import_update'])) {
    global $wpdb;
    $default =[
          'title'=>'',
          'status'=>'',
          'post_status'=>'',
          'get_status'=>'',
          'created_at'=>'',
          'started_at'=>'',
          'finished_at'=>'',
          'input_parameters'=>'',
          'endpoint'=>'',
          'error'=>'',
          'robot_id'=>'',
          'bulk_run_id'=>'',
          'task_count'=>'',
          'captured_texts'=>'',
          'captured_lists'=>'',
          'captured_screenshots'=>'',
          'video_recording'=>''
    ];
    $update = shortcode_atts($default,$_POST);
    $wpdb->update('wp_2_bcc_imports_data',$update,['ID'=>$_POST['row_id']]);
    wp_redirect('?page=imports');
  }

  function getImportDetail($id){
    global $wpdb;
    $query =  "SELECT * FROM `wp_2_bcc_imports_data` WHERE ID={$id}";
    $data = $wpdb->get_row($query);
    return $data;
  }
?>