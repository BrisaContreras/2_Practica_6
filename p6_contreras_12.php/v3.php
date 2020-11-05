<?php
    $var1  = 33;
    $var2  = "33";
    $var3  = "33 44";
    $var4  = "33.44";
    $var5  = "33,44";
    $var6  = 33.44;
    if( is_int($var1) == true )
        echo "'var1' contiene un número entero<br/>";
    else
        echo "'var1' NO contiene un número entero<br/>";
    if( is_int($var2) == true )
        echo "'var2' contiene un número entero<br/>";
    else
        echo "'var2' NO contiene un número entero<br/>";
    if( is_int($var3) == true )
        echo "'var3' contiene un número entero<br/>";
    else
        echo "'var3' NO contiene un número entero<br/>";
    if( is_int($var4) == true )
        echo "'var4' contiene un número entero<br/>";
    else
        echo "'var4' NO contiene un número entero<br/>";
    if( is_int($var5) == true )
        echo "'var5' contiene un número entero<br/>";
    else
        echo "'var5' NO contiene un número entero<br/>";
    if( is_int($var6) == true )
        echo "'var6' contiene un número entero<br/>";
    else
        echo "'var6' NO contiene un número entero<br/>";
    echo "----------------<br/>";
    echo "Fin del ejemplo.";
?>
