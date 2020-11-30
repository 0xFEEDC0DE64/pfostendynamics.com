<?php

define('PAGE_TITLE', 'Extras');
define('ACTIVE_MENUITEM', 'extras');

require('includes/header.php');
?>

<br>
<div class="container">
    <h1>
        Psst... You found a secret!
    </h1>
    <h4>Okay, maybe more than one..!</h4>
    <br>
    <hr class="couldDark">
    <div id="bobbycar-stl">
        <h3>Bobbycar</h3>
        <p>This is an .stl file containing an 3d model of a standard bobbycar (Click picture to download!)</p>
        <a href="./extras-dir/bobbycar.stl" draggable="false" ondragstart="return false;">
            <img class="img-fluid" src="./extras-dir/bobbycar.jpg" style="
        max-width: 512px; 
        width: 100%; 
        border: 2px;
        border-style: ridge;
        border-color: gray;
        " alt="Click Here to download!" draggable="false" ondragstart="return false;">
        </a>
    </div>
    <hr class="couldDark">
    <div id="logo-stl">
        <h3>Our Logo</h3>
        <p>Here we put our logo as an "plate", so you can print it out and put it somewhere so it can get dusty (Click picture to download!)</p>
        <a href="./extras-dir/pfostendynamics.stl" draggable="false" ondragstart="return false;">
            <img class="img-fluid" src="./extras-dir/pfostendynamics.jpg" style="
        max-width: 512px; 
        width: 100%; 
        border: 2px;
        border-style: ridge;
        border-color: gray;
        " alt="Click Here to download!" draggable="false" ondragstart="return false;">
        </a>
    </div>
    <hr class="couldDark">
    <div id="kartoffelfahrzeug">
        <h3>Der Kartoffelfahrzeug (The potato-vehicle)</h3>
        <p>This was <a href="./about#greyhash">greyhashs</a> attempt of creating his own "instance" of a bobbycar. It was powered by two
            motors, a <a href="https://en.wikipedia.org/wiki/Club-Mate" target="_blank" rel="noopener"> mate box </a> and a not so good steering wheel in the form of two sliding Potentiometers. And after an unscheduled disassembly there is now a better built bobby car, whereby (as of 2020) it is still broken ...</p>
        <img class="img-fluid" src="./extras-dir/kartoffel.jpg" style="
        max-width: 512px; 
        width: 100%; 
        border: 2px;
        border-style: ridge;
        border-color: gray;
        " draggable="false" ondragstart="return false;">
    </div>
    <hr class="couldDark">
    <br>
    <br>
</div>
<?php require('includes/footer.php'); ?>