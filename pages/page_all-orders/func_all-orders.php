<?php
    include "../../DataBase.php";

    // All orders from bd
    $orders = [];

    function parser_tags($text) {
        $res = array();
        $l = strlen($text);
        $tag = '';
        $i = 0;
        while ($i < $l) {
            if ($text[$i] != ';') {
                $tag = $tag . $text[$i];
            }
            else {
                $tag = ltrim($tag);
                array_push($res, $tag);
                $tag = '';
            }
            $i++;
        }

        return $res;
    }

    function get_all_orders() {
        global $orders;
        
        $db_connect = connect();

        $query_db = mysqli_query($db_connect, "SELECT * FROM `orders`");

        while (($table_query = mysqli_fetch_assoc($query_db))) {
            array_push($orders, $table_query);
            
        }
    }
    

    function echo_order($id) {
        global $orders;

        echo "<pre>";
        print_r($orders[$id]);
        echo "</pre>";
    }

    function get_order_for_id($id) {
        global $orders;

        for ($i = 0; $i < count($orders); $i++) {
            if ($orders[$i]['id'] == $id) {
                return $orders[$i];
            }
        }

        return false;
    }

    function is_in_array($arr, $x, &$ind) {
        $cnt = 0;
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i]['name'] == $x) {
                $ind = $i;
                return $arr[$i]['fame'];
            }
        }

        $ind = -1;
        return 0;
    }

    function get_tag_id($tag) {
        $db_connect = connect();

        $query_db = mysqli_query($db_connect, "SELECT * FROM `tags`");
        while (($table_query = mysqli_fetch_assoc($query_db))) {
            if ($table_query['tag'] == $tag) {
                return $table_query['id'];
            }
        }
        
        return false;
    }

    /* Функция для нашей сортировки */
    function compare ($v1, $v2) {
        /* Сравниваем значение по ключу date_reg */
        if ($v1['fame'] == $v2['fame']) {
            return 0;
        }

        return ($v1['fame'] > $v2['fame']) ? -1 : 1;
    }

    function tag_search($tags) {
        global $orders;

        $db_connect = connect();
        $query_db = mysqli_query($db_connect, "SELECT * FROM `orders_tags`");

        $res = [];

        $order_tags = [];
        
        while (($table_query = mysqli_fetch_assoc($query_db))) {
            array_push($order_tags, $table_query);    
        }

        for ($ot = 0; $ot < count($order_tags); $ot++) {
            for ($i = 0; $i < count($tags); $i++) {
                
                if ($order_tags[$ot]['tag_id'] == get_tag_id($tags[$i])) {
                  
                    $ind = 0;
                    $fm = is_in_array($res, $order_tags[$ot]['order_id'], $ind);
                    if ($fm != 0) {

                        if ($ind == -1) {
                            $ind = 0;
                        }
                        $fm++;
                        $res[$ind]['fame'] = $fm;
                    }
                    else {
                        $fm++;
                        array_push($res, array('fame' => $fm, 'name' => $order_tags[$ot]['order_id']));
                        
                    }
                    
                }
            }
        }
        usort($res, "compare"); // Вызываем пользовательскую сортировку
        // arsort($res);

        return $res;
    }

    // $cmp_acc = [];

    // function init() {
    //     global $cmp_acc;
        
    //     $db_connect = connect();

    //     $query_db_users_company = mysqli_query($db_connect, "SELECT * FROM `usercompany`");

    //     while (($cmp_acc_prev = mysqli_fetch_assoc($query_db_users_company))) {
    //         array_push($cmp_acc, $cmp_acc_prev);
    //     }        
    // }
?>