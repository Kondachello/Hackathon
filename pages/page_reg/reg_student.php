<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Students Registration</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../../index.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="../../scroll.js"></script>
  </head>
  <body>
    <div class="bg">

      <div class="header">
        <p class="logo">Sh.</p>
        <img class="img-fluid" style="width: 100%; height: 80px;" src="../../images/header.gif" alt="я джифка">
        <img class="photo" src="../../images/ava.jpg" style="border-radius: 30px">
      </div>

      <br><br><br>

      <div class="container-fluid preanim-right animated-right">
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-4" style="background: #010020; border-radius: 15px;">

            <br>
            <p class="reg_heading">Регистрация студента</p>
            <br>
            <form action="reg_action.php" method="post" style="text-align:center;">

              <input class="reg_input" placeholder="Введите Ваше имя и фамилию" name="surname_name"><br><br><br>
              <input class="reg_input" placeholder="Введите имя пользователя" name="user_name"><br><br><br>
              <input class="reg_input" placeholder="Введите Email" name="email"><br><br><br>
              <input class="reg_input" type="password" placeholder="Введите пароль" name="psw"><br><br><br>
              <input class="reg_input" type="password" placeholder="Повторите пароль" name="psw-repeat">
              <p style="color: red; margin-left: -270px; margin-bottom: 0; margin-top: 7px; font-weight: 100;">
              <?php
                
                if ($_SESSION['user'] == "Не удалось зарегестрироваться. Что-то пошло не так. Попробуйте позже") {
                  echo "Не удалось зарегестрироваться. Что-то пошло не так. Попробуйте позже";
                }
                else if ($_SESSION['user'] == "Пароли не совпадают") {
                  echo "Пароли не совпадают";
                }
                else if ($_SESSION['user'] == "Пользователь уже существует Придумайте другой username") {
                  echo "Пользователь уже существует";
                }
                else {
                  echo "<br>";
                }
              ?>
              </p>
              <form action="reg_action.php" method="post" align="right">
                <button class="button" name="reg_student" value="reg_student">Зарегистрироваться</button>
              </form><br><br>

            </form>
          </div>

          <div class="col-md-4">
          </div>

        </div>
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
