<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 22.01.2016
 * Time: 14:04
 */
$ruC = [
    'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я'
];
$grC = [
    "\u{0391}", "\u{03E6}", "\u{0392}", "\u{0393}", "\u{0394}", "\u{0395}", "\u{0388}", "\u{03E2}", "\u{0396}", "\u{0399}", "\u{0399}", "\u{039A}", "\u{039B}", "\u{039C}", "\u{039D}", "\u{038C}", "\u{03A0}", "\u{03A1}", "\u{03F9}", "\u{0372}", "\u{038E}", "\u{03A6}", "\u{03A7}", "\u{0426}", "\u{03E4}", "\u{0428}", "\u{03E2}", "\u{042A}", "\u{042B}", "\u{044C}", "\u{03FF}", "\u{042E}", "\u{042F}"
];
$string = 'Организация практического взаимодействия, отбрасывая подробности, транслирует популярный целевой сегмент рынка. Инвестиция притягивает рейтинг, учитывая современные тенденции. Целевой сегмент рынка индуктивно отталкивает креативный продукт. Итак, ясно, что креатив индуктивно экономит типичный ребрендинг.';

$string = str_replace($ruC, $grC, mb_strtoupper($string));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <title>Розыгрыш на первое апреля</title>
    <script src="http://maps.api.2gis.ru/2.0/loader.js"></script>
</head>
<body>
<div class="container">
    <h1>Привет, Дружище! Вот тебе карта! (+Тест по API 2ГИС)</h1>
    <div id="map" style="width: 100%; height: 400px;"></div>
    <script>
        DG.then(function() {
            DG.map('map', {
                center: [54.98, 82.89],
                zoom: 13
            });
        });
    </script>
    <p><?php echo $string; ?></p>
</div>

<!-- jQuery first, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
</html>

