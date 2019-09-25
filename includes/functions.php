<?php

/**
 * Displays site name.
 */
function site_name()
{
    echo config('name');
}
/**
 * Displays site url provided in conig.
 */
function site_url()
{
    echo config('site_url');
}
/**
 * Displays site version.
 */
function site_version()
{
    echo config('version');
}
/**
 * Website navigation.
 */
function nav_menu($sep = ' | ')
{
    $nav_menu = '';
    $nav_items = config('nav_menu');
    foreach ($nav_items as $uri => $name) {
        $class = str_replace('page=', '', $_SERVER['QUERY_STRING']) == $uri ? ' active' : '';
        $url = config('site_url') . '/' . (config('pretty_uri') || $uri == '' ? '' : '?page=') . $uri;
        $nav_menu .= '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $name . '</a>' . $sep;
    }

    echo trim($nav_menu, $sep);
}

function nav_bar()
{
    $nav_menu = '';
    $nav_items = config('nav_menu');
    foreach ($nav_items as $uri => $name) {
        $class = str_replace('page=', '', $_SERVER['QUERY_STRING']) == $uri ? ' active' : '';
        //$url = config('site_url') . '/' . (config('pretty_uri') || $uri == '' ? '' : '?page=') . $uri;
        $nav_menu .= '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $name . '</a>';
    }

    echo trim($nav_menu);
}
/**
 * Displays page title. It takes the data from
 * URL, it replaces the hyphens with spaces and
 * it capitalizes the words.
 */
function page_title()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';
    echo ucwords(str_replace('-', ' ', $page));
}
/**
 * Displays page content. It takes the data from
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */
function page_content()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd() . '/' . config('content_path') . '/' . $page . '.phtml';
    if (! file_exists($path)) {
        $path = getcwd() . '/' . config('content_path') . '/404.phtml';
    }
    echo file_get_contents($path);
}
/**
 * Generates a new URL with random link location.
 */
function generate_new_comic() {
    $original_url = 'http://xkcd.com/614/info.0.json';
    $random_number = rand(1,1220);
    $new_url = substr_replace($original_url, $random_number, 16,-12);
      return ($new_url);
}
/**
 * Pulls JSON Data from URL.
 */
function get_comic() {
    $search_url = generate_new_comic();
    $json = file_get_contents($search_url);
    $obj = json_decode($json);
    echo "<h2>".$obj->title."</h2>" . "<p>Year Published: ".$obj->year."</p>";
    echo "<img src='" . $obj->img . "' width='600px' height='300px' alt='Coming Soon!'>";

}
/**
 * Get First Comic.
 */
function first_comic() {
    $search_url = 'http://xkcd.com/info.0.json';
    $json = file_get_contents($search_url);
    $obj = json_decode($json);
    echo "<h1>".$obj->title."</h1>" . "<h2>Year Published: ".$obj->year."</h2>";
    echo "<img src='" . $obj->img . "' width='1000px' height='400px' alt='Coming Soon!'>";
}
/**
 * Starts everything and displays the template.
 */
function init()
{
    require config('template_path') . '/template.php';
}
?>