<?php
    include "../../DataBase.php";

    function bind_tag_order($order_id, $tag_id) {
        $db_connect = connect();

        $sql_query = "INSERT INTO `orders_tags` (`id`, `tag_id`, `order_id`) 
            VALUES (NULL, '".$tag_id."', '".$order_id."');";

        $return_query = mysqli_query($db_connect, $sql_query);        
        if ($return_query) {
            return true;
        }
        else {
            return false;
        }
    }

    function get_tag_id($tag) {
        $db_connect = connect();

        $query_db = mysqli_query($db_connect, "SELECT * FROM `tags`");
        while (($table_query = mysqli_fetch_assoc($query_db))) {
            if ($table_query['tag'] == $tag) {
                return $table_query['id'];
            }
        }
        


    }

    function add_order() {
        // Connect to db
        $db_connect = connect();

        // For index name file
        $id = 0;
        $query_db = mysqli_query($db_connect, "SELECT * FROM `orders`");
        while (($table_query = mysqli_fetch_assoc($query_db))) {
            $id = $table_query['id'];
        }
        $id++;

        // Get info from form
        $title = $_POST['title'];
        $Description = $_POST['Description'];
        $Requare = $_POST['Requare'];
        // files
        $url_avatars = "../../Data/Orders/Avatars/";
        $url_files = "../../Data/Orders/Rars/";

        $file_order_avatar_name = $id . '_' . $_FILES['order_avatar']['name'];
        $file_order_avatar_tmp = $_FILES['order_avatar']['tmp_name'];
        $file_order_avatar_size = $_FILES['order_avatar']['size'];
        
        $file_order_rar_name = $id . '_' . $_FILES['order_rar']['name'];
        $file_order_rar_tmp = $_FILES['order_rar']['tmp_name'];
        $file_order_rar_size = $_FILES['order_rar']['size'];

        $price_at = $_POST['price_at'];
        $price_to = $_POST['price_to'];
        $date_at = $_POST['date_at'];
        $date_to = $_POST['date_to'];
        $tags = $_POST['tags'];


        $path_ava = $url_avatars . $file_order_avatar_name;
        $path_rar = $url_files . $file_order_rar_name;
        // load files
        // avatars
        if (isset($_FILES['order_avatar']) and move_uploaded_file($file_order_avatar_tmp, $url_avatars . $file_order_avatar_name)) {
            ;
        }
        else {
            // echo "Не удалось загрузить " . $file_order_avatar_name;
            $path_ava = 'none file';
        }
        // rars
        if (isset($_FILES['order_rar']) and move_uploaded_file($file_order_rar_tmp, $url_files . $file_order_rar_name)) {
            ;
        }
        else {
            // echo "Не удалось загрузить " . $file_order_rar_name;
            $path_rar = 'none file';
        }


        // sql query
        $sql_query = "INSERT INTO `orders` (`id`, `Title`, `Tags`, `Description`, `Requare`, `Image`, `Files`, `Price`, `Dedline`, `Developers`) 
            VALUES (NULL, '".$title."', '".$tags."', '".$Description."', '".$Requare."', '".$path_ava."', '".$path_rar."', '100 - 101', '3-4', 'dfdgsdfgsdfgsdfg');";

        $return_query = mysqli_query($db_connect, $sql_query);
        if ($return_query) {
            $_SESSION['order_make'] = "Задача добавленна";
            return true;
        }
        else {
            $_SESSION['user'] = "Не удалось добавтиь задачу. Что-то пошло не так. Попробуйте позже";
            return false;
        }

    }
?>