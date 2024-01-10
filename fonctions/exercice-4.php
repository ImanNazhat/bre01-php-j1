
// <?php

// function getFirst(array $tabs) : int
// {
//     foreach($tabs as $tab){
        
//      if($tab !== [])
//     {
//       return "$tab[$i]";
//     }
//     else
//     {
//         return null;
//     }
    
// }
// }

// echo getFirst([13, 24, 45]);
// echo "<br>";
// var_dump(getFirst([]));
// echo "<br>";

// ?>

<?php

function getFirst(array $tab) : ? int
{
    if(count($tab) > 0)
        return $tab[0];

    return null;
}

var_dump(getFirst([13, 24, 45]));
echo "<br>";
var_dump(getFirst([]));
echo "<br>";