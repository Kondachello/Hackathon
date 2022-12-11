<?php
  include "func_stud-acc.php";

  session_start();

  init();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Students help</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../../index.css">
    <link rel="stylesheet" href="../page_sliders/sliders.css">
    
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

      <br><br><br><br>

      <div class = "preanim-up animated-up" style="background: url(../../images/std-prf-bg.jpg); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 20px; position:relative; width: 90%; height: 300px; margin-left: 5%">
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
          <form action="../page_stud-edit/stud-edit.php" align="bottom">
            <button class="button">Редактировать профиль</button>
          </form>
        </div>
      </div>

      <br><br><br><br>

      <div class="container-fluid ">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-4 preanim-left">
            <p class="text5">У меня в работе</p>

            <br>
            <div class="itc-slider itc-slider-1" data-slider="itc-slider" data-autoplay="true" data-interval="3030" data-loop="true">
              <div class="itc-slider__wrapper">
                <div class="itc-slider__items">
                  <div class="itc-slider__item">

                    <div style="background: url(../../images/1.jpg); background-size: cover; height: 600px; border-radius: 20px; position:relative;">
                      <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px;">
                      <br>
                      <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                      <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                      <br>
                      </div>
                    </div>

                  </div>


                  <div class="itc-slider__item">

                    <div style="background: url(../../images/2.jpg); background-size: cover; height: 600px; border-radius: 20px; position:relative;">
                    <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px;">
                    <br>
                    <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                    <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <br>
                    </div>

                  </div>
                </div>


                  <div class="itc-slider__item">

                    <div style="background: url(../../images/3.jpg); background-size: cover; height: 600px; border-radius: 20px; position:relative;">
                    <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px;">
                    <br>
                    <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                    <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <br>
                    </div>
                    
                  </div>

                  </div>
                </div>
              </div>
              <button class="itc-slider__btn itc-slider__btn_prev"></button>
              <button class="itc-slider__btn itc-slider__btn_next"></button>
              <ol class="itc-slider__indicators">
                <li class="itc-slider__indicator" data-slide-to="0"></li>
                <li class="itc-slider__indicator" data-slide-to="1"></li>
                <li class="itc-slider__indicator" data-slide-to="2"></li>
              </ol>
            </div>

            <br>

            <form action="pages/page_reg/reg_company.php" align="left" style="float: left;">
              <button class="button">Перейти к описанию</button>
            </form>
            <form action="../page_all-orders/all-orders.php" align="right">
              <button class="button">Все заказы</button>
            </form>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-1">
            <div class="v2"></div>
          </div>
          <div class="col-md-4 preanim-right">
            <p class="text5">Мои группы</p>

            <br>

            <div class="itc-slider itc-slider-1" data-slider="itc-slider" data-autoplay="true" data-interval="2123" data-loop="true">
              <div class="itc-slider__wrapper">
                <div class="itc-slider__items">
                  <div class="itc-slider__item">

                    <div style="background: url(../../images/1.jpg); background-size: cover; height: 600px; border-radius: 20px; position:relative; padding-bottom:;">
                    <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px;">
                    <br>
                    <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                    <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <br>
                    </div>
                  </div>

                  </div>


                  <div class="itc-slider__item">

                    <div style="background: url(../../images/2.jpg); background-size: cover; height: 600px; border-radius: 20px; position:relative; padding-bottom:;">
                    <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px;">
                    <br>
                    <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                    <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <br>
                    </div>

                  </div>
                </div>


                  <div class="itc-slider__item">

                    <div style="background: url(../../images/3.jpg); background-size: cover; height: 600px; border-radius: 20px; position:relative; padding-bottom:;">
                    <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px;">
                    <br>
                    <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                    <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <br>
                    </div>
                    
                  </div>

                  </div>
                </div>
              </div>
              <button class="itc-slider__btn itc-slider__btn_prev"></button>
              <button class="itc-slider__btn itc-slider__btn_next"></button>
              <ol class="itc-slider__indicators">
                <li class="itc-slider__indicator" data-slide-to="0"></li>
                <li class="itc-slider__indicator" data-slide-to="1"></li>
                <li class="itc-slider__indicator" data-slide-to="2"></li>
              </ol>
            </div>

            <br>

            <form action="pages/page_reg/reg_company.php" align="left">
              <button class="button">Профиль группы</button>
            </form>
          </div>
          <div class="col-md-1">
          </div>
        </div>
      </div>

      <br><br><br><br>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-4 preanim-left">
            <p class="text5">Мои проекты</p>

            <br>

            <div class="itc-slider itc-slider-1" data-slider="itc-slider" data-autoplay="true" data-interval="3546" data-loop="true">
              <div class="itc-slider__wrapper">
                <div class="itc-slider__items">
                  <div class="itc-slider__item">

                    <div style="background: url(../../images/1.jpg); background-size: cover; height: 600px; border-radius: 20px; position:relative; padding-bottom:;">
                    <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px;">
                    <br>
                    <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                    <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <br>
                    </div>
                  </div>

                  </div>


                  <div class="itc-slider__item">

                    <div style="background: url(../../images/2.jpg); background-size: cover; height: 600px; border-radius: 20px; position:relative; padding-bottom:;">
                    <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px;">
                    <br>
                    <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                    <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <br>
                    </div>

                  </div>
                </div>


                  <div class="itc-slider__item">

                    <div style="background: url(../../images/3.jpg); background-size: cover; height: 600px; border-radius: 20px; position:relative; padding-bottom:;">
                    <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px;">
                    <br>
                    <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                    <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <br>
                    </div>
                    
                  </div>

                  </div>
                </div>
              </div>
              <button class="itc-slider__btn itc-slider__btn_prev"></button>
              <button class="itc-slider__btn itc-slider__btn_next"></button>
              <ol class="itc-slider__indicators">
                <li class="itc-slider__indicator" data-slide-to="0"></li>
                <li class="itc-slider__indicator" data-slide-to="1"></li>
                <li class="itc-slider__indicator" data-slide-to="2"></li>
              </ol>
            </div>

            <br>

            <form action="pages/page_reg/reg_company.php" align="left">
              <button class="button">Перейти к описанию</button>
            </form>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-1">
            <div class="v2"></div>
          </div>
          <div class="col-md-4 preanim-right">
            <p class="text5">Мое портфолио</p>

            <br>

            <div class="itc-slider itc-slider-1" data-slider="itc-slider" data-autoplay="true" data-interval="3647" data-loop="true">
              <div class="itc-slider__wrapper">
                <div class="itc-slider__items">
                  <div class="itc-slider__item">

                    <div style="background: url(../../images/1.jpg); background-size: cover; height: 600px; border-radius: 20px; position:relative; padding-bottom:;">
                    <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px;">
                    <br>
                    <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                    <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <br>
                    </div>
                  </div>

                  </div>


                  <div class="itc-slider__item">

                    <div style="background: url(../../images/2.jpg); background-size: cover; height: 600px; border-radius: 20px; position:relative; padding-bottom:;">
                    <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px;">
                    <br>
                    <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                    <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <br>
                    </div>

                  </div>
                </div>


                  <div class="itc-slider__item">

                    <div style="background: url(../../images/3.jpg); background-size: cover; height: 600px; border-radius: 20px; position:relative; padding-bottom:;">
                    <div style="background: rgba(0, 0, 0, 0.5); position: absolute; bottom: 0px; border-radius: 0 0 20px 20px;">
                    <br>
                    <p class="text6" style="margin-left: 10%; width: 80%; ">Запрогать сайт</p>
                    <p class="text7" style="margin-left: 10%; width: 80%; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <br>
                    </div>
                    
                  </div>

                  </div>
                </div>
              </div>
              <button class="itc-slider__btn itc-slider__btn_prev"></button>
              <button class="itc-slider__btn itc-slider__btn_next"></button>
              <ol class="itc-slider__indicators">
                <li class="itc-slider__indicator" data-slide-to="0"></li>
                <li class="itc-slider__indicator" data-slide-to="1"></li>
                <li class="itc-slider__indicator" data-slide-to="2"></li>
              </ol>
            </div>

            <br>

            <form action="pages/page_reg/reg_company.php" align="left">
              <button class="button">Перейти к описанию</button>
            </form>
          </div>
          <div class="col-md-1">
          </div>
        </div>
      </div>

      <br><br><br><br><br><br><br><br>

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
