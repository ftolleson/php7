<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 22.01.2016
 * Time: 8:14
 */
//echo "&#66;"; // в скобках код символа

$phrases = ['Хахаха', 'Хаха', 'Ха'];
$emojis = ["\u{1F600}", "\u{2702}", "\u{263A}"];

echo str_replace($phrases, $emojis, 'Хаха это очень смешно!');