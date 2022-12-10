<?php
    include "func_make-order.php";

    add_order();

    $url = 'make-order.php';
    header('Refresh: 1; url=' . $url);
?>