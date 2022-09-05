<?php



include ("config.php");
include("antra.php");
echo'<div class="container">
<body>';
$file = '';
$result=0;
function printDir($dir, $name){
    $d=opendir($dir);
    global $result;
    
    while($item=readdir($d)){
      if ($item=='.' || $item=='..'){
          continue;
      }
      
      if ($item==$name){
       // echo "$dir/$item <br>";
        echo "<a href='edit.php?file=$item'>$dir/<b>$item</b></a>";
        $result++;
      }

      if (is_dir($dir.'/'.$item) ){
            $result=printDir($dir."/".$item,$name);
      }else{
      }
    }
    closedir($d);
    return $result;
  }
  

 if (isset($_POST['search'])){
    $file=$_POST['search'];
    
    $files=printDir(dir.'/'.$_POST['path'], $file);

    if ($files==0){
        echo "<br><br>Failas nerastas";
      
    }
 }

 $backbutton = explode("/", $file);
  unset($backbutton[sizeof($backbutton)-1]);
  $newbackbutton=implode("/", $backbutton);
?>

<br>
<br>
<a class="btn" href="funkcija.php?dir=<?=$newbackbutton?>" > Atgal</a>

    </div>
</body>