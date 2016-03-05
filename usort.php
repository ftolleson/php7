<?php
error_reporting(-1);
ini_set('display_errors', 'On');
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 21.01.2016
 * Time: 17:40
 */

// в php 7
echo '<p>это уже php7</p>';
$numbers = [5, 9, 4, 6, 1, 7, 3, 2, 8];

function sortNumbers ($param1, $param2) {
    return $param1 <=> $param2;
}

usort($numbers, 'sortNumbers');

echo '<pre>';
print_r($numbers);
echo '</pre>';