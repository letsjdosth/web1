<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <!--- http://127.0.0.1/Case_examples_PHP/parameter.php?name=jun&adress= --->
    안녕하세요,
    <?php
      echo $_GET['adress'];
    ?>
    에서 오신
    <?php
      echo $_GET['name'];
      /*
      * url로부터 값을 (변수로) 받는다!
      * php파일명 뒤에 ?변수=전달값 으로 url에 입력,
      * (여러 개 입력시에는 php?변수1=전달값1&변수2=전달값2&... 으로 url에 입력)
      * $_GET['변수'] 로 php코드에서 활용
      */
    ?>
    님!

  </body>
</html>
