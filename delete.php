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
 if (isset($_GET['file'])){
   $file=$_GET['file'];
   unlink(dir.'/'.$file);
 }else if(!is_dir(dir.'/'.$file)) {
  mkdir(dir.'/'.$file);
}
rmdir(dir.'/'.$file);

?>
<body>
    <div class="container">
<?php
$backbutton = explode("/", $file);
unset($backbutton[sizeof($backbutton)-1]);
$newbackbutton=implode("/", $backbutton);
  echo'<p>Failas <b>'.$file.'</b> ištrintas</p>';
   echo' <a class="btn" href="funkcija.php?dir='.$newbackbutton.'">Grįžti atgal</a>';

   ?>

</div>
   
   </body>