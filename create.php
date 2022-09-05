<?php
include_once('config.php');
include_once('antra.php');
$current = '';
$file = $_POST['files'];
$textas = $_POST['textas'];
$dir = '';

if (isset($_POST['files'])) {
  $file11 = $_POST['files'];
  $kelias = $_POST['path'];

  if ($file11 == 'php') {
    $file = $textas . '.php';
    $current .= $textas;
    file_put_contents(dir . '/' . $kelias.'/' . $file, $current);
  } else if ($file11 == 'text') {
    $file = $textas . '.txt';
    $current .= $textas;
    file_put_contents(dir . '/' . $kelias.'/' . $file, $current);
  } else if ($file11 == 'html') {
    $file = $textas . '.html';
    $current .= $textas;
    file_put_contents(dir . '/' . $kelias.'/' . $file, $current);
  } else if ($file11 == 'css') {
    $file = $textas . '.css';
    $current .= $textas;
    file_put_contents(dir . '/' . $kelias.'/' . $file, $current);
  } else if ($file11 == 'folder') {
    mkdir(dir . '/' . $kelias.'/' . $textas, 0777, true);
    $file = $textas;
  }
 
}

?>

<body>
  <div class="container">
    <?php
    $backbutton = explode("/", $file);
    unset($backbutton[sizeof($backbutton) - 1]);
    $newbackbutton = implode("/", $backbutton);
    echo '<p>Failas <b>' . $file . '</b> pridėtas</p>';
    echo ' <a class="btn" href="funkcija.php?dir='. $kelias. '/' . $newbackbutton . '">Grįžti atgal</a>';

    ?>

  </div>

</body>