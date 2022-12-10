<?php
    $file_name = $_FILES['order_avatar']['name'];
    $file_size = $_FILES['order_avatar']['size'];
    $file_tmp = $_FILES['order_avatar']['tmp_name'];

    $url_avatars = "C:\Users\Ольга\Desktop\Kolya olymp\OpenServer\OpenServer\domains\ictHACK5\Hackathon\Hackathon\Avatars\\";

    echo $file_name;    
    echo "<br>";
    echo $file_tmp;    

    echo "<br>";
    if (move_uploaded_file($file_tmp, $url_avatars . $file_name)) {
        echo "sosi";
        echo "<br>";
    }
    else {
        echo "Error";
    }
?>