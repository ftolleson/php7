<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 22.01.2016
 * Time: 7:27
 */
/*if ( isset($data['field']) ) {
    $field = $data['field'];
} else {
    $field = 'default';
}
//либо более компактно:
$fiels = 'default';
if ( isset($data['field']) ) {
    $field = $data['field'];
}
// или:
$field = isset($data['field']) ? $data['field'] : 'default';
$field = $data['field'] ?? 'default';
// также в таком духе можно строить целые цепочки:
$field = $data['field'] ?? $variable1 ?? $object->field ?? 'default';*/

$param = $_GET['param'] ?? 'default';
echo $param;