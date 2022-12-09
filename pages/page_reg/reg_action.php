<?php
    include "func_reg.php";

    $url = '../../index.php';
    header('Refresh: 2; url=' . $url);

    if ($_POST['In'] == 'In') {
        sign_in();
    }
    else if ($_POST['reg_company'] == 'reg_company') {
        registration_company();
    }
    else if ($_POST['reg_student'] == 'reg_student') {
        registration_student();
    }
?>