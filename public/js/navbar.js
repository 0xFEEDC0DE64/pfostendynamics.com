function setactivePage() {
  const path = window.location.pathname;
  const tmp = path.split("/").pop();
  let page = tmp.replace(".html", "");
  if (page === "") {
    page = "home";
  }

  if (debug === "true") {
    console.log("page:" + page);
  }

  const site = document.getElementsByClassName("canactive");

  let len = site !== null ? site.length : 0;
  let len2;
  let j;
  for (let i = 0; i < len; i++) {
    const siteClass = document.getElementsByClassName(page);
    len2 = siteClass !== null ? siteClass.length : 0;
    j = 0;
    for (j; j < len2; j++) {
      siteClass[j].classList.add("active");
    }
  }
}

/*li.nav-item.about.canactive*/
