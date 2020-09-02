<?php
$medewerkers = [
    [
      'voornaam' => ' Willem ',
      'achternaam' => ' van Oranje ',
      'functie'  => ' koning '
    ],
    [
      'voornaam' => ' Donald ',
      'achternaam' => ' Trump ',
      'functie'  => ' president '
    ],
    [
      'voornaam' => ' Homer ',
      'achternaam' => ' Simpson ',
      'functie'  => ' fabrieksarbeider '
    ],
    [
      'voornaam' => ' Johan ',
      'achternaam' => ' Cruyff ',
      'functie'  => ' voetbalicoon '
    ]
    ,
    [
      'voornaam' => ' Badr ',
      'achternaam' => ' Hari ',
      'functie'  => ' Kickboxer '
    ]
  ];
  
  /*  De medewerkers-array heeft nu meerdere arrays. */

  for ($i=0; $i < 1; $i++) { 
    echo $medewerkers[0]['voornaam']. $medewerkers[0]['achternaam'] . $medewerkers[0]['functie'] . '<br>';
    echo $medewerkers[1]['voornaam']. $medewerkers[1]['achternaam'] . $medewerkers[1]['functie'] . '<br>';
    echo $medewerkers[2]['voornaam']. $medewerkers[2]['achternaam'] . $medewerkers[2]['functie'] . '<br>';
    echo $medewerkers[3]['voornaam']. $medewerkers[3]['achternaam'] . $medewerkers[3]['functie'] . '<br>';
    echo $medewerkers[4]['voornaam']. $medewerkers[4]['achternaam'] . $medewerkers[4]['functie'] . '<br>';
  }