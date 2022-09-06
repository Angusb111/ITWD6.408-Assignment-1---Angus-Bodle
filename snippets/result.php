<html>
  <head>
    <link rel="stylesheet" href="../css/master.css">
    <link rel="icon" href="../media/images/cog.png">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>ITWD6.408</title>
  </head>
  <body onload="checkcolor()">
    <h2>Thanks!</h2>
    <form id="approveform" action="../javascript.php" method="POST">
      <input type="hidden" value="'.$id.'" name="id">
      <input id="deletebutton" type="submit" name="submit" value="go back">
    </form>
  </body>
</html>
