<?php
    include "func_reg.php";
    $url_acc_std = '../page_stud-acc/stud-acc.php';
    $url_acc_cmp = '../page_stud-acc/company-acc.php';
    $url_in = '../page_reg/reg_sign_in.php';    
    $url_reg_cmp = '../page_reg/reg_company.php';    
    $url_reg_std = '../page_reg/reg_student.php';    

    if ($_POST['In'] == 'In') {
        if (!sign_in()) {
            header('Refresh: 1; url=' . $url_in);
        } else {
            if ($_SESSION['user']['0'] == 'company') {
                header('Refresh: 1; url=' . $url_acc_cmp);
            }
            else if ($_SESSION['user']['0'] == 'student') {
                header('Refresh: 1; url=' . $url_acc_std);
            }
        }
    }
    else if ($_POST['reg_company'] == 'reg_company') {
        if (registration_company()) {
            header('Refresh: 1; url=' . $url_in);
        } else {
            header('Refresh: 1; url=' . $url_reg_cmp);
        }
    }
    else if ($_POST['reg_student'] == 'reg_student') {
        if (registration_student()) {
            header('Refresh: 1; url=' . $url_in);
        } else {
            header('Refresh: 1; url=' . $url_reg_std);
        }
    }
?>
