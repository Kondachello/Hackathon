<?php
  include "func_company-order.php";

  session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Students help</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="company-order.css">

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

      <div class="preanim-right" style="background: url(../../images/1.jpg); background-size: 100% 100%; background-repeat: no-repeat; height: 100%; border-radius: 20px; position:relative; width: 90%; height: 300px; margin-left: 5%">
        <div>
          <img src="../../images/jr.jpg" style="background-size: 100% 100%; height: 200px; width: 200px; margin-left: 50px; margin-top: 50px; float:left; border-radius: 100px;">
        </div>
        <div style="float: left; margin-left: 35px;">
          <br><br><br>
          <p class="text1">Apple</p>
          <p class="text2">Моя цель</p>
          <br><br><br>
          <a href="http://vk.com" class="svg">
            <object
              type="image/svg+xml"
              data="../../svg/vk-v2-svgrepo-com.svg" width="50px">
            </object>
          </a>
          <a href="http://t.me" class="svg">
            <object
              type="image/svg+xml"
              data="../../svg/telegram-svgrepo-com.svg" width="50px">
            </object>
          </a>
          <a href="http://github.com" class="svg">
            <object
              type="image/svg+xml"
              data="../../svg/github-svgrepo-com.svg" width="50px">
            </object>
          </a>
        </div>
        <div style="float: right; margin-right: 50px; margin-top: 185px;">
          <br><br>
          <form action="pages/page_reg/reg_student.php" align="bottom">
            <button class="button">Редактировать профиль</button>
          </form>
        </div>
      </div>

      <br><br><br><br>

      <p class="text5 preanim-left" style="margin-left: 200px;">Строим самолет</p><br>
      <div class="container-fluid" style="background: url(../../images/bg.jpg); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 20px; position:relative; width: 80%; height: 300px; margin-left: 10%">
        <div class="row">
          <div class="col-md-7 preanim-left">
            <p class="text1">Описание проекта</p>
            <p class="text2"><?php ?>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. File ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. File ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. File ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. File ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-3 preanim-right">
            <p class="text1">Приложения</p>
            <div class="add_file">
              <a href="<?php echo get_link_file_rar(); ?>"><p style="margin-top: 15px;">1 main.cpp 1.3KB</p></a>
            </div>
            <br>
          </div>
          <div class="col-md-1">
          </div>
        </div>
      </div>

      <br><br><br>

      <p class="text1 preanim-up" style="margin-left: 200px;">Отклики</p><br>

      <div style="background: #003E51; border-radius: 20px; position:relative; width: 90%; height: 550px; margin-left: 5%">
        <div>
          <img class="preanim-left" src="../../images/me.jpg" style="background-size: 100% 100%; height: 200px; width: 200px; margin-left: 50px; margin-top: 50px; float:left; border-radius: 100px;">
        </div>
        <div class="preanim-right">
          <br><br><br>
          <pre class="text1">    Николай Гавришок, Web designer</pre>
          <pre class="text2">        Моя цель - помочь людям достигнуть своей цели !</pre>
          <br><br><br>
        </div>
        <br><br><br><br>
        <p class="text3 preanim-bot" style="width: 90%; margin-left: 50px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. File ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. File ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. File ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. File ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
      </div>

      <div style="margin-left: 110px;">
        <br><br>
        <form action="../page_order/make-order.php">
          <button class="button preanim-left">Сделать отклик</button>
        </form>
      </div>

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
          <div class="col-md-3">
            <p class="text3">Our contacts</p>
            <p class="text4">tel: 8-800-555-35-35<br/>лучше позвонить чем отсосать<br/>e-mail: her@pizda.hub<br/>t.me/hui_pizda</p>
          </div>
          <div class="col-md-1">
          </div>
        </div>
        <br><br>
      </div>
    </div>
  </body>
</html>
