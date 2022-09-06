<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/master.css">
    <link rel="icon" href="media/images/cog.png">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>ITWD6.408</title>
  </head>
  <body onload="checkcolor()">
    <header>
      <div class="hbox">
        <img id="global" src="media/images/global.png" alt="">
        <a href="index.php">ITWD6.408</a>
      </div>
      <div class="hbox" id="nav">
        <a href="index.php">      HOME</a>
        <a href="forms.php">      FORMS</a>
        <a href="xmljson.php">    XML/RSS</a>
        <a href="javascript.php"> JAVASCRIPT</a>
        <a href="research.php">   RESEARCH</a>
      </div>
      <div class="hbox">
        <button id="navopenerbutton" type="button" name="navopener" onclick="openMenu()"><img src="media/images/hamger2.png"></button>
      </div>
    </header>
    <div id="dropmenu" style=" max-height: 0px;">
      <a href="index.php">      HOME</a>
      <a href="forms.php">      FORMS</a>
      <a href="xmljson.php">    XML/RSS</a>
      <a href="javascript.php"> JAVASCRIPT</a>
      <a href="research.php">   RESEARCH</a>
    </div>
