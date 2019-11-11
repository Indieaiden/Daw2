<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dolarserver</title>
    <meta name="description" content="$_Server">
    <meta name="author" content="Javier">
  </head>
  <body>
    <pre>
      <?php
      echo $_SERVER["PHP_SELF"]."<br>";
      echo $_SERVER["SERVER_ADDR"]."<br>";
      echo $_SERVER["SERVER_NAME"]."<br>";
      echo $_SERVER["SERVER_PORT"]."<br>";
      echo $_SERVER["SERVER_SOFTWARE"]."<br>";
      echo $_SERVER["SERVER_PROTOCOL"]."<br>";
      echo $_SERVER["HTTP_ACCEPT"]."<br>";

       ?>
    </pre>
  </body>
</html>
