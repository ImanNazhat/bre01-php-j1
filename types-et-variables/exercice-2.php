Déclarez un tableau de nombres appelé `$nb_tab` qui contient des `int` et des `float` et affichez-le en utilisant `print_r`.

Déclarez un tableau de nombres appelé `$str_tab` qui contient des `string` et affichez-le en utilisant `print_r`.

La documentation de `print_r` : https://www.php.net/manual/fr/function.print-r.php

<?php

$nb_tab = [2 , 5.4 , 6 , 1.5];
print_r($nb_tab);

$str_tab = ["20" , "3" , "8"];
print_r($str_tab);

?>