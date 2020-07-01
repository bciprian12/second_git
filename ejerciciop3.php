<html>
<head>

<title>Practica 3</title>

</head>
<body>
    <h1>foreach, for, while</h1>
    <?php
    foreach(range(1,10) as $num ){
        echo  $num . '  ';           }

        echo '<br>';

    foreach(range(60,70) as $num ){
        echo $num . '  ';             }

        echo '<br>';

    foreach(range(20,1) as $num ){
        echo $num . '  ';            }

        echo '<br>';

    foreach(range(1,1000) as $num ){
        echo $num . '  ';            }
    
        echo '<br>';

        
    foreach(range(5,60, 5) as $num ){
        $tabla5[] = $num ;            }
        foreach($tabla5 as $multiplo => $resultado) {
            echo $multiplo + 1 . ' * 5 = ' .$resultado . '<br>';
        }
        echo '<br>';

    foreach(range(1,200) as $num){
        if ($num % 2 == 0){
            echo $num . ' es par <br>';
        }
        else {
            echo $num . ' es impar <br>';
        }
    }
    
    ?>
</body>
</html>