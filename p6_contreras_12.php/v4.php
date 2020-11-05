<?php
    $var1  = "33.44";
    $var2  = "33,44";
    $var3  = 33.44;
    if( is_float($var1) == true )
        echo "'var1' contiene un número decimal<br/>";
    else
        echo "'var1' NO contiene un número decimal<br/>";
    if( is_float($var2) == true )
        echo "'var2' contiene un número decimal<br/>";
    else
        echo "'var2' NO contiene un número decimal<br/>";
    if( is_float($var3) == true )
        echo "'var3' contiene un número decimal<br/>";
    else
        echo "'var3' NO contiene un número decimal<br/>";
    echo "----------------<br/>";
    echo "Fin del ejemplo.";
?>
