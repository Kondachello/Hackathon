<?php
    include "func_all-orders.php";
    
    session_start();

    if ($_POST['srch'] == '1') {
        $tags = $_POST['tags'];

        get_all_orders();
        $r = parser_tags($tags);
        // print_R($r);
        $_SESSION['search'] = tag_search($r);


        $url = 'all-orders.php';
        header('Refresh: 1; url=' . $url);
    }
    else {
        $_SESSION['order'] = $_POST['srch'];
        $url = '../page_company-order/company-order.php';
        header('Refresh: 1; url=' . $url);

    }


        
?>