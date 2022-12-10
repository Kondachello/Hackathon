<?php
  session_start();
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
        <img class="img-responsive" style="width: 100%; height: 80px;" src="https://im.wampi.ru/2022/12/09/ij0LMGcdee5ff9805d8104.gif" alt="я джифка">
        <a class="link" href="pages/page_reg/reg_sign_in.php">Вход</a>
        <img class="photo" src="images/ava.jpg">
      </div>

      <br><br><br><br>

      <div class="container-fluid">
        <div class="heading">
          <p>Создать задачу</p>
        </div>
      </div>

      <br><br><br>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-6">
            <p class="text6" style="margin-left: 40px; margin-bottom: 10px">Напишите название задачи</p>
            <input class="reg_input" type="title"><br><br>
            <p class="text6" style="margin-left: 40px; margin-bottom: 10px">Напишите описание проекта</p>
            <textarea rows="3" cols="60" name="Description" style="max-width: 450px; min-width: 450px; border-radius: 35px; height: 60px; width: 450px; color: #FFFFFF; font-family: 'Inter-Thin'; font-style: italic; font-weight: 700; font-size: 25px; line-height: 24px; text-align: center; background: transparent; border: solid #8901FF; border-width: 1px;"></textarea><br><br>
            <p class="text6" style="margin-left: 40px; margin-bottom: 10px">Опишите, кто Вам нужен</p>
            <textarea rows="3" cols="60" name="Require" style="max-width: 450px; min-width: 450px; border-radius: 35px; height: 60px; width: 450px; color: #FFFFFF; font-family: 'Inter-Thin'; font-style: italic; font-weight: 700; font-size: 25px; line-height: 24px; text-align: center; background: transparent; border: solid #8901FF; border-width: 1px;"></textarea><br><br>
            <form action="pages/page_reg/reg_company.php" align="left">
              <button class="button">Предложить работу</button>
            </form>
          </div>
          <div class="col-md-3">
            <p class="text6" style="margin-bottom: 10px">Загрузите файлы</p>
            <div style="width: 450px; border-radius: 10px; height: 60px; width: 450px; color: #FFFFFF; font-family: 'Inter-Thin'; font-style: normal; font-weight: 700; font-size: 25px; line-height: 24px; text-align: center; background: #666666; border: solid #666666; border-width: 1px;">
              <p style="margin-top: 15px;">1 main.cpp 1.3KB</p>
            </div>
            <p class="text6" style="margin-bottom: 10px">Загрузите аватарку проекта</p>
            <div style="width: 450px; border-radius: 10px; height: 60px; width: 450px; color: #FFFFFF; font-family: 'Inter-Thin'; font-style: normal; font-weight: 700; font-size: 25px; line-height: 24px; text-align: center; background: #666666; border: solid #666666; border-width: 1px;">
              <p style="margin-top: 15px;">Add file</p>
            </div>
            <p class="text6" style="margin-bottom: 10px">Опишите теги</p>
          </div>
          <div class="col-md-2">
          </div>
        </div>
      </div>

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
    <!--<P>Напшите описание проекта</P>
    <form action="action_make-order.php" method="post" enctype="multipart/form-data">
    <p>Придумайте название</p>
    <input type="text" name="title"><br><br>
    <p>Придумайте Description</p>
    <input type="text" name="Description"><br><br>
    <p>Придумайте Requare</p>
    <input type="text" name="Requare"><br><br>
    <p>Img</P>
    <input type="file"  name="order_avatar">
    <p>Files</P>
    <input type="file" name="order_rar">

    <br><br>
    <p>Введите цену</P>
    <input type="text" placeholder="От" name="price_at">
    <input type="text" placeholder="До" name="price_to"><br><br>

    <p>Введите дату</P>
    <input type="text" placeholder="От" name="date_at">
    <input type="text" placeholder="До" name="date_to"><br><br>

    <p>Введите теги</p>
    <input type="text" placeholder="Tags" name="tags"><br><br>

    <input type="submit" placeholder="Tags" name="Add">
    </form>-->
  </body>
</html>
