    <!--Begin Navbar-->
    <nav
      class="navbar navbar-expand-lg navbar-light bg-light couldDark"
      id="navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="./">
          <img src="./img/PfostenDynamics.png" style="max-height: 60px" class="d-inline-block align-top" alt="" loading="lazy" id="pfostendynamics" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <?php
            function makeMenuItem($text, $url, $active) {
            ?>
            <li class="nav-item home canactive <?php if ($active) { ?> active<?php } ?>">
              <a class="nav-link" href="<?php echo htmlentities($url); ?>"><?php echo htmlentities($text); ?><?php if ($active) { ?> <span class="sr-only">(current)</span><?php } ?></a>
            </li>
            <?php
            }
            ?>
            <?php makeMenuItem("Home", "./", ACTIVE_MENUITEM == "home"); ?>
            <li class="nav-item dropdown vehicles bobbycar bobbyquad bobbybob bobbyklo bobbyboot bobbyhubschrauber raupenfahrzeug canactive">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vehicles</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="./bobbycar">Bobbycar</a>
                <a class="dropdown-item" href="./bobbyquad">Bobbyquad</a>
                <a class="dropdown-item" href="./bobbybob">Bobbybob</a>
                <a class="dropdown-item" href="./bobbyklo">Bobbyklo</a>
                <a class="dropdown-item" href="./bobbyboot">Bobbyboot</a>
                <a class="dropdown-item" href="./bobbyhubschrauber">Bobbyhubschrauber</a>
                <a class="dropdown-item" href="./raupenfahrzeug">Raupenfahrzeug</a>
              </div>
            </li>
            <?php makeMenuItem("Careers", "./careers", ACTIVE_MENUITEM == "careers"); ?>
            <?php makeMenuItem("News", "./news", ACTIVE_MENUITEM == "news"); ?>
            <?php makeMenuItem("About", "./about", ACTIVE_MENUITEM == "about"); ?>
            <?php makeMenuItem("Shop", "./shop", ACTIVE_MENUITEM == "shop"); ?>
            <?php makeMenuItem("Impressum", "./impressum", ACTIVE_MENUITEM == "impressum"); ?>
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
