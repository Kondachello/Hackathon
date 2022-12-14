<?php
  include "func_company-acc.php";

  session_start();

  init();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Students help</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="company-acc.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="../../scroll.js"></script>
  </head>
  <body>
    <div class="bg">
      <div class="header">
        <p class="logo">Sh.</p>
        <img class="img-fluid" style="width: 100%; height: 80px;" src="../../images/header.gif" alt="я джифка">
        <?php
        if ($_SESSION['user']['type'] == 'company') {
        echo '<a class="link" href="../page_all-orders/all-orders.php">Все задачи</a>
              <a class="link" href="pages/page_reg/reg_sign_in.php" style="margin-right:100px">Вход</a>
              <a class="link" href="pages/page_reg/reg_sign_in.php" style="margin-right:200px">Вход</a>';
        } 
        else {
          echo '<a class="link" href="pages/page_reg/reg_sign_in.php">Вход</a>';
        }
        
        ?>
        <img class="photo" src="<?php echo get_ava_url($_SESSION['user']['name']); ?>" style="border-radius: 30px;">
      </div>

      <br><br><br><br>

      <div class="preanim-left" style="background: url(../../images/cmp-prf-bg.jpg); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 20px; position:relative; width: 90%; height: 300px; margin-left: 5%">
        <div>
          <img src="<?php echo get_ava_url($_SESSION['user']['name']); ?>" style="background-size: 100% 100%; height: 200px; width: 200px; margin-left: 50px; margin-top: 50px; float:left; border-radius: 100px;">
        </div>
        <div style="float: left; margin-left: 35px;">
          <br><br><br>
          <p class="text1"><?php echo get_title($_SESSION['user']['name']); ?></p>
          <p class="text2"><?php echo get_dash($_SESSION['user']['name']); ?></p>
          <br>
          <a href="<?php echo get_link_vk($_SESSION['user']['name']); ?>" class="svg">
            <object
              type="image/svg+xml"
              data="../../svg/vk-v2-svgrepo-com.svg" width="50px">
            </object>
          </a>
          <a href="<?php echo get_link_tg($_SESSION['user']['name']); ?>" class="svg">
            <object
              type="image/svg+xml"
              data="../../svg/telegram-svgrepo-com.svg" width="50px">
            </object>
          </a>
          <a href="<?php echo get_link_git($_SESSION['user']['name']); ?>" class="svg">
            <object
              type="image/svg+xml"
              data="../../svg/github-svgrepo-com.svg" width="50px">
            </object>
          </a>
        </div>
        <div style="float: right; margin-right: 50px; margin-top: 150px;">
          <br><br>
          <form action="../page_company-edit/company-edit.php" align="bottom">
            <button class="button">Редактировать профиль</button>
          </form>
        </div>
      </div>

      <br><br><br><br>

      <div class="container-fluid">
        <div class="tabs">
          <nav class="tabs__items">
            <a href="#tab_01" class="tabs__item"><span>Наши проекты</span></a>
            <a href="#tab_02" class="tabs__item"><span>Мелкие задания</span></a>
            <a href="#tab_03" class="tabs__item"><span>Инвестировать</span></a>
          </nav>
          <div class="tabs__body" style="">
            <div id="tab_01" class="tabs__block" style="border-radius: 0 0 10px 10px; height: 800px; ">
              <br><br><br><br>
              <a class="preanim-left" href="../page_company-order/company-order.php" style="background: url(../../images/1.jpg); background-size: cover; background-repeat: no-repeat; height: 80%; border-radius: 20px; position:relative; width: 20%; float: left; margin-left: 6%;">
                <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px; width: 100%">
                  <br>
                  <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                  <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                  <br>
                </div>
              </a>
              <a class="preanim-bot" href="../page_company-order/company-order.php" style="background: url(../../images/1.jpg); background-size: cover; background-repeat: no-repeat; height: 80%; border-radius: 20px; position:relative; width: 20%; float: left; margin-left: 14%;">
                <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px; width: 100%">
                  <br>
                  <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                  <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                  <br>
                </div>
              </a>
              <a class="preanim-right" href="../page_company-order/company-order.php" style="background: url(../../images/1.jpg); background-size: cover; background-repeat: no-repeat; height: 80%; border-radius: 20px; position:relative; width: 20%; float: left; margin-left: 14%;">
                <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px; width: 100%">
                  <br>
                  <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                  <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                  <br>
                </div>
              </a>
            </div>
            <div id="tab_02" class="tabs__block" style="border-radius: 0 0 10px 10px; height: 800px;">
              <br><br><br><br>
              <a class="preanim-left" href="../page_company-order/company-order.php" style="background: url(../../images/1.jpg); background-size: cover; background-repeat: no-repeat; height: 80%; border-radius: 20px; position:relative; width: 20%; float: left; margin-left: 6%;">
                <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px; width: 100%">
                  <br>
                  <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                  <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                  <br>
                </div>
              </a>
              <a class="preanim-bot" href="../page_company-order/company-order.php" style="background: url(../../images/1.jpg); background-size: cover; background-repeat: no-repeat; height: 80%; border-radius: 20px; position:relative; width: 20%; float: left; margin-left: 14%;">
                <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px; width: 100%">
                  <br>
                  <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                  <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                  <br>
                </div>
              </a>
              <a class="preanim-right" href="../page_company-order/company-order.php" style="background: url(../../images/1.jpg); background-size: cover; background-repeat: no-repeat; height: 80%; border-radius: 20px; position:relative; width: 20%; float: left; margin-left: 14%;">
                <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px; width: 100%">
                  <br>
                  <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                  <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                  <br>
                </div>
              </a>
              <div style="margin-left: 110px; margin-top: 590px;">
                <br><br>
                <form action="../page_order/make-order.php">
                  <button class="button">Сделать заказ</button>
                </form>
              </div>
            </div>
            <div id="tab_03" class="tabs__block" style="border-radius: 0 0 10px 10px; height: 800px;">
              <br><br><br><br>
              <a class="preanim-left" href="../page_company-order/company-order.php" style="background: url(../../images/1.jpg); background-size: cover; background-repeat: no-repeat; height: 80%; border-radius: 20px; position:relative; width: 20%; float: left; margin-left: 6%;">
                <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px; width: 100%">
                  <br>
                  <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                  <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                  <br>
                </div>
              </a>
              <a class="preanim-bot" href="../page_company-order/company-order.php" style="background: url(../../images/1.jpg); background-size: cover; background-repeat: no-repeat; height: 80%; border-radius: 20px; position:relative; width: 20%; float: left; margin-left: 14%;">
                <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px; width: 100%">
                  <br>
                  <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                  <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                  <br>
                </div>
              </a>
              <a class="preanim-right" href="../page_company-order/company-order.php" style="background: url(../../images/1.jpg); background-size: cover; background-repeat: no-repeat; height: 80%; border-radius: 20px; position:relative; width: 20%; float: left; margin-left: 14%;">
                <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px; width: 100%">
                  <br>
                  <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                  <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                  <br>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

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
