<?php
$numParams = [1, 2];

list( $x, $y ) = $numParams;

var_dump( $x, $y );

$params = ['name' => 'chris', 'email' => 'code@chris.com'];

list( 'name' => $name, 'email' => $email ) = $params;

echo ( '<br />' );
var_dump( $name, $email );

echo ( '<br />' );
[$x2, $y2] = $numParams;
var_dump( $y2 );

echo ( '<br />' );
['name' => $name2, 'email' => $email2] = $params;
var_dump( $name2 );

echo ( '<br />' );
$numParams2 = [$x3, , , $y3] = [1, 50, 60, 2];

var_dump( $y3 );

echo ( '<br />' );

$user = [
    'name'    => 'chris',
    'address' => [
        'line1' => '24 rest',
    ],
];

[
    'name'    => $username,
    'address' => [
        'line1' => $addressLine1,
    ],
] = $user;

var_dump( $addressLine1 );

echo ( '<br />' );

$defaults = [
    'query' => null,
];

['host' => $host, 'query' => $query] = parse_url( 'https://codecourse.com?q=abc' ) + $defaults;

var_dump( $host, $query );
