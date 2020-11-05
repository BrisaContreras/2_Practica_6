<?php
    $var1;
    $var2 = null;
    $var3 = "null";
    if( is_null($var1) == true )
        echo "'var1' contiene un valor nulo<br/>";
    else
        echo "'var1' NO contiene un valor nulo<br/>";
    if( is_null($var2) == true )
        echo "'var2' contiene un valor nulo<br/>";
    else
        echo "'var2' NO contiene un valor nulo<br/>";
    if( is_null($var3) == true )
        echo "'var3' contiene un valor nulo<br/>";
    else
        echo "'var3' NO contiene un valor nulo<br/>";

    echo "----------------<br/>";
    echo "Fin del ejemplo.";
?>