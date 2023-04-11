<?php 
 if (isset($_POST['insert'])) {
    global $wpdb;
    $default =[
        'name'=>'',
        'email'=>''
    ];
    $insert = shortcode_atts($default,$_POST);
    $wpdb->insert('wp_userstable',$insert);
    wp_redirect('?page=account');
  }
  if (isset($_POST['update'])) {
    global $wpdb;
    $default =[
        'name'=>'',
        'email'=>''
    ];
    $update = shortcode_atts($default,$_POST);
    $wpdb->update('wp_userstable',$update,['user_id'=>$_POST['row_id']]);
    wp_redirect('?page=account');
  }

  function getDetail($id){
    global $wpdb;
    $query =  "SELECT * FROM wp_userstable WHERE user_id={$id}";
    $data = $wpdb->get_row($query);
    return $data;
  }
?>