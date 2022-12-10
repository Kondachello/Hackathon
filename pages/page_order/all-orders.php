<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Students Registration</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="make-order.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <?php
        include "func_all-orders.php";
        
        get_all_orders();
        echo_order(0);
        echo_order(1);
        echo_order(2);
    ?>
  </body>
</html>