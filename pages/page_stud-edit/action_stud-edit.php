<?php
    include "../../DataBase.php";

    session_start();

    // Get from foem
    $NamSurName = $_POST['NamSurName'];
    $Dash = $_POST['Dash'];
    $vk = $_POST['vk'];
    $tg = $_POST['tg'];
    $git = $_POST['git'];
    $Resume = $_POST['Resume'];

    $file_ava_name = $_FILES['file_ava']['name'];
    $file_ava_tmp = $_FILES['file_ava']['tmp_name'];
    
    $ava_path = '../../Data/Students/Avatars/';

    if (isset($_FILES['file_ava']) and move_uploaded_file($file_ava_tmp, $ava_path . $file_ava_name)) {
            ;
        }
    else {
        // echo "Не удалось загрузить " . $file_order_avatar_name;
        $ava_path = 'none file';
    }

    $contacts = '';
    $contacts = $tg . ';' . $vk . ';' .$git. ';';

    $sql = "UPDATE `userstudent` 
        SET `Img` = '".$ava_path . $file_ava_name."', `Contacts` = '".$contacts."', `SureName` = '".$NamSurName."', `ResumeStack` = '".$Resume."' 
        WHERE `UserName` = '".$_SESSION['user']['name']."';";

    $db_connect = connect();

    mysqli_query($db_connect, $sql);
    


?>