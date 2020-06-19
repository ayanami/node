<?php
add_theme_support('title-tag');

function add_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'));
}
add_action('wp_footer', 'add_scripts');

function get_notices_list($args)
{
    $notices_list = json_decode(wp_remote_retrieve_body(wp_remote_get("http://api_web/api/v1/notices/list?memberId={$args[0]}")), true);
    if (!in_array('newsInfoList', $notices_list[0])) {
        return '';
    }
    $news_info_list = array_slice($notices_list[0]['newsInfoList'], 0, 3);
    $notices = '';
    foreach ($news_info_list as $news_info) {
        $notices .= '<a href="#" class="list-group-item list-group-item-action">';
        $notices .= '<small class="text-sub-content">';
        $notices .= $news_info['sendDate'];
        $notices .= '</small>';
        $notices .= '<p class="mb-1 text-content">';
        $notices .= $news_info['title'];
        $notices .= '</p>';
        $notices .= '</a>';
    }
    return $notices;
}
add_shortcode('notices_list', 'get_notices_list');
