<?php
error_reporting(-1);
ini_set('display_errors', 'On');
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 21.01.2016
 * Time: 18:36
 */
echo '<p>Сортировка по дате рождения</p>';
$arrays = [
    [
        'first_name' => 'Григорий',
        'last_name'  => 'Терентьев',
        'city'       => 'Москва',
        'birthday'   => '05.05.1984'
    ],
    [
        'first_name' => 'Владислав',
        'last_name'  => 'Фомин',
        'city'       => 'Санкт-Петербург',
        'birthday'   => '09.06.1972'
    ],
    [
        'first_name' => 'Антон',
        'last_name'  => 'Калашников',
        'city'       => 'Новосибирск',
        'birthday'   => '08.02.1972'
    ],
    [
        'first_name' => 'Юрий',
        'last_name'  => 'Терентьев',
        'city'       => 'Москва',
        'birthday'   => '07.02.1975'
    ],
    [
        'first_name' => 'Антон',
        'last_name'  => 'Лазарев',
        'city'       => 'Санкт-Петербург',
        'birthday'   => '10.07.1982'
    ]
];

function sortByBirthday ($first, $second) {
    return strtotime($first['birthday']) <=> strtotime($second['birthday']);
}

usort($arrays, 'sortByBirthday');
echo '<pre>';
print_r($arrays);
echo '</pre>';
//echo strtotime('10.07.1972');



