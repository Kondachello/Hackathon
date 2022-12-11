<?php
  include "func_all-orders.php";
  
  session_start();

  // echo "<pre>";
  // print_r($_SESSION['search']);// = [];
  // echo "</pre>";
  //$_SESSION['search'] = [];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Students help</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="all-orders.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="../../scroll.js"></script>
  </head>
  <body>
    <div class="bg">
      <div class="header">
        <p class="logo">Sh.</p>
        <img class="img-fluid" style="width: 100%; height: 80px;" src="../../images/header.gif" alt="я джифка">
        <a class="link" href="pages/page_reg/reg_sign_in.php">Вход</a>
        <img class="photo" src="../../images/ava.jpg">
      </div>

      <br><br><br><br>

      <p class="text5 preanim-bot" style="text-align: center;">Строим самолет</p><br>
      <div class="container-fluid" style="border-radius: 20px; position:relative; height: 300px">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-3 preanim-left">
            
              <form method="post" action="action_all-orders.php">
                <p class="text1" style="margin-bottom: 10px; text-align: left">Искать по тегам</p>
                <br>
                <input class="reg_input" placeholder="   Введите тег" style="text-align: left; width: 100%;" name="tags"><br><br><br>
                <div>
                  <br><br>
                <button class="button" name="srch" value="1" >Искать</button>
              </form>
            </div>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-2 preanim-up">
            <p class="text1" style="margin-bottom: 10px; text-align: center">Фильтры</p>
            <p class="text3" style="margin-bottom: 10px; margin-left: 10px;">Цена (Р)</p>
            <input class="reg_input" placeholder="От" style="width: 50%; float: left;" name="price_at" align="left">
            <input class="reg_input" placeholder="До" style="width: 50%;" name="price_to" align="right"><br><br><br><br>
            <p class="text3" style="margin-bottom: 10px; margin-left: 10px;">Сроки (Д)</p>
            <input class="reg_input" placeholder="От" style="width: 50%; float: left;" name="date_at" align="left">
            <input class="reg_input" placeholder="До" style="width: 50%;" name="date_to" align="right">
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-4 preanim-right">
            <img class="image-fluid rounded" width="400px" src="../../images/me.jpg">
          </div>
        </div>
      </div>

      <br><br><br>

      <p class="text5 preanim-left" style="margin-left: 100px;">Результаты поиска</p><br>

      <?php 
        get_all_orders();
        
        
        if (count($_SESSION['search']) != 0) {
          for ($i = 0; $i < count($_SESSION['search']); $i++) {
            $order_i = get_order_for_id($_SESSION['search'][$i]['name']);
            // echo "<pre>";
            // print_r($order_i);// = [];
            // echo "</pre>";
            echo '<div class="preanim-left" style="background: #003E51; border-radius: 20px; position:relative; width: 90%; height: 550px; margin-left: 5%">
                    <div>
                      <img src="'.$order_i['Image'].'" style="background-size: 100% 100%; height: 200px; width: 200px; margin-left: 50px; margin-top: 50px; float:left; border-radius: 100px;">
                    </div>
                    <div style="margin-left: 35px;">
                      <br><br><br>
                      <form method="post" action="action_all-orders.php" id="form1">
                      
                      <button name="srch" value="'.$order_i['id'].'" href="../page_company-order/company-order.php" style="text-decoration: none; background-color: transparent; border-color: transparent;">
                      <pre class="text1">       '.$order_i['Title'].'</pre>
                      </button>
                      </form>
                      <pre class="text2">        Моя цель - помочь людям достигнуть своей цели !</pre>
                      <br><br><br>
                    </div>
                    <br><br><br><br>
                    <p class="text3" style="width: 90%; margin-left: 50px">'.$order_i['Description'].'</p>
                  </div><br> <br>';
          }
          
        }
      ?>
      

      <br><br><br>

      <div class="container-fluid" style="background: #000000;">
        <br><br>
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-2">
            <p class="text3">Students help (c) 2022</p>
            <p class="text4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
          </div>
          <div class="col-md-6">
          </div>
          <div class="col-md-2">
            <p class="text3">Our contacts</p>
            <p class="text4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          </div>
          <div class="col-md-1">
          </div>
        </div>
        <br><br>
      </div>
    </div>
  </body>
</html>
