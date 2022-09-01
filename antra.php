<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalogai</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            max-width: 800px;
            margin: 0 auto;
        }
        body {
            background-color: lightskyblue;
        }
        #nav {
            text-decoration: none;
            font-size: 40px;
            border: 2px solid black;
            border-radius: 20px;
            width: 300px;
            padding: 20px;
            text-align: center;
            background-color: lawngreen;
            color: white;
        }
        li, a {
            list-style: none;
            text-emphasis: none;
        }
        .folders {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .back {
            text-decoration: none;
            font-size: 10px;
            border: 1px solid black;
            width: 100px;
            padding: 10px;
            text-align: center;
            background-color: red;
            color: white;
        }
        .knopkes {
            float: right;
        }
    </style>
</head>
<body>
    <div class="container">
    <a id="nav" href="pirma.php">Pirma užduotis</a>
    

    <?php
    

function printDir($dir){
    

    $d=opendir($dir);
    echo "<ul>";
    
    while($item=readdir($d)){
        if ($item=='.' ){
          continue;
      }
     

      if (is_dir($dir.'/'.$item) ){
        $diras='';
        if (isset($_GET['dir'])) {
            $diras=$_GET['dir'];
        }
        $pirmasKelias='http://localhost/RekursinesFunkcijos/antra.php?dir='. $diras;
       
          
          if($item == '..') 
          { 
            echo "<a class='back' href=" . $pirmasKelias . '/' . $item .">";
           
            echo "Go Back";
        } else 
        { 
            echo' <div class="visos_knopkes">'; 
            echo "<li class='folders'> <a href=" . $pirmasKelias . '/' . $item ."><img src='folder.png' style='width:24px'>";
           
          echo  $item;
          echo' <div class="knopkes">'; 
          echo '<form action="delete.php" method="post">';
          echo '<input type="submit" name="redaguoti" value="redaguoti">';
          echo '<input type="submit" name="trinti" value="trinti">';
          echo'</form>';
          echo' <div>';
          echo' <div>';
        }
          echo "</a>";
          
          echo "</li>";
      }else{
          echo "<li class='folders'>";
          echo' <div class="visos_knopkes">';

          $ext=pathinfo($dir."/".$item,PATHINFO_EXTENSION);
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
        $diras='';
        if (isset($_GET['dir'])) {
            $diras=$_GET['dir'];
        }
        
        echo '<a href="trecia.php?dir='.$diras.'/'.$item.'"target=_blank rel="noopener noreferrer">'.$item.'</a>';
        echo' <div class="knopkes">'; 
        echo '<form action="delete.php" method="post">';
        echo '<input type="submit" name="redaguoti" value="redaguoti">';
        echo '<input type="submit" name="trinti" value="trinti">';
        echo'</form>';
        echo' <div>';
        echo' <div>';
       echo '</li>';
       
    } else {
       
        echo $item;
        echo' <div class="knopkes">'; 
        echo '<form action="delete.php" method="post">';
        echo '<input type="submit" name="redaguoti" value="redaguoti">';
        echo '<input type="submit" name="trinti" value="trinti">';
        echo'</form>';
        echo' <div>';
        echo' <div>';
    }
  
      }
    }
    closedir($d);
    echo "</ul>";
   
  }
  
 // $dir='C:/Users/kesta/OneDrive/Documents/FrontEnd';
  $dir= 'C:/xampp/htdocs';
  $diras='';
  if (isset($_GET['dir'])) {
      $diras=$_GET['dir'];
  }
  printDir($dir.'/'.$diras);
  
 
  


?>
    </div>
   
</body>
</html>