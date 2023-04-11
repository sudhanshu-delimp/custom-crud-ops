<?php 
function addAccountPage() {
    include plugin_dir_path(__FILE__).'../template/user/controller.php';
    add_menu_page('Account', 'Account', 'manage_options' ,'account', 'account_cb', 'dashicons-wordpress');
    add_submenu_page("account", "Add Account", "Add Account", "manage_options", "add-account", "add_account_cb");
}

function account_cb(){
    sbs_author_blog_script();
    $html = '';
    ob_start();
    include plugin_dir_path(__FILE__).'../template/user/list_user.php';
    $html .= ob_get_contents();
    ob_end_clean();
    echo $html;
}

function add_account_cb(){
    sbs_author_blog_script();
    $html = '';
    ob_start();
    $id=(isset($_GET['id']))?$_GET['id']:0;
    if($id){
        $value = getDetail($id);
    }
    include plugin_dir_path(__FILE__).'../template/user/add_user.php';
    $html .= ob_get_contents();
    ob_end_clean();
    echo $html;
}
?>