<?php
    include "func_reg.php";
    $url = '../page_stud-acc/stud-acc.php';
    header('Refresh: 2; url=' . $url);

    
    if ($_POST['In'] == 'In') {
        sign_in();
        
        //$url = '../page_stud-acc/stud-acc.php';
        //header('Refresh: 2; url=' . $url);
    }
    else if ($_POST['reg_company'] == 'reg_company') {
        registration_company();
    }
    else if ($_POST['reg_student'] == 'reg_student') {
        registration_student();
    }
?>