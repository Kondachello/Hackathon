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
  </head>
  <body>
    <div class="bg">

      <div class="header">
        <p class="logo">Sh.</p>
      </div>

      <br><br><br>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-4" style="background: #010020; border-radius: 15px;">

            <br>
            <p class="reg_heading">Регистрация компании</p>
            <br>
            <form action="reg_action.php" method="post" style="text-align:center;">

              <input class="reg_input" placeholder="Введите Ваше название" name="title"><br><br><br>
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
                <button class="button" name="reg_company" value="reg_company">Зарегистрироваться</button>
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
          <div class="col-md-3">
            <p class="text3">Our contacts</p>
            <p class="text4">tel: 8-800-555-35-35<br/>лучше позвOOOOOOOOOOOOOонить чем отсосать<br/>e-mail: her@pizda.hub<br/>t.me/hui_pizda</p>
          </div>
          <div class="col-md-1">
          </div>
        </div>
        <br><br>
      </div>
    </div>
  </body>
</html>
