<?php
  include "func_stud-edit.php";

  session_start();

  init();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Students help</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="stud-edit.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../../modules/itc-slider/itc-slider.css">

<!-- JavaScript -->
    <script src="../../modules/itc-slider/itc-slider.js" defer></script>
    <script src="../../scroll.js"></script>
  </head>
  <body>    
    <div class="bg">

      <div class="header">
        <p class="logo">Sh.</p>
        <?php
        if ($_SESSION['user']['type'] == 'student') {
          echo '<a class="link" href="../page_all-orders/all-orders.php">Все задачи</a>
                <a class="link" href="pages/page_reg/reg_sign_in.php" style="margin-right:100px">Вход</a>
                <a class="link" href="pages/page_reg/reg_sign_in.php" style="margin-right:200px">Вход</a>';
        } 
        else {
          echo '<a class="link" href="pages/page_reg/reg_sign_in.php">Вход</a>';
        }

        ?>
        <img class="img-fluid" style="width: 100%; height: 80px;" src="../../images/header.gif" alt="я джифка">
        <img class="photo" src="<?php echo get_ava_url($_SESSION['user']['name']); ?>" style="border-radius: 30px;">
      </div>

      <br><br><br>

      <div class="preanim-up animated-up" style="background: url(../../images/std-prf-bg.jpg); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 20px; position:relative; width: 90%; height: 300px; margin-left: 5%">
        <div>
          <img src="<?php echo get_ava_url($_SESSION['user']['name']); ?>" style="background-size: 100% 100%; height: 200px; width: 200px; margin-left: 50px; margin-top: 50px; float:left; border-radius: 100px;">
        </div>
        <div style="float: left; margin-left: 35px;">
          <br><br><br>
          <p class="text1"><?php echo get_title($_SESSION['user']['name']); ?></p>
          <p class="text2"><?php echo get_dash($_SESSION['user']['name']); ?></p>
          <br>
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
      </div>

      <br><br><br><br>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-3 preanim-left">
          <form action="action_stud-edit.php" method="post" enctype="multipart/form-data">
            <p class="text5">Имя, Фамилия</p>
            <input class="reg_input" name="NamSurName" placeholder="Иванов Иван" style="width: 80%"><br><br>
            <p class="text5">Девиз</p>
            <input class="reg_input" name="Dash" placeholder="Моя цель" style="width: 80%">
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-2 preanim-bot">
            <p class="text5" style="text-align:center">Изменить аватар</p>
            <p class="text6" style="margin-bottom: 10px; text-align:center">Загрузите файлы</p>
            <div class="add_file">
              <input class="add_file" type="file" name="file_ava">
              <!-- <p style="margin-top: 15px;">1 main.cpp 1.3KB</p> -->
            </div>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-3 preanim-right">
            <pre class="text5">  Редактировать контакты</pre>
            <object
              type="image/svg+xml"
              data="../../svg/vk-v2-svgrepo-com.svg" width="50px" style="float: left;">
            </object>
            <input class="reg_input" name="vk" placeholder="t.me/itmo" style="width: 80%;"><br><br>
            <object
              type="image/svg+xml"
              data="../../svg/telegram-svgrepo-com.svg" width="50px" style="float: left;">
            </object>
            <input class="reg_input" name="tg" placeholder="vk.com/itmo" style="width: 80%"><br><br>
            <object
              type="image/svg+xml"
              data="../../svg/github-svgrepo-com.svg" width="50px" style="float: left;">
            </object>
            <input class="reg_input" name="git" placeholder="github.com/itmo" style="width: 80%"><br><br>
          </div>
          <div class="col-md-1">
          </div>
        </div>
      </div>

      <br><br><br><br>

      <p class="text5 preanim-left" style="margin-left: 150px">Редактировать резюме</p>

      <textarea class="add_input preanim-left" rows="5" cols="60" name="Resume"></textarea><br><br>

      <span  style="margin-left: 150px;">
        <button class="button preanim-left">Применить изменения</button>
      </span>
      </form>

      <br><br><br><br>

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
