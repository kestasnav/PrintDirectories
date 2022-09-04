<?php
    include_once('antra.php');
    include_once('config.php');

?>
<a id="nav" href="pirma.php">Pirma užduotis</a>
<body>   
    <div class="container">
      
<?php
function printDir($dir){    

    $d=opendir(dir.'/'.$dir);
    echo "<ul>";
    $file = '';
    if (isset($_GET['file'])){
        $file=$_GET['file'];
    }
    $backbutton = explode("/", $file);
    unset($backbutton[sizeof($backbutton)-1]);
    $newbackbutton=implode("/", $backbutton);
   echo' <a href="funkcija.php?dir='.$newbackbutton.'"><p class="btn">Atgal</p></a>';
   echo'<form method="POST" action="create.php">
   <input type="text" name="textas" placeholder="Įveskite failo pavadinimą">
   <label>Pasirinkite Failo tipą</label>
   <select name="files" id="file">
     <option value="failas">Pasirinkite Failo tipą</option>
     <option value="text">Text</option>
     <option value="php">PHP</option>
     <option value="html">HTML</option>
     <option value="css">CSS</option>
     <option value="folder">Folder</option>
   </select>';
   echo'<button>Create</button>';
    echo' </form>'; 
    while($item=readdir($d)){
        if ($item=='.' || $item=='..'){
            continue;
        }    
       

      if (is_dir(dir.'/'.$dir.'/'.$item) ){
        echo "<li class='folders'>";       
        echo "<img src='folder.png' style='width:24px'>";
        echo" <a href='?dir=".$dir.'/'.$item."'> <b>$item</b>";           
        echo' <div class="knopkes">';
        echo "<a class='btn' href='delete.php?file=$dir/$item'>Delete</a>";        
        echo "</a>";
        echo "</li>";
      }else{
          echo "<li class='folders'>";
          echo' <div class="visos_knopkes">';

          $ext=pathinfo(dir.'/'.$dir."/".$item,PATHINFO_EXTENSION);
          if ($ext=='php'){
              echo "<img src='php.svg' style='width:24px'>";              
          }
          else if ($ext=='txt'){
            echo "<img src='text.png' style='width:24px'>";              
        }
          else if ($ext=='css'){
            echo "<img src='css.png' style='width:24px'>";              
        }
         else if ($ext=='html') {
            echo "<img src='html.png' style='width:24px'>";
        } else {
           echo "<img src='NA.png' style='width:24px'>";
        }
        
        if ($ext=='php' || $ext=='ini' || $ext=='txt'){
               
        echo "<a href='edit.php?file=$dir/$item'>$item<a>";
        echo' <div class="knopkes">'; 
        echo "<a class='btn' href='edit.php?file=$dir/$item'>Edit</a>";
        echo "<a class='btn' href='delete.php?file=$dir/$item'>Delete</a>";
        echo' <div>';
        echo' <div>';
       echo '</li>';
       
    } else {
       
       echo $item;
       echo' <div class="knopkes">'; 
       echo "<a class='btn' href='delete.php?file=$dir/$item'>Delete</a>";
       echo' <div>';
     
    }  
      }
    }
    closedir($d);
    echo "</ul>";
   
  }
  
  $dir='';
  if (isset($_GET['dir'])) {
      $dir=$_GET['dir'];
  }
  printDir($dir);

?>
 </div>
   
   </body>