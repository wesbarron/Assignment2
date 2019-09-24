<?php
/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Random Comic',
        'pretty_uri' => false,
        'site_url' => 'https://assignment2randomcomic.herokuapp.com/',
        'nav_menu' => [
            '' => 'Home',
            'about-me' => 'About Me',
            'diy-conversion' => 'DIY Conversion'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
?>
