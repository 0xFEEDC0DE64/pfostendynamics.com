<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="./css/darkmode.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />

    <title><?php echo htmlentities(PAGE_TITLE); ?> | Pfosten Dynamics</title>
    <link rel="icon" href="./img/favicon.png" />
  </head>

  <body style="width: 100vw !important; overflow-x: hidden !important;" class="couldDark <?php if($_COOKIE["darkmode"] == "true") echo "darkMode"; ?>">
<?php require('navbar.php') ?>
