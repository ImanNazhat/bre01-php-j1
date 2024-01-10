

<?php

$users = [
	[
		"firstName" => "Mari",
		"lastName" => "Doucet"
	],
	[
		"firstName" => "Hugues",
		"lastName" => "Froger"
	]
];

foreach($users as $user)
     {
    print_r ($user["firstName"]);
    print_r ($user["lastName"]);
    echo "<br>";
    
    	}
    
?>