<?php
include "func_make-order.php";

session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Students Registration</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="make-order.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="../../scroll.js"></script>
</head>
  <body>
    <div class="bg">
      <div class="header">
        <p class="logo">Sh.</p>
        <img class="img-fluid" style="width: 100%; height: 80px;" src="../../images/header.gif" alt="я джифка">
        <a class="link" href="pages/page_reg/reg_sign_in.php">Вход</a>
        <img class="photo" src="images/ava.jpg">
      </div>

      <br><br><br><br>

      <div class="container-fluid preanimup">
        <div class="heading preanim-up">
          <p>Создать задачу</p>
        </div>
      </div>

      <br><br><br>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-6 preanim-left">
            <form action="action_make-order.php" method="post" enctype="multipart/form-data" align="left">
              <p class="text6" style="margin-left: 40px; margin-bottom: 10px">Напишите название задачи</p>
              <input class="reg_input" name="title"><br><br><br>
              <p class="text6" style="margin-left: 40px; margin-bottom: 10px">Напишите описание проекта</p>
              <textarea class="add_input"rows="10" cols="60" name="Description"></textarea><br><br>
              <p class="text6" style="margin-left: 40px; margin-bottom: 10px">Опишите, кто Вам нужен</p>
              <textarea class="add_input" rows="5" cols="60" name="Require"></textarea><br><br>

              <button class="button">Опубликовать проект</button>
            </div>
            <div class="col-md-3 preanim-right">
              <p class="text6" style="margin-bottom: 10px">Загрузите файлы</p>
              <br>
              <input class="add_file" type="file" name="order_rar">
              <br>
              <p class="text6" style="margin-bottom: 10px">Загрузите аватарку проекта</p>
              <br>
              <input class="add_file" type="file" name="order_avatar">
              <br>
              <p class="text6" style="margin-bottom: 10px">Опишите теги</p>
              <input class="reg_input" placeholder="Введите тег" style="text-align: left;" name="tags"><br><br><br>
              <p class="text3" style="margin-bottom: 10px">Цена (Р)</p>
              <input class="reg_input" placeholder="От" style="width: 150px; float: left;" name="price_at">
              <input class="reg_input" placeholder="До" style="width: 150px; float: left; margin-left: 20px;" name="price_to"><br><br><br><br>
              <p class="text3" style="margin-bottom: 10px">Сроки (Д)</p>
              <input class="reg_input" placeholder="От" style="width: 150px; float: left;" name="date_at">
              <input class="reg_input" placeholder="До" style="width: 150px; float: left; margin-left: 20px;" name="date_to">
            </form>
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