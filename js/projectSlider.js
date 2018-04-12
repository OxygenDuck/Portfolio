//Projects Image Slider
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var w = document.getElementsByClassName("mySlides");
  var x = document.getElementsByClassName("projectInfo");
  var y = document.getElementsByClassName("projectName");
  var z = document.getElementsByClassName("projectLink");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (var i = 0; i < x.length; i++) {
      w[i].style.display = "none";
      x[i].style.display = "none";
      y[i].style.display = "none";
      z[i].style.display = "none";
  }
  w[slideIndex-1].style.display = "block";
  x[slideIndex-1].style.display = "block";
  y[slideIndex-1].style.display = "block";
  z[slideIndex-1].style.display = "block";

}
