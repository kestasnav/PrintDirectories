 <?php

if (isset($_POST['user'])) {
  setcookie('username',$_POST['user'], time()+60*60*24);
}

  session_start();
  if (isset($_POST['user']) && isset($_POST['password'])) {
    $password=$_POST['password'];
    if ($_POST['user'] == 'Kęstas' && (password_verify($password,'$2y$10$.AUaOMbuLxeOlMG6ECyYRupzggC0nRvKSSTU/EQwmkJnzewCws9dG'))){
      $_SESSION['login'] = 1;
      $_SESSION['user'] = $_POST['user'];
      $user = $_SESSION['user'];

      header("location:funkcija.php");
      die();
    }
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION);
    
  }
 
  ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Prisijungimas</title>
   <style>
     .container {
       display: flex;
       flex-direction: column;
       align-items: center;
       max-width: 800px;
       margin: 100px auto;
     }

     body {
       background-color: lightskyblue;
     }

     input {
       margin: 20px;
     }

     form {
       display: flex;
       flex-direction: column;
       align-items: center;
       border: solid black 1px;
       padding: 15px;
       border-radius: 20px;
     }

     button {
       align-self: center;
     }
   </style>

 </head>

 <body>
   <div class="container">
     <h1>Prisijungimo forma:</h1>
     <form action="" method="post">
       <div>
         <input type="text" name="user" placeholder="Username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"> <br>
         <input type="password" name="password" placeholder="Password"> <br>
       </div>
       <button>Prisijungti</button>
     </form>
   </div>
 </body>

 </html>
