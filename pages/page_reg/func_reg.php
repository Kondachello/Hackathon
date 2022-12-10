<?php
    include '../../dataBase.php';
    session_start();


    function registration_student() {
        // connect to db
        $db_connection = connect();

        // Get info from input form
        $surname_name = $_POST['surname_name'];
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $psw = md5($_POST['psw']);
        $psw_rep = md5($_POST['psw-repeat']);

        $query_db = mysqli_query($db_connection, "SELECT * FROM `userstudent`");
        
        $fl_is_in_bd = false;
        while (($table_query = mysqli_fetch_assoc($query_db))) {
            if ($table_query['Password'] == $user_name) {
                $_SESSION['user'] = "Пользователь уже существует Придумайте другой username";
                $fl_is_in_bd = true;
                return false;
                break;
            }
        }

        if (!$fl_is_in_bd) {
            if ($psw != $psw_rep) {
                $_SESSION['user'] = "Пароли не совпадают";
                return false;
            }
            else {
                $qery_to_reg = "INSERT INTO `userstudent` (`id`, `UserName`, `Email`, `Password`, `Img`, `SureName`, `ResumeStack`, `OrserHistory`, `Contacts`, `Tags`, `Projects`, `QrCode`) 
                VALUES (NULL, '".$user_name."', '".$email."', '".$psw."', '', '".$surname_name."', '', '', '', '', '', '')";
                $return = mysqli_query($db_connection, $qery_to_reg);
                if ($return) {
                    $_SESSION['user'] = "Вы зарегестрировались";
                    return true;
                }
                else {
                    $_SESSION['user'] = "Не удалось зарегестрироваться. Что-то пошло не так. Попробуйте позже";
                    return false;
                }

            }
        }

        return true;
    }

    function registration_company() {
        // connect to DB
        $db_connection = connect();

        $_SESSION['user'] = '';

        // Get info from input form
        $title = $_POST['title'];
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $psw = md5($_POST['psw']);
        $psw_rep = md5($_POST['psw-repeat']);

        $query_db = mysqli_query($db_connection, "SELECT * FROM `usercompany`");

        $fl_is_in_bd = false;
        while (($table_query = mysqli_fetch_assoc($query_db))) {
            if ($table_query['UserName'] == $user_name) {
                $_SESSION['user'] = "Пользователь уже существует Придумайте другой username";
                $fl_is_in_bd = true;
                return false;
                break;
            }
        }

        if (!$fl_is_in_bd) {
            if ($psw != $psw_rep) {
                $_SESSION['user'] = "Пароли не совпадают";
                return false;
            }
            else {
                $qery_to_reg = "INSERT INTO `usercompany` (`id`, `UserName`, `Email`, `Password`, `Img`, `Title`, `Discription`, `Orders`, `Investment`, `Contacts`, `Tags`, `QrCode`) 
            VALUES (NULL, '".$user_name."', '".$email."', '".$psw."', '', '".$title."', '', '', '', '', '', '')";
                $return = mysqli_query($db_connection, $qery_to_reg);
                if ($return) {
                     $_SESSION['user'] = "Вы зарегестрировались";
                }
                else {
                    $_SESSION['user'] = "Не удалось зарегестрироваться. Что-то пошло не так. Попробуйте позже";
                }

            }
        }


        return true;
    }

    function sign_in() {
        // connect to DB
        $db_connection = connect();

        // get info from form
        $user_name = $_POST['user_name'];
        $psw = md5($_POST['psw']);

        $query_db_users_student = mysqli_query($db_connection, "SELECT * FROM `userstudent`");
        $query_db_users_company = mysqli_query($db_connection, "SELECT * FROM `usercompany`");

        $if_in_st = false;
        while (($table_query = mysqli_fetch_assoc($query_db_users_student))) {
            if ($table_query['UserName'] == $user_name) {
                $if_in_st = true;
                if ($table_query['Password'] == $psw) {
                    $_SESSION['user'] = ['student', $user_name];
                    break;
                } 
                else {
                    $_SESSION['user'] = 'Неверный пароль';
                    $if_in_st = false;
                    return false;
                }
            }
        }

        if (!$if_in_st) {
            while (($table_query = mysqli_fetch_assoc($query_db_users_company))) {
                if ($table_query['UserName'] == $user_name) {
                    $if_in_st = true;
                    if ($table_query['Password'] == $psw) {
                        $_SESSION['user'] = ['company', $user_name];
                        break;
                    } 
                    else {
                        $_SESSION['user'] = 'Неверный пароль';
                        $if_in_st = false;
                        return false;
                    }
                }
            }
        }

        if (!$if_in_st) {
            $_SESSION['user'] = "Пользователь не найден";
            //echo '<a href="../page_reg/reg_student.php" class="link">Регистрация студенту</a><br>';
            //echo '<a href="../page_reg/reg_company.php" class="link">Регистрация компании</a><br>';
        }
        else {
            // echo "Привет" . $user_name;
            return true;
        }
    }
?>