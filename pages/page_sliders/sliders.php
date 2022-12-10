<!DOCTYPE html>
<html>
  <head>
    <title>Sliders</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="sliders.css">
    <script>
      (function () {
      var square = document.querySelector('.square-wrapper');

      var observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          var entrySquare = entry.target.querySelector('.square');
          if (typeof getCurrentAnimationP reference === 'function' && !getCurrentAnimationPreference()) {
            return;
          }

          if (entry.isIntersecting) {
            entrySquare.classList.add('square-animation');
            return;
          }

          entrySquare.classList.remove('square-animation');
        });
      });

      observer.observe(square);
    })();
    </script>
  </head>
  <body>
    <p>Прокрутите вниз.</p>
    <div class="stage">
      <div class="wrap">
        <div class="square-wrapper">
          <div class="square"></div>
        </div>
      </div>
    </div>
    <div class="stage-footer">
      CSS-класс .square-animation здесь добавляется каждый раз при появлении элемента.
      Используйте прокрутку вниз и вверх.
    </div>
  </body>
</html>