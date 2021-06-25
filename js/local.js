function givePHP() {
  var elements = document.getElementsByClassName("givePHP");
  len = elements !== null ? elements.length : 0;
  i = 0;
  for (i; i < len; i++) {
    if(elements[i].id != "nophp")
    elements[i].href += ".php";
  }
}

function load() {
  givePHP();
}