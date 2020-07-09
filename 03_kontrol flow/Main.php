<?php
    // pengulangan
    //1.for
    //2.while
    //3.do.. while
    //4.foreach --> pengulangan khusus array

    for($i=0;$i<10;++$i){
        echo "Hello World <br>";
    }
    echo "<br>";
    $a = 0;
    while ($a < 10) {
        echo "Hello World <br>";
        $a++;
    }
    echo "<br>";
    $b = 0;
    do{
        echo "Hello World <br>";
        $b++;
    }while ($b < 10);
?>