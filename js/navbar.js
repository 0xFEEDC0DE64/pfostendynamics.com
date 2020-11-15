function setactivePage() {
  var path = window.location.pathname;
  var tmp = path.split("/").pop();
  var page = tmp.replace(".html", "");
  if (page == "") page = "home";
  if(debug == "true") console.log("page:" + page);
  var site = document.getElementsByClassName("canactive");
  len = site !== null ? site.length : 0;
  i = 0;
  for (i; i < len; i++) {
    var siteClass = document.getElementsByClassName(page);
    len2 = siteClass !== null ? siteClass.length : 0;
    j = 0;
    for (j; j < len2; j++) {
      siteClass[j].classList.add("active");
    }
  }
}

/*li.nav-item.about.canactive*/
