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