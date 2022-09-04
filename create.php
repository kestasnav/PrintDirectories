<?php
  session_start();
  if (!(isset($_SESSION['login']) && $_SESSION['login']==1)){
    header("location:login.php");
    die();
  }
  
?> 
<?php
 include_once('config.php');
 include_once('antra.php');
  $current = '';
  $file = $_POST['files'];
  $textas = $_POST['textas'];
  
 if (isset($_POST['files'])){
   $file11 = $_POST['files'];
   
     if ($file11 == 'php') {
        $file = $textas.'.php';
    } else if ($file11 == 'text') {
        $file = $textas.'.txt';
    }else if ($file11 == 'html') {
        $file = $textas.'.html';
    }else if ($file11 == 'css') {
        $file = $textas.'.css';
    } else if ($file11 == 'folder') {        
            mkdir(dir.'/'.$textas, 0777, true);                          
    } 


$current .= 'Naujas Failas';

file_put_contents(dir.'/'.$file, $current);

}
 
?>
<body>
    <div class="container">
<?php
$backbutton = explode("/", $file);
unset($backbutton[sizeof($backbutton)-1]);
$newbackbutton=implode("/", $backbutton);
  echo'<p>Failas <b>'.$file.'</b> pridėtas</p>';
   echo' <a class="btn" href="funkcija.php?dir='.$newbackbutton.'">Grįžti atgal</a>';

   ?>

</div>
   
   </body>