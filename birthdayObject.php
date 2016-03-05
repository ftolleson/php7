<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 21.01.2016
 * Time: 21:00
 */
$object1 = new \StdClass;
$object1->firstName = 'Григорий';
$object1->lastName  = 'Терентьев';
$object1->city      = 'Москва';
$object1->birthday  = '05.05.1984';

$object2 = new \StdClass;
$object2->firstName = 'Владислав';
$object2->lastName  = 'Фомин';
$object2->city      = 'Санкт-Петербург';
$object2->birthday  = '09.06.1972';

$object3 = new \StdClass;
$object3->firstName = 'Антон';
$object3->lastName  = 'Калашников';
$object3->city      = 'Новосибирск';
$object3->birthday  = '08.02.1972';

$object4 = new \StdClass;
$object4->firstName = 'Юрий';
$object4->lastName  = 'Терентьев';
$object4->city      = 'Москва';
$object4->birthday  = '07.02.1975';

$object5 = new \StdClass;
$object5->firstName = 'Антон';
$object5->lastName  = 'Лазарев';
$object5->city      = 'Санкт-Петербург';
$object5->birthday  = '10.07.1982';

$objects = [$object1, $object2, $object3, $object4, $object5];

function sortByBirthday ($first, $second) {
    return strtotime($first->birthday) <=> strtotime($second->birthday);
}

usort($objects, 'sortByBirthday');

echo '<pre>';
print_r($objects);
echo '</pre>';