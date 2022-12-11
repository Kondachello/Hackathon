<?php
    include "../../DataBase.php";

    function get_ava_url($id) {
        $db_connect = connect();

        $query_db_users_company = mysqli_query($db_connection, "SELECT * FROM `usercompany`");

        while (($table_query = mysqli_fetch_assoc($query_db_users_company))) {
            if ($table_query['id'] == $id) {
                return $table_query['Img'];
            }
        }

        return false;
    }
?>