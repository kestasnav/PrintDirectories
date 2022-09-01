<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Didžiausias bendras vardiklis</title>
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
        a {
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
    </style>
</head>
<body>
    <div class="container">
        <a href="antra.php">Antra užduotis</a>
        <div class="title">
            <h1>Užduotis:</h1>
            <p>Parašykite rekursinę funkciją dviejų natūraliųjų skaičių didžiausiam bendram dalikliui
            (dbd) rasti.</p>
        </div>
        <form method="GET" action="">
            <input type="hidden" name="hidden" value="1">
            <input type="text" placeholder="Įveskite pirmą skaičių" name="sk1" id="sk">
            <input type="text" placeholder="Įveskite antrą skaičių" name="sk2" id="sk">
            <button>Išvesti</button>
        </form>
        <div class="isvedimas">
            <?php 
            if (isset($_GET['hidden'])) {

                $sk1=$_GET['sk1'];
                $sk2=$_GET['sk2'];

                

            
                function rekurs ($sk1, $sk2){
                    if($sk1 == $sk2) {
                       return $sk1;
                    } else if ($sk1 < $sk2){
                      return rekurs($sk1, ($sk2 - $sk1));
                    } else {
                       return rekurs(($sk1 - $sk2), $sk2);
                    }
                }
                echo  "<p>Didžiausias bendras vardiklis: ". rekurs($sk1, $sk2)."</p>";
            }

            ?>
        </div>
    </div>
</body>
</html>