<?php
require_once get_template_directory() . '/routes/router.php';

function add_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'));
}
add_action('wp_footer', 'add_scripts');


function get_notices_list($args)
{
    // Sessionから取得
    $memberId = 1;
    $uri = "http://api_web/api/v1/notices/list?memberId={$memberId}&displayNum={$args[0]}&pageNo={$args[1]}";
    $notices_list = json_decode(wp_remote_retrieve_body(wp_remote_get($uri)), true);
    if (!in_array('newsInfoList', $notices_list)) {
        return '';
    }
    $news_info_list = $notices_list['newsInfoList'];
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
