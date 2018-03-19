<!doctype html>
<html>
  <head>
    <title>WEB-Welcome</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="NightDayMode.js"></script>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <input type="button" value="night" onclick=NDhandler(this)>
      <div id="grid">
        <ol>
          <li><a href="index.php?id=HTML">HTML</a></li>
          <li><a href="index.php?id=CSS">CSS</a></li>
          <li><a href="index.php?id=JavaScript">JavaScript</a></li>
        </ol>
        <div id="article">
          <h2>
            <?php
              if(isset($_GET['id'])){
                echo $_GET['id'];
              } else {
                echo 'WEB';
              }

            ?>
          </h2>
          <?php
            if(isset($_GET['id'])){
              /*보안적 문제 있음*/
              echo file_get_contents("data/".$_GET['id']);
            } else {
              echo file_get_contents("data/WEB");
            }
          ?>
        </div>
      </div>
  </body>
</html>
