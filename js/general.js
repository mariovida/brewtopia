document.addEventListener("DOMContentLoaded", function () {
  var beansLeft = document.querySelector(".hero-beans_left");
  var beansRight = document.querySelector(".hero-beans_right");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 0) {
      beansLeft.classList.add("scrolled");
      beansRight.classList.add("scrolled");
    } else {
      beansLeft.classList.remove("scrolled");
      beansRight.classList.remove("scrolled");
    }
  });
});
