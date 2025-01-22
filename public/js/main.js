var applyDarkmode = false;
var state = false;
var debug = "false";
if (getCookie("darkmode") == null) {
  applyDarkmode = false;
  if (debug == "true") console.log('Cookie "darkmode" empty');
} else {
  applyDarkmode = getCookie("darkmode");
  if (debug == "true") console.log("Cookie darkmode:" + applyDarkmode);
}
var isDark = false;

function setdarkMode(state) {
  if (debug == "true")
    console.log(
      'function "setdarkMode" was initiated with value "state" as ' + state
    );
  var elements = document.getElementsByClassName("couldDark");
  len = elements !== null ? elements.length : 0;
  i = 0;
  if (state == true) {
    for (i; i < len; i++) {
      if (elements[i].classList.contains("darkMode") == false) {
        elements[i].classList.add("darkMode");
      }
    }
    document.getElementById("darkModeImg").src =
      "https://pfostendynamics.com/img/darkmode.png";
    document.getElementById("pfostendynamics").src =
      "https://pfostendynamics.com/img/PfostenDynamicsDark.png";
  } else if (state == false) {
    for (i; i < len; i++) {
      if (elements[i].classList.contains("darkMode") == true) {
        elements[i].classList.remove("darkMode");
      }
    }
    document.getElementById("darkModeImg").src =
      "https://pfostendynamics.com/img/lightmode.png";
    document.getElementById("pfostendynamics").src =
      "https://pfostendynamics.com/img/PfostenDynamics.png";
  }
  state = state.toString();
  setCookie("darkmode", state, 999);
  return state;
}

function setNavbar(state) {
  if (debug == "true")
    console.log(
      'function "setNavbar" was initiated with value "state" as ' + state
    );
  if (state) {
    document.getElementById("navbar").classList.remove("navbar-light");
    document.getElementById("navbar").classList.remove("bg-light");
    document.getElementById("navbar").classList.add("navbar-dark");
    document.getElementById("navbar").classList.add("bg-dark");
  } else {
    document.getElementById("navbar").classList.add("navbar-light");
    document.getElementById("navbar").classList.add("bg-light");
    document.getElementById("navbar").classList.remove("navbar-dark");
    document.getElementById("navbar").classList.remove("bg-dark");
  }
  return;
}

function darkMode() {
  applyDarkmode = !applyDarkmode;
  if (debug == "true") console.log("applyDarkmode:" + applyDarkmode);
  setdarkMode(applyDarkmode);
  setNavbar(applyDarkmode);
  return;
}

function checkDarkmode() {
  var tmp = getCookie("darkmode");
  if (tmp == "false") {
    isDark = false;
    document.getElementById("darkModeImg").src =
      "https://pfostendynamics.com/img/lightmode.png";
    document.getElementById("pfostendynamics").src =
      "https://pfostendynamics.com/img/PfostenDynamics.png";
  } else if (tmp == "true") {
    document.getElementById("darkModeImg").src =
      "https://pfostendynamics.com/img/darkmode.png";
    document.getElementById("pfostendynamics").src =
      "https://pfostendynamics.com/img/PfostenDynamicsDark.png";
    isDark = true;
  }
  applyDarkmode = isDark;
  state = isDark;

  var elements = document.getElementsByClassName("couldDark");
  len = elements !== null ? elements.length : 0;
  i = 0;
  if (state == true) {
    for (i; i < len; i++) {
      if (elements[i].classList.contains("darkMode") == false) {
        elements[i].className += " darkMode";
      }
    }
    document.getElementById("darkModeImg").src =
      "https://pfostendynamics.com/img/darkmode.png";
  } else if (state == false) {
    for (i; i < len; i++) {
      if (elements[i].classList.contains("darkMode") == true) {
        elements[i].classList.remove("darkMode");
      }
    }
    document.getElementById("darkModeImg").src =
      "https://pfostendynamics.com/img/lightmode.png";
  }
  setNavbar(isDark);
  return isDark;
}

function load() {
  debug = getCookie("debug");
  if (getCookie("darkmode") == "") {
    setCookie("darkmode", false, 999);
  }
  checkDarkmode();
  if (location.hostname == "localhost") givePHP();
}

/*Cookie scripts*/
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  var expires = "expires=" + d.toUTCString();
  document.cookie =
    cname + "=" + cvalue + ";" + expires + ";path=/" + "; Secure";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
/*End Cookie scripts*/

function setDebug(debugval) {
  setCookie("debug", debugval, 999);
  debug = getCookie("debug");
  return debug;
}
