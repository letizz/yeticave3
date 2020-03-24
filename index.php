<?php

require_once('functions.php');



$page_content = compile_template('index.php',
    ['categories_list' => $categories_list,
        'announcements_list' => $announcements_list,
        'lot_time_remaining' => $lot_time_remaining]);

$layout_content = compile_template('layout.php',
    ['page_title'   => 'Главная страница', 'is_auth' => $is_auth,
    'user_avatar'  => $user_avatar, 'user_name' => $user_name,
    'page_content' => $page_content,
    'categories_list' => $categories_list
]);

print($layout_content);
?>
