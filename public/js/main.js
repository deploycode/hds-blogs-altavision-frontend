$(document).ready(function (){
  var elems = document.getElementsByClassName("min");
  for (var i = 0; i < elems.length; i+= 1) {
      var host = window.location.host
      var image= elems[i].src.split( host );
      elems[i].src = "http://blogs.altavision.com.co"+ image[1];
  };
});
