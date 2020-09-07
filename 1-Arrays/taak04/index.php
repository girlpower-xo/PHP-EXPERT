<?php

$speelgoed = [

    [
        'naam' => 'bal',
        'soort' => 'sport',
        'prijs' => '5.00'
    ],
    [
        'naam' => 'knuffelbeer',
        'soort' => 'knuffels',
        'prijs' => '9.50'
    ],
    [
        'naam' => 'Catan',
        'soort' => 'bordspel',
        'prijs' => '39.00'
    ],
];




$games = [
    'sport' => [
        'naam' => 'Fifa',
        'uitgever' => 'EA',
        'prijs' => '60.00'
    ],
    'action' => [
        'naam' => 'Doom',
        'uitgever' => 'Bethesda',
        'prijs' => '60.00'
    ],
    'fps' => [
        'naam' => 'Left for dead 2',
        'uitgever' => 'Valve',
        'prijs' => '40.00'
        ]
];

//echo "speelgoed " ." ". $speelgoed[0]['naam'] ." ". "uit de catogorie" ." ".  $speelgoed[0]['soort'] ." ".  "kost" ." ". $speelgoed[0]['prijs'];
// het kan op deze manier maar dan moet je heel veel uit type het kan makkelijker met een foreach loop zie hier onder

foreach ($speelgoed as $speel => $value) {
    echo $value['naam'] . " uit de categorie " . $value['soort'] . ' kost ' . $value['prijs'] . '<br>';
}

foreach ($games as $game => $value) {
    echo $value['naam'] . " uit de categorie " . $value['uitgever'] . ' kost ' . $value['prijs'] . '<br>';
}