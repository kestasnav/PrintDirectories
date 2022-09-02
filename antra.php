

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
            font-size: 20px;
            border: 2px solid black;
            border-radius: 20px;
            width: 150px;
            padding: 20px;
            text-align: center;
            background-color: lawngreen;
            color: white;
        }
        li, a {
            text-decoration: none;
            list-style: none;
            text-emphasis: none;
            margin-top: 20px;
            margin-bottom: 20px;
        }
      
        .btn {
            text-decoration: none;
            font-size: 15px;
            border: 1px solid black;
            width: 100px;
            padding: 6px;
            text-align: center;
            background-color: red;
            color: white;
            margin: 5px;
          
        }
        .knopkes {
            float: right;
        }
        img {
            padding-right: 10px;
            align-items: center;
            justify-content: center;
        }
       
    </style>
</head>
<body>
    <div class="container">
    
 
    <h4>Jūs esate prisijungęs: </h4>
    <a class='btn' href="login.php?logout=1">Atsijungti</a>

   
    </div>
   
</body>
</html>