<?php 
function console($array=[],$die=false){
    echo '<pre style="margin-left: 200px;">';
    echo '<br>';
    print_r($array);
    echo '</pre>';
    if($die){
        die;
    }
}

function sbs_author_blog_script(){
    wp_enqueue_style('sbs_bootstrap_style','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('sbs_dataTables_bootstrap_style','https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css');
    wp_enqueue_style('sbs_datepicker_jquery_ui','https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css');
    
    wp_enqueue_script('sbs_bootstrap_script','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array('jquery'), rand(), true );
    wp_enqueue_script('sbs_dataTables_script','https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js', array('jquery'), rand(), true );
    wp_enqueue_script('sbs_dataTables_bootstrap_script','https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js', array('jquery'), rand(), true );
    wp_enqueue_script('sbs_custom_script',plugins_url('/assets/js/custom.js', __FILE__ ), array('jquery'), rand(), true );
    wp_enqueue_script('sbs_datepicker_jquery_ui_script','https://code.jquery.com/ui/1.13.2/jquery-ui.js', array('jquery'), rand(), true );
    //wp_localize_script('sbs_author_blog_script', 'DVO', array('siteurl'=>get_option('siteurl'),'admin_ajax_url'=>admin_url('admin-ajax.php')));
}
?>