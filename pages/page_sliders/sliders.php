<!DOCTYPE html>
<html>
  <head>
    <title>Sliders</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="sliders.css">
    <script type="text/javascript">
      $(window).scroll(function(){
        var wt = $(window).scrollTop();
        var wh = $(window).height();
        var et = $('элемент').offset().top;
        var eh = $('элемент').outerHeight();
        var dh = $(document).height();   
        if (wt + wh >= et || wh + wt == dh || eh + et < wh){
          console.log('Элемент показан');
        }
      });
      }
    </script>
  </head>
  <body>
    <div class="active">
      <div>1</div>
      <div>2</div>
      <div>3</div>
      <div>4</div>
    </div>
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
      var block_show = false;
 
      function scrollTracking(){
        if (block_show) {
          return false;
        }
       
        var wt = $(window).scrollTop();
        var wh = $(window).height();
        var et = $('.active').offset().top;
        var eh = $('.active').outerHeight();
        var dh = $(document).height();   
       
        if (wt + wh >= et || wh + wt == dh || eh + et < wh){
          block_show = true;
          
          // Код анимации
          $('.active div:eq(0)').show('slow', function(){
            $(this).next().show('slow', arguments.callee);
          });
        }
      }
       
      $(window).scroll(function(){
        scrollTracking();
      });
        
      $(document).ready(function(){ 
        scrollTracking();
      });
    </script>
  </body>
</html>