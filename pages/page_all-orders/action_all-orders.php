<?php
    include "func_all-orders.php";
    
    session_start();

    // $_SESSION['search'] = [];

    $tags = $_POST['tags'];

    get_all_orders();
    $r = parser_tags($tags);
    // print_R($r);
    $_SESSION['search'] = tag_search($r);


    $url = 'all-orders.php';
    header('Refresh: 1; url=' . $url);


        
?>