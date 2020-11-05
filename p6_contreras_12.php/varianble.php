<?php
    $var1 = true;
    $var2 = false;
    $var3 = 1;

    // Se devuelve 'true'
    if( is_bool($var1) == true )
        echo "'var1' contiene un valor lógico<br/>";
    else
        echo "'var1' NO contiene un valor lógico<br/>";

    // Se devuelve 'true'
    if( is_bool($var2) == true )
        echo "'var2' contiene un valor lógico<br/>";
    else
        echo "'var2' NO contiene un valor lógico<br/>";

    // Se devuelve 'false' (la variable no contiene un valor lógico, ya que se ha asignado un número)
    if( is_bool($var3) == true )
        echo "'var3' contiene un valor lógico<br/>";
    else
        echo "'var3' NO contiene un valor lógico<br/>";

    echo "----------------<br/>";
    echo "Fin del ejemplo.";
?>
