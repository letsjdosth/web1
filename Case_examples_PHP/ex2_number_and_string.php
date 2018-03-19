<!doctype html>
<html>
  <body>
    <h1>echo &  print in PHP</h1>
    <?php echo 1; ?>
    <br>
    <?php print(1.2); ?>

    <h1>number</h1>
    <h2>arithmetic binary operators</h2>
    <h2>1+1</h2>
    <?php echo 1+1;  ?>
    <h2>2-1</h2>
    <?php echo 2-1; ?>
    <h2>2*3</h2>
    <?php echo 2*3; ?>
    <h2>4/2</h2>
    <?php echo 4/2; ?>

    <h1>string</h1>
    <?php
      echo 'hello world!';
      echo "hello world!";
      echo 'hello "world"!';
      echo "hello \"w\"orld!";
    ?>
    <h2>concatenation operator</h2>
    <?php
      echo "hello "."world!";
     ?>
    <h2>length of string</h2>
    <?php
      echo strlen("hello world!")
    ?>
  </body>
</html>
