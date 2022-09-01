<a id="nav" href="antra.php">Grįžti į katalogus</a>
<?php

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
$kelias = $_GET['dir'];

$failas = $root.$kelias;


    $text = file_get_contents($failas);


 echo' <form action="" method="GET">';
 echo'<input type="submit" name="save" value="Save" style="width: 50px; height: 50px; background-color:red; color:white">';
 echo' <textarea style="width: 100%; height: 100%" >'. htmlspecialchars($text).'</textarea>';
 
 echo' </form>';
  


?>

<style>

        #nav {
            margin-top: 80px;
            margin-left: 80px;
            text-decoration: none;
            font-size: 20px;
            border: 2px solid black;
            border-radius: 20px;
            width: 50px;
            padding: 20px;
            text-align: center;
            background-color: blue;
            color: white;
        }
        li, a {
            list-style: none;
            text-emphasis: none;
        }
       </style>