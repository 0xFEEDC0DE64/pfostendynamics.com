    <!--Begin Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light couldDark disable-select sticky-top" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="./" draggable="false" ondragstart="return false;">
          <img src="./img/PfostenDynamics.png" style="max-height: 60px" class="d-inline-block align-top" alt="" loading="lazy" id="pfostendynamics" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <?php
            function makeMenuItem($text, $url, $active)
            {
            ?>
              <li class="nav-item home canactive <?php if ($active) { ?> active<?php } ?>">
                <a draggable="false" ondragstart="return false;" class="nav-link givePHP" href="<?php echo htmlentities($url); ?>"><?php echo htmlentities($text); ?><?php if ($active) { ?> <span class="sr-only">(current)</span><?php } ?></a>
              </li>
            <?php
            }
            ?>
            <?php makeMenuItem("Home", "./", ACTIVE_MENUITEM == "home"); ?>
            <li class="nav-item dropdown vehicles bobbycar bobbyquad bobbybob bobbyklo bobbyboot bobbyhubschrauber raupenfahrzeug canactive">
              <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" draggable="false" ondragstart="return false;">Vehicles</a>
              <div class=" dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item givePHP" href="./bobbycar" draggable="false" ondragstart="return false;">Bobbycar</a>
                <a class="dropdown-item givePHP" href="./bobbyquad" draggable="false" ondragstart="return false;">Bobbyquad</a>
                <a class="dropdown-item givePHP" href="./bobbybob" draggable="false" ondragstart="return false;">Bobbybob</a>
                <a class="dropdown-item givePHP" href="./bobbyklo" draggable="false" ondragstart="return false;">Bobbyklo</a>
                <a class="dropdown-item givePHP" href="./bobbyboot" draggable="false" ondragstart="return false;">Bobbyboot</a>
                <a class="dropdown-item givePHP" href="./bobbyhubschrauber" draggable="false" ondragstart="return false;">Bobbyhubschrauber</a>
                <a class="dropdown-item givePHP" href="./raupenfahrzeug" draggable="false" ondragstart="return false;">Raupenfahrzeug</a>
              </div>
            </li>
            <?php makeMenuItem("Careers", "./careers", ACTIVE_MENUITEM == "careers"); ?>
            <?php makeMenuItem("News", "./news", ACTIVE_MENUITEM == "news"); ?>
            <?php makeMenuItem("About", "./about", ACTIVE_MENUITEM == "about"); ?>
            <?php makeMenuItem("Shop", "./shop", ACTIVE_MENUITEM == "shop"); ?>
            <?php makeMenuItem("Impressum", "./impressum", ACTIVE_MENUITEM == "impressum"); ?>
          </ul>
          <a class="nav-link toggleDarkmode" href="javascript:void(0)" onclick="darkMode()" draggable="false" ondragstart="return false;"><img id="darkModeImg" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Toggle darkmode" draggable="false" ondragstart="return false;" /></a>
        </div>
      </div>
    </nav>
    <!--End Navbar-->