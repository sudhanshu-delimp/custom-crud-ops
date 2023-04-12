<?php
function addAccountPage()
{
    include plugin_dir_path(__FILE__) . '../template/user/controller.php';
    add_menu_page('Account', 'Account', 'manage_options', 'account', 'account_cb', 'dashicons-wordpress');
    add_submenu_page("account", "Add Account", "Add Account", "manage_options", "add-account", "add_account_cb");
}

function addCelebrityPage()
{
    include plugin_dir_path(__FILE__) . '../template/celebrity/controller.php';
    add_menu_page('Celebrities', 'Celebrities', 'manage_options', 'celebrities', 'celebrities_cb', 'dashicons-admin-users');
    add_submenu_page("celebrities", "Add Celebrity", "Add Celebrity", "manage_options", "add-celebrity", "add_celebrity_cb");
}

function addMoviePage()
{
    include plugin_dir_path(__FILE__) . '../template/movies/controller.php';
    add_menu_page('Movies', 'Movies', 'manage_options', 'movies', 'movies_cb', 'dashicons-video-alt2');
    add_submenu_page("movies", "Add Movie", "Add Movie", "manage_options", "add-movie", "add_movie_cb");
}

function addCharacterPage()
{
    include plugin_dir_path(__FILE__) . '../template/characters/controller.php';
    add_menu_page('Characters', 'Characters', 'manage_options', 'characters', 'characters_cb', 'dashicons-admin-customizer');
    add_submenu_page('characters', 'Add Character', 'Add Character', 'manage_options', 'add-character', 'add_character_cb');
}

function addShowsPage()
{
    include plugin_dir_path(__FILE__) . '../template/shows/controller.php';
    add_menu_page('Shows', 'Shows', 'manage_options', 'shows', 'shows_cb', 'dashicons-embed-video');
    add_submenu_page('shows', 'Add Show', 'Add Show', 'manage_options', 'add-show', 'add_show_cb');
}

function addImportsPage()
{
    include plugin_dir_path(__FILE__) . '../template/imports/controller.php';
    add_menu_page('Imports', 'Imports', 'manage_options', 'imports', 'imports_cb', 'dashicons-admin-plugins');
    add_submenu_page('imports', 'Add Import', 'Add Import', 'manage_options', 'add-import', 'add_import_cb');
}

function account_cb()
{
    sbs_author_blog_script();
    $html = '';
    ob_start();
    include plugin_dir_path(__FILE__) . '../template/user/list_user.php';
    $html .= ob_get_contents();
    ob_end_clean();
    echo $html;
}

function add_account_cb()
{
    sbs_author_blog_script();
    $html = '';
    ob_start();
    $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
    if ($id) {
        $value = getDetail($id);
    }
    include plugin_dir_path(__FILE__) . '../template/user/add_user.php';
    $html .= ob_get_contents();
    ob_end_clean();
    echo $html;
}

function celebrities_cb()
{
    sbs_author_blog_script();
    $html = '';
    ob_start();
    include plugin_dir_path(__FILE__) . '../template/celebrity/list_celebrity.php';
    $html .= ob_get_contents();
    ob_end_clean();
    echo $html;
}

function add_celebrity_cb()
{
    sbs_author_blog_script();
    $html = '';
    ob_start();
    $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
    if ($id) {
        $value = getCelebrityDetail($id);
    }
    include plugin_dir_path(__FILE__) . '../template/celebrity/add_celebrity.php';
    $html .= ob_get_contents();
    ob_end_clean();
    echo $html;
}

function movies_cb()
{
    sbs_author_blog_script();
    $html = '';
    ob_start();
    include plugin_dir_path(__FILE__) . '../template/movies/list_movie.php';
    $html .= ob_get_contents();
    ob_end_clean();
    echo $html;
}

function add_movie_cb()
{
    sbs_author_blog_script();
    $html = '';
    ob_start();
    $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
    if ($id) {
        $value = getMovieDetail($id);
    }
    include plugin_dir_path(__FILE__) . '../template/movies/add_movie.php';
    $html .= ob_get_contents();
    ob_end_clean();
    echo $html;
}

function characters_cb()
{
    sbs_author_blog_script();
    $html = '';
    ob_start();
    include plugin_dir_path(__FILE__) . '../template/characters/list_character.php';
    $html .= ob_get_contents();
    ob_end_clean();
    echo $html;
}

function add_character_cb()
{
    sbs_author_blog_script();
    $html = '';
    ob_start();
    $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
    if ($id) {
        $value = getCharacterDetail($id);
    }
    include plugin_dir_path(__FILE__) . '../template/characters/add_character.php';
    $html .= ob_get_contents();
    ob_end_clean();
    echo $html;
}

function shows_cb()
{
    sbs_author_blog_script();
    $html = '';
    ob_start();
    include plugin_dir_path(__FILE__) . '../template/shows/list_show.php';
    $html .= ob_get_contents();
    ob_end_clean();
    echo $html;
}

function add_show_cb()
{
    sbs_author_blog_script();
    $html = '';
    ob_start();
    $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
    if ($id) {
        $value = getShowDetail($id);
    }
    include plugin_dir_path(__FILE__) . '../template/shows/add_show.php';
    $html .= ob_get_contents();
    ob_end_clean();
    echo $html;
}

function imports_cb()
{
    sbs_author_blog_script();
    $html = '';
    ob_start();
    include plugin_dir_path(__FILE__) . '../template/imports/list_import.php';
    $html .= ob_get_contents();
    ob_end_clean();
    echo $html;
}

function add_import_cb()
{
    sbs_author_blog_script();
    $html = '';
    ob_start();
    $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
    if ($id) {
        $value = getImportDetail($id);
    }
    include plugin_dir_path(__FILE__) . '../template/imports/add_import.php';
    $html .= ob_get_contents();
    ob_end_clean();
    echo $html;
}
