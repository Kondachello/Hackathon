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
    <P>Напшите описание проекта</P>
    <form action="action_make-order.php" method="post" enctype="multipart/form-data">
    <input type="text" name="Description"><br><br>
    <input type="text" name="Requare"><br><br>
    <p>Img</P>
    <input type="file"  name="order_avatar">
    <p>Files</P>
    <input type="file" name="File1">

    <br><br>
    <p>Введите цену</P>
    <input type="text" placeholder="От" name="price_at">
    <input type="text" placeholder="До" name="price_to"><br><br>

    <p>Введите дату</P>
    <input type="text" placeholder="От" name="date_at">
    <input type="text" placeholder="До" name="price_to"><br><br>

    <p>Введите теги</p>
    <input type="text" placeholder="Tags" name="tags"><br><br>

    <input type="submit" placeholder="Tags" name="tags">
    </form>
  </body>
</html>
