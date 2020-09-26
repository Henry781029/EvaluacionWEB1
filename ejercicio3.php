<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPRING STEP</title>
</head>
<body>

    <header>
        <h1> TIENDA DE ZAPATOS SPRING STEP</h1>
        <br>



    </header>

    <main>
    
        <?php
            
            $zapatos1 = "botas pantaneras";
            $zapatos2 = "sandalias";
            $zapatos3 = "pepitos";
            $zapatos4 = "tres puntadas";
            $zapatos5 = "zodiak";
            $zapatos6 = "tenis";
            $zapatos7 = "mocasines";
            $zapatos8 = "chanclas";
            $zapatos9 = "babuchas";
            $zapatos10 = "alpargatas";

            $costo1 = 20000;
            $costo2 = 35000;
            $costo3 = 45000;
            $costo4 = 25000;
            $costo5 = 55000;
            $costo6 = 120000;
            $costo7 = 85000;
            $costo8 = 15000;
            $costo9 = 62000;
            $costo10 = 24000;

            $descuento = 5/100;  

            $CostoTotal = $costo1+$costo2+$costo3+$costo4+$costo5+$costo6+$costo7+$costo8+$costo9+$costo10;

            $ParesZapato = array($zapatos1,$zapatos2,$zapatos3,$zapatos4,$zapatos5,$zapatos6,$zapatos7,$zapatos8,$zapatos9,$zapatos10);

            echo ("Su pago total equivale a :\n" . $CostoTotal);

            echo ("<br>");
            echo ("<br>");
            echo ("<br>");

            print_r ($ParesZapato);
              
        
        
        ?>
    
    
    </main>


    <footer>
    
    
    
    
    </footer>
    
</body>
</html>