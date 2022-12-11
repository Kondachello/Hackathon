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

  </head>
  <body>    
    <div class="bg">

      <div class="header">
        <p class="logo">Sh.</p>
        <a class="link" href="#">Вход</a>
        <img class="photo" src="../../images/ava.jpg">
      </div>

      <div style="background: url(../../images/std-prf-bg.jpg); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 20px; position:relative; width: 90%; height: 300px; margin-left: 5%">
        <div>
          <img src="../../images/me.jpg" style="background-size: 100% 100%; height: 200px; width: 200px; margin-left: 50px; margin-top: 50px; float:left; border-radius: 100px;">
        </div>
        <div style="float: left; margin-left: 35px;">
          <br><br><br>
          <p class="text1">Николай Гавришок, Web-Designer</p>
          <p class="text2">Моя цель - помочь людям достигнуть своей цели!</p>
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
        <div style="float: right; margin-right: 50px; margin-top: 150px;">
          <br><br>
          <form action="pages/page_reg/reg_student.php" align="bottom">
            <button class="button">Редактировать профиль</button>
          </form>
        </div>
      </div>

      <br><br><br><br>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-3">
            <p class="text5">Имя, Фамилия</p>
            <input class="reg_input" name="" placeholder="Иванов Иван" style="width: 80%"><br><br>
            <p class="text5">Девиз</p>
            <input class="reg_input" name="" placeholder="Моя цель" style="width: 80%">
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-2">
            <p class="text5" style="text-align:center">Изменить аватар</p>
            <p class="text6" style="margin-bottom: 10px; text-align:center">Загрузите файлы</p>
            <div class="add_file" style="width: 450px;
  border-radius: 10px;
  height: 60px;
  width: 100%;
  color: #FFFFFF;
  font-family: 'Inter-Thin';
  font-style: normal;
  font-weight: 700;
  font-size: 25px;
  line-height: 24px;
  text-align: center;
  background: #666666;
  border: solid #666666;
  border-width: 1px;">
              <p style="margin-top: 15px;">1 main.cpp 1.3KB</p>
            </div>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-3">
            <pre class="text5">     Редактировать контакты</pre>
            <object
              type="image/svg+xml"
              data="../../svg/vk-v2-svgrepo-com.svg" width="50px" style="float: left;">
            </object>
            <input class="reg_input" name="" placeholder="t.me/itmo" style="width: 80%;"><br><br>
            <object
              type="image/svg+xml"
              data="../../svg/telegram-svgrepo-com.svg" width="50px" style="float: left;">
            </object>
            <input class="reg_input" name="" placeholder="vk.com/itmo" style="width: 80%"><br><br>
            <object
              type="image/svg+xml"
              data="../../svg/github-svgrepo-com.svg" width="50px" style="float: left;">
            </object>
            <input class="reg_input" name="" placeholder="github.com/itmo" style="width: 80%"><br><br>
          </div>
          <div class="col-md-1">
          </div>
        </div>
      </div>

      <br><br><br><br>

      <p class="text5" style="margin-left: 150px">Редактировать резюме</p>

      <textarea class="add_input" rows="5" cols="60" name="Require" style="max-width: 450px;
  min-width: 450px;
  border-radius: 35px;
  width: 450px;
  color: #FFFFFF;
  font-family: 'Inter-Thin';
  font-style:
  italic;
  font-weight: 700;
  font-size: 25px;
  line-height: 24px;
  text-align: center;
  background: transparent;
  border: solid #8901FF;
  border-width: 1px;
  margin-top: 10px;
  margin-left: 150px;"></textarea><br><br>

      <form action="../page_all-orders/all-orders.php" style="margin-left: 150px;">
        <button class="button">Применить изменения</button>
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
