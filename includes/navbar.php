    <!--Begin Navbar-->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-light couldDark"
      id="navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="./"
          ><img
            src="./img/PfostenDynamics.png"
            style="max-height: 60px"
            class="d-inline-block align-top"
            alt=""
            loading="lazy"
            id="pfostendynamics"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNavDropdown"
        >
          <ul class="navbar-nav">
            <li class="nav-item home canactive <?php if (ACTIVE_MENUITEM == "home") { ?> active<?php } ?>">
              <a class="nav-link" href="./"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li
              class="nav-item dropdown vehicles bobbycar bobbyquad bobbybob bobbyklo bobbyboot bobbyhubschrauber raupenfahrzeug canactive"
            >
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Vehicles
              </a>
              <div
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <a class="dropdown-item" href="./bobbycar">Bobbycar</a>
                <a class="dropdown-item" href="./bobbyquad">Bobbyquad</a>
                <a class="dropdown-item" href="./bobbybob">Bobbybob</a>
                <a class="dropdown-item" href="./bobbyklo">Bobbyklo</a>
                <a class="dropdown-item" href="./bobbyboot">Bobbyboot</a>
                <a class="dropdown-item" href="./bobbyhubschrauber"
                  >Bobbyhubschrauber</a
                >
                <a class="dropdown-item" href="./raupenfahrzeug"
                  >Raupenfahrzeug</a
                >
              </div>
            </li>
            <li class="nav-item careers canactive <?php if (ACTIVE_MENUITEM == "careers") { ?> active<?php } ?>">
              <a class="nav-link" href="./careers">Careers</a>
            </li>
            <li class="nav-item news canactive <?php if (ACTIVE_MENUITEM == "news") { ?> active<?php } ?>">
              <a class="nav-link" href="./news">News</a>
            </li>
            <li class="nav-item about canactive <?php if (ACTIVE_MENUITEM == "about") { ?> active<?php } ?>">
              <a class="nav-link" href="./about">About</a>
            </li>
            <li class="nav-item shop canactive <?php if (ACTIVE_MENUITEM == "shop") { ?> active<?php } ?>">
              <a class="nav-link" href="./shop">Shop</a>
            </li>
            <li class="nav-item impressum canactive<?php if (ACTIVE_MENUITEM == "impressum") { ?> active<?php } ?>">
              <a class="nav-link" href="./impressum">Impressum</a>
            </li>
          </ul>
          <a class="nav-link" href="#" onclick="darkMode()"
            ><img
              id="darkModeImg"
              class="img-fluid"
              data-toggle="tooltip"
              data-placement="top"
              title="Toggle darkmode"
              src=""
          /></a>
        </div>
      </div>
    </nav>
    <!--End Navbar-->
