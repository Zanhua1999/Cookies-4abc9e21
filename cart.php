<!DOCTYPE html>
<html>

  <head>
      <meta charset="UTF-8">
      <title>Bit Academy</title>
  </head>

<body>
    <h1>Skateboard <small>(#1)</small></h1>
    <h1>Basketbal <small>(#2)</small></h1>
    <h1>Skeelers <small>(#3)</small></h1>


    <form action='cart.php' method='post' class='form'>
      <input type='text' name='keuze' id='keuze' required>
      <input type='submit' name='btn' id='btn' value='submit'>
    </form>

    <?php
    session_start();
    $c1 = '#1';
    $c2 = '#2';
    $c3 = '#3';

    setcookie('#1', $c1);
    setcookie('#2', $c2);
    setcookie('#3', $c3);

    if (isset($_POST['btn'])) {
      $input = $_POST['keuze'];

      if ($_COOKIE[$input]) {
        echo ('<h1> je keuze is ' . $_COOKIE[$input] . '</h1>');
      }
    }
    ?>
  </body>

</html>
