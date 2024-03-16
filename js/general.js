document.addEventListener("DOMContentLoaded", function () {
  var beansLeft = document.querySelector(".hero-beans_left");
  var beansRight = document.querySelector(".hero-beans_right");
  var navigation = document.querySelector("#navigation");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 10) {
      beansLeft.classList.add("scrolled");
      beansRight.classList.add("scrolled");
      navigation.classList.add("scrolled");
    } else {
      beansLeft.classList.remove("scrolled");
      beansRight.classList.remove("scrolled");
      navigation.classList.remove("scrolled");
    }
  });
});
