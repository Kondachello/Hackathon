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

      <br><br><br>

      <div class="container-fluid">
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
              <input class="reg_input" type="password" placeholder="Повторите пароль" name="psw-repeat"><br><br><br>

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
