 <?php
  include_once('config.php');
  include_once('antra.php');
  if (isset($_GET['file'])) {
    $file = $_GET['file'];    
  } 
  
  if (!is_dir(dir . '/' . $file)) {
    unlink(dir . '/' . $file);
  } else {
  rmdir(dir . '/' . $file);
  }

  ?>

 <body>
   <div class="container">
     <?php
      $backbutton = explode("/", $file);
      unset($backbutton[sizeof($backbutton) - 1]);
      $newbackbutton = implode("/", $backbutton);
      echo '<p>Failas <b>' . $file . '</b> ištrintas</p>';
      echo ' <a class="btn" href="funkcija.php?dir=' . $newbackbutton . '">Grįžti atgal</a>';

      ?>

   </div>

 </body>