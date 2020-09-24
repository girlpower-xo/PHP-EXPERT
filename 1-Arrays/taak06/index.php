<?php
$provincies = [
    [
        'provincie' => 'Groningen',
        'hoofdstad' => 'groningen',
        'bevolking' => '583990',
        'inwoners_gemeente' => "groningen",
    ],

    [
        'provincie' => 'Overijssel',
        'hoofdstad' => 'zwolle',
        'bevolking' => 1156431,
        'inwoners_gemeente' => 'Enschede',
    ],

    [
        'provincie' => 'Noord-Holland',
        'hoofdstad' => 'Haarlem',
        'bevolking' => 28533359,
        'inwoners_gemeente' => 'Amsterdam',
    ],

    [
        'provincie' => 'zuid-Holland',
        'hoofdstad' => 'Denhaag',
        'bevolking' => 3673893,
        'inwoners_gemeente' => 'Rotterdam',
    ]



];

foreach($provincies as $provincie ){
    echo '<h2>' . $provincie['provincie']. '</h2>';
    echo '<ul>';
    echo '<li>hoofdstad: ' . $provincie['hoofdstad']. '</li>';
    echo '<li>bevolking: ' . $provincie['bevolking']. '</li>';
    echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente']. '</li>';
    echo '</ul>';

}