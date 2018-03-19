<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>conditional statement</h1>
    <h2>if</h2>
    <?php
      echo '1<br>';
      if(false){
        echo '2<br>';
      }
      if(true){
        echo '3<br>';
      }
      /* 1일때 실행 */
    ?>
    <h2>if-else</h2>
    <?php
      if(false){
        echo '4<br>';
      } else {
        echo '5<br>';
      }
    ?>
  </body>
</html>
