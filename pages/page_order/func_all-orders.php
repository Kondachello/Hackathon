<?php
    include "../../DataBase.php";

    // All orders from bd
    $orders = array(array());

    function get_all_orders() {
        global $orders;
        
        $db_connect = connect();

        $query_db = mysqli_query($db_connect, "SELECT * FROM `orders`");

        $i = 0;
        while (($table_query = mysqli_fetch_assoc($query_db))) {
            $orders[$i] = $table_query;
            $i++;
        }
    }
    

    function echo_order($id) {
        global $orders;

        echo "<pre>";
        print_r($orders[$id]);
        echo "</pre>";
    }
?>