<!DOCTYPE html>
<html>
  <head>
    <title>Students help</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="pages/page_sliders/sliders.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../../modules/itc-slider/itc-slider.css">
    
    <script src="../../modules/itc-slider/itc-slider.js" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
      function reveal1() {
        var right = document.querySelectorAll(".preanim-right");

        for (var i = 0; i < right.length; i++) {
          var windowHeight = window.innerHeight;
          var elementTop = right[i].getBoundingClientRect().top;
          var elementVisible = 100;

          if (elementTop < windowHeight - elementVisible) {
            right[i].classList.add("animated-right");
          } else {
            right[i].classList.remove("animated-right");
          }
        }
      }
      function reveal2() {
        var left = document.querySelectorAll(".preanim-left");

        for (var i = 0; i < left.length; i++) {
          var windowHeight = window.innerHeight;
          var elementTop = left[i].getBoundingClientRect().top;
          var elementVisible = 100;

          if (elementTop < windowHeight - elementVisible) {
            left[i].classList.add("animated-left");
          } else {
            left[i].classList.remove("animated-left");
          }
        }
      }
      function reveal3() {
        var up = document.querySelectorAll(".preanim-up");

        for (var i = 0; i < up.length; i++) {
          var windowHeight = window.innerHeight;
          var elementTop = up[i].getBoundingClientRect().top;
          var elementVisible = 100;

          if (elementTop < windowHeight - elementVisible) {
            up[i].classList.add("animated-up");
          } else {
            up[i].classList.remove("animated-up");
          }
        }
      }
      function reveal4() {
        var bot = document.querySelectorAll(".preanim-bot");

        for (var i = 0; i < bot.length; i++) {
          var windowHeight = window.innerHeight;
          var elementTop = bot[i].getBoundingClientRect().top;
          var elementVisible = -300;

          if (elementTop < windowHeight - elementVisible) {
            bot[i].classList.add("animated-bot");
          } else {
            bot[i].classList.remove("animated-bot");
          }
        }
      }

      window.addEventListener("scroll", reveal1);
      window.addEventListener("scroll", reveal2);
      window.addEventListener("scroll", reveal3);
      window.addEventListener("scroll", reveal4);


      /*(function () {
        var left = document.querySelector('.preanim-left');

        var observer2 = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
              return;
            }

            if (entry.isIntersecting) {
              entry.target.classList.add('animated-left');
            }
          });
        });

        observer2.observe(left);
      })();


      (function () {
        var up = document.querySelector('.preanim-up');

        var observer3 = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
              return;
            }

            if (entry.isIntersecting) {
              entry.target.classList.add('animated-up');
            }
          });
        });

        observer3.observe(up);
      })();


      (function () {
        var bot = document.querySelector('.preanim-bot');

        var observer4 = new IntersectionObserver(entries => {
          entries.forEach(entry => {
            if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
              return;
            }

            if (entry.isIntersecting) {
              entry.target.classList.add('animated-bot');
            }
          });
        });

        observer4.observe(bot);
      })();*/
    </script>



  </head>
  <body>
    <div class="bg">
      <div class="header">
        <p class="logo">Sh.</p>
        <img class="img-fluid" style="width: 100%; height: 80px;" src="https://im.wampi.ru/2022/12/09/ij0LMGcdee5ff9805d8104.gif" alt="я джифка">
        <a class="link" href="pages/page_reg/reg_sign_in.php">Вход</a>
        <img class="photo" src="images/ava.jpg">
      </div>

      <br><br><br><br>  

      <div class="container-fluid">
        <div class="heading preanim-up">
          <p>Students help</p>
        </div>
      </div>

      <br><br><br>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-4 preanim-left">
            <br>
            <p class="text1">Помогите студентам ИТМО получить настоящий опыт работы</p>
            <p class="text2" style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <form action="pages/page_reg/reg_company.php" align="left">
              <button class="button">Предложить работу</button>
            </form>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-1">
            <div class="v1"></div>
          </div>
          <div class="col-md-4 preanim-right">
            <br>
            <img class="img-fluid rounded" src="images/prg1.jpg">
          </div>
          <div class="col-md-1">
          </div>
        </div>
      </div>

      <br><br><br><br>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-4 preanim-left">
            <br>
            <img class="img-fluid rounded" src="images/prg2.jpg">
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-2">
            <div class="v1"></div>
          </div>
          <div class="col-md-3 preanim-right">
            <br>
            <p class="text1" style="text-align: right;">Инвестируйте в проекты студентов</p>
            <p class="text2" style="text-align: right;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <form action="pages/page_reg/reg_student.php" align="right">
              <button class="button">Инвестировать</button>
            </form>
          </div>
          <div class="col-md-1">
          </div>
        </div>
      </div>

      <br><br><br>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-4 preanim-left">
            <br>
            <p class="text1">Нужно быстро и срочно разобраться с мелко пробелмой? Обратитесь к студентма!</p>
            <p class="text2" style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <form action="pages/page_reg/reg_company.php" align="left">
              <button class="button">Предложить работу</button>
            </form>
            </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-1">
            <div class="v1"></div>
          </div>
          <div class="col-md-4 preanim-right">
            <br>
            <img class="img-fluid rounded" src="images/prg3.jpg">
          </div>
          <div class="col-md-1">
          </div>
        </div>
      </div>

      <br><br><br>

      <div class="container-fluid">
        <div class="heading preanim-up">
          <p>С нами уже работали</p>
        </div>
      </div>

      <br><br><br><br>
      <div class = "preanim-bot" style = "margin:0 auto; width:75%;">
        <div class="itc-slider itc-slider-4" data-slider="itc-slider" data-autoplay="true" data-interval="2000" data-loop="true">
          <div class="itc-slider__wrapper">
            <div class="itc-slider__items">
              <div class="itc-slider__item">
                <img class="rounded img-fluid" width = "90%" src="images/jr.jpg">
              </div>
              <div class="itc-slider__item">
                <img class="rounded img-fluid" width = "90%" src="images/jr.jpg">
              </div>
              <div class="itc-slider__item">
                <img class="rounded img-fluid" width = "90%" src="images/jr.jpg">
              </div>
              <div class="itc-slider__item">
                <img class="rounded img-fluid" width = "90%" src="images/jr.jpg">
              </div>
              <div class="itc-slider__item">
                <img class="rounded img-fluid" width = "90%" src="images/jr.jpg">
              </div>
              <div class="itc-slider__item">
                <img class="rounded img-fluid" width = "90%" src="images/jr.jpg">
              </div>
            </div>
          </div>
          <button class="itc-slider__btn itc-slider__btn_prev"></button>
          <button class="itc-slider__btn itc-slider__btn_next"></button>
          <ol class="itc-slider__indicators">
            <li class="itc-slider__indicator" data-slide-to="0"></li>
            <li class="itc-slider__indicator" data-slide-to="1"></li>
            <li class="itc-slider__indicator" data-slide-to="2"></li>
            <li class="itc-slider__indicator" data-slide-to="3"></li>
            <li class="itc-slider__indicator" data-slide-to="4"></li>
            <li class="itc-slider__indicator" data-slide-to="5"></li>
          </ol>
        </div>
      </div>

      <br><br><br><br><br><br><br><br>

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
