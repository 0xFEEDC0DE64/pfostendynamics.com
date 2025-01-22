<?php

define('PAGE_TITLE', 'About');
define('ACTIVE_MENUITEM', 'about');

require('includes/header.php');
?>

<div>
  <header style="background-color: rgba(219, 219, 219, 0.448)" class="shadow p-10 mb-3">
    <img id="background-image" src="./img/new-about.jpg" style="
            display: block;
            margin-left: auto;
            margin-right: auto;
            border: 2px;
            border-style: ridge;
            border-color: gray;
          " class="img-fluid" draggable="false" ondragstart="return false;" />
    <h1 style="text-align: center; position: relative"></h1>
  </header>
</div>

<div class="container">
  <br />
  <div class="h5">
    <p style="hyphens: auto; text-align: justify">
      Pfostendynamics is a world leader in building electric bobbycars,
      tackling some of the toughest electronic and mechanical challenges. We
      combine the principles of dumb ideas and too much free time,
      cutting-edge Chinese electronics, and next-generation software for
      high-performance bobbycars equipped with BMS, Battery, and
      micro-controllers. Pfostendynamics has an extraordinary and
      fast-growing technical team of engineers and scientists who seamlessly
      combine next level bullshit with bold engineering and crashing into
      things.
    </p>
  </div>

  <h2 class="mt-5 display-4 text-uppercase" style="text-shadow: 1px 1px #686868">
    FAQs about Pfosten Dynamics
  </h2>
  <article>
  <div id="faq">
    <div>
      <a href="#Q1" class="text-decoration-none">Q: Why does Pfosten Dynamics make electric bobbycars?</a>
      <br />
      <a href="#Q2" class="text-decoration-none">Q: What makes Pfostendynamics unique?</a>
      <br />
      <a href="#Q3" class="text-decoration-none">Q: When can I buy an electric bobbycar?</a>
      <br />
      <a href="./impressum" class="text-decoration-none">IMPRESSUM </a>
    </div>
    <br />
    <div id="Q" class="h4" style="padding-left: 50px">
      <div id="Q1">
        <a>Q: Why does Pfosten Dynamics make electric bobbycars?</a>
        <p>A: Because we can</p>
      </div>
      <div id="Q2">
        <a>Q: What makes Pfostendynamics unique?</a>
        <p>
          A: One of the things that makes Pfostendynamics unique is the
          ambition to build a electric bobbycar that does not go up in smoke
          immediately. Peter Poetzi began tackling this problem before
          anyone else of us. And we’ve been at it since almost 3 years.
          We’ve been inspired by and worked towards this goal for so long
          that we have invented techniques to make bobbycars work that you
          can’t find in any textbook or technical article. The result is
          that we now know how to build such bobbycars so that they work for
          around 100 Kilometers without something breaking or needing for
          repair.
        </p>
      </div>
      <div id="Q3">
        <a>Q: When can I buy an electric bobbycar?</a>
        <p>
          A: For now these are not up for sale, but you can self build
          yourself one.
        </p>
      </div>
    </div>
  </div>
  </article>
</div>
<div id="about-us" class="container" style="border-top: 5px; border-top-style: solid">
  <br />
  <div id="about-pic">
    <!--<img
          src="./img/new-about.jpg"
          class="img-fluid rounded mx-auto d-block shadow"
          style="
            max-width: 99%;
            border: 2px;
            border-style: ridge;
            border-color: gray;
          "
          draggable="false"
          ondragstart="return false;"
        />-->
    <h2 class="display-4" style="text-shadow: 1px 1px #686868; margin-top: -30px">
      Our Team
    </h2>
  </div>
  <br />
  <div class="container" id="team">
    <ul class="list-unstyled">
      <li class="media">
        <img class="mr-3 img-fluid shadow rounded" src="./img/placeholder.jpg" style="
                max-height: 150px;
                border: 2px;
                border-style: ridge;
                border-color: gray;
              " draggable="false" ondragstart="return false;" />
        <div class="media-body">
          <h3 class="mt-0 mb-1" id="feedc0de">feedc0de</h3>
          <p class="about-p">
            feedcode text
          </p>
        </div>
      </li>
      <br />
      <li class="media">
        <div class="media-body">
          <h3 class="mt-0 mb-1" id="peterp">peterp</h3>
          <p class="about-p">
            peterp text
          </p>
        </div>
      </li>
      <br />
      <li class="media">
        <img class="mr-3 img-fluid shadow rounded" src="./img/members/greyhash.jpg" style="
                max-height: 150px;
                border: 2px;
                border-style: ridge;
                border-color: gray;
              " draggable="false" ondragstart="return false;" />
        <div class="media-body">
          <h3 class="mt-0 mb-1" id="greyhash">greyhash - Bobbycar Builder</h3>
          <p class="about-p">
            This is the guy who invented <a href="./extras#kartoffelfahrzeug" target="_blank" rel="noopener">"Der Kartoffelfahrzeug"</a>.
            Now he has build a new bobbycar, and if everything works (which it wont), it will even have RGB!
          </p>
        </div>
      </li>
      <br />
      <li class="media">
        <img class="mr-3 img-fluid shadow rounded" src="./img/members/mick.jpg" style="
                max-height: 150px;
                border: 2px;
                border-style: ridge;
                border-color: gray;
              " draggable="false" ondragstart="return false;" />
        <div class="media-body">
          <h3 class="mt-0 mb-1" id="mick">mick</h3>
          <p class="about-p">
            mick text
          </p>
        </div>
      </li>
      <br />
      <li class="media">
        <img class="mr-3 img-fluid shadow rounded" src="./img/members/commanderred.jpg" style="
                max-height: 150px;
                border: 2px;
                border-style: ridge;
                border-color: gray;
              " draggable="false" ondragstart="return false;" />
        <div class="media-body">
          <h3 class="mt-0 mb-1" id="commanderred">CommanderRed - (WEB-DESIGN)</h3>
          <p class="about-p">
            This is the guy who does most of the web-design, so send complains to him! (And yes, he wrote this line himself....)
          </p>
        </div>
      </li>
    </ul>
  </div>
</div>
<?php require('includes/footer.php'); ?>
