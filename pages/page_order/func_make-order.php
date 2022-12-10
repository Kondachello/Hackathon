<?php
    include "../../DataBase.php";

    function add_order() {
        // Connect to db
        $db_connect = connect();

        // Get info from form
        $title = $_POST['title'];
        $Description = $_POST['Description'];
        $Requare = $_POST['Requare'];
        // files
        $url_avatars = "C:\Users\Ольга\Desktop\Kolya olymp\OpenServer\OpenServer\domains\ictHACK5\Hackathon\Hackathon\Avatars\\";
        $url_files = "C:\Users\Ольга\Desktop\Kolya olymp\OpenServer\OpenServer\domains\ictHACK5\Hackathon\Hackathon\Avatars\\";

        $file_order_avatar_name = $_FILES['order_avatar']['name'];
        $file_order_avatar_tmp = $_FILES['order_avatar']['tmp_name'];
        $file_order_avatar_size = $_FILES['order_avatar']['size'];
        
        $file_order_rar_name = $_FILES['order_rar']['name'];
        $file_order_rar_tmp = $_FILES['order_rar']['tmp_name'];
        $file_order_rar_size = $_FILES['order_rar']['size'];

        $price_at = $_POST['price_at'];
        $price_to = $_POST['price_to'];
        $date_at = $_POST['date_at'];
        $date_to = $_POST['date_to'];
        $tags = $_POST['tags'];

        // load files
        // avatars
        if (move_uploaded_file($file_order_avatar_tmp, $url_avatars . $file_order_avatar_name)) {
            ;
        }
        else {
            echo "Не удалось загрузить " . $file_order_avatar_name;
            return false;
        }
        // rars
        if (move_uploaded_file($file_order_rar_tmp, $url_files . $file_order_rar_name)) {
            ;
        }
        else {
            echo "Не удалось загрузить " . $file_order_rar_name;
            return false;
        }

        // sql query
        $sql_query = "INSERT INTO `orders` (`id`, `Title`, `Tags`, `Description`, `Requare`, `Image`, `Files`, `Price`, `Dedline`, `Developers`) 
            VALUES (NULL, '".$title."', '".$tags."', '".$Description."', '".$Requare."', '".$url_avatars . $file_order_avatar_name."', '".$url_files . $file_order_rar_name."', '100 - 101', '3-4', 'dfdgsdfgsdfgsdfg');";

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