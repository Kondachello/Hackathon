<?php
  session_start(); 
  // $_SESSION = [];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Students Registration</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../../index.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="bg">

      <div class="header">
        <p class="logo">Sh.</p>
      </div>

      <br><br><br><br><br><br><br>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-4" style="background: #010020; border-radius: 15px;">

            <br>
            <p class="reg_heading">Войти</p>
            <form action="reg_action.php" method="post" style="text-align:center;">
              <div align="center">
              <input type="radio" id="Student" name="cmp_or_std" value="std" style="margin-left: 10px">
              <label for="Student" style="font-family: 'Inter';
                                          font-style: normal;
                                          font-weight: 500;
                                          font-size: 15px;
                                          line-height: 19px;
                                          color: #FFFFFF;
                                          margin-left: 3px;">Студент</label>
              <input type="radio" id="Company" name="cmp_or_std" value="cmp" style="margin-left: 20px">
              <label for="Company" style="font-family: 'Inter';
                                          font-style: normal;
                                          font-weight: 500;
                                          font-size: 15px;
                                          line-height: 19px;
                                          color: #FFFFFF;
                                          margin-left: 3px;"> Компания</label>
            </div>
            <br>
              <input class="reg_input" name="user_name" placeholder="Введите имя пользователя"><br><br><br>
              <input class="reg_input" name="psw" type="password" placeholder="Введите пароль">

              <p style="color: red; margin-left: -270px; margin-bottom: 0; margin-top: 7px; font-weight: 100;">
              <?php
                if ($_SESSION['user'] == "Неверный пароль") {
                  echo "Неверный пароль";
                }
                else if ($_SESSION['user'] == "Пользователь не найден") {
                  echo "Пользователь не найден";
                }

              ?>
              </p>
              <a class="link_password" href="#">Забыли пароль?</a><br>
              <a class="link_password" href="reg_company.php">Регистрация</a><br><br>
              

              <form action="reg_action.php" method="post" align="right">
                <button class="button" name="In" value="In" >Войти</button>
              </form><br><br>

            </form>
          </div>
          
          <div class="col-md-4"></div>

        </div>
      </div>

      <br><br><br><br><br><br><br>

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
