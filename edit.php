<?php 
include "antra.php";
?>

 <?php
  session_start();
  if (!(isset($_SESSION['login']) && $_SESSION['login']==1)){
    header("location:login.php");
    die();
  }
  
?> 


<?php
 include_once('config.php');
 if (isset($_GET['file'])){
   $file=$_GET['file'];
   if (isset($_POST['content'])){
    $content=$_POST['content'];
    file_put_contents(dir.'/'.$file,$content);
   } 
  
   $content=file_get_contents(dir.'/'.$file);
  }
  $backbutton = explode("/", $file);
  unset($backbutton[sizeof($backbutton)-1]);
  $newbackbutton=implode("/", $backbutton);
?>
<body>
    <div class="container">

<a class="btn" href="funkcija.php?dir=<?=$newbackbutton?>" > Atgal</a>

<h1>Failas: <?=$file?></h1>

<form method="POST" action="">
<textarea name="content"  style="width:100%; height: 300px;"><?=$content?></textarea>
<button>Save</button>
</form>

</div>
   
   </body>
