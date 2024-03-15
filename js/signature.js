// Function to animate each path element
function animateSignature() {
  var paths = document.querySelectorAll("#autograph path");
  paths.forEach(function (path, index) {
    var length = path.getTotalLength();
    path.style.transition = path.style.WebkitTransition = "none";
    path.style.strokeDasharray = length;
    path.style.strokeDashoffset = length;
    path.style.fillOpacity = 0;
    path.getBoundingClientRect();
    path.style.transition = path.style.WebkitTransition =
      "stroke-dashoffset 2s ease-in-out " +
      index * 0.2 +
      "s, fill-opacity 2s ease-in-out " +
      index * 0.25 +
      "s";
    path.style.fill = "white";
    path.style.stroke = "white";
    path.style.strokeDashoffset = "0";
    path.style.fillOpacity = 1;
  });
}
document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    animateSignature();
  }, 600);
});
