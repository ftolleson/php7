<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 27.01.2016
 * Time: 20:19
 */
$strongs = []; // определили массив для фраз в тегах <strong>
$ems = []; // определили массив для фраз в тегах <em>

$text = '<strong>Теорема Гаусса</strong> - Остроградского нейтрализует нормальный скачок функции. Ввиду непрерывности функции f ( x ), ортогональный определитель естественно <em>привлекает комплексный максимум</em>. Интеграл Фурье накладывает анормальный многочлен. Тем не менее, линейное программирование стремительно допускает <strong>интеграл</strong> от функции комплексной переменной. К тому же <em>критерий сходимости Коши</em> специфицирует интеграл от функции, обращающейся в бесконечность вдоль линии. <strong>Система координат</strong>, исключая очевидный случай, естественно <em>раскручивает</em> разрыв функции.';

preg_replace_callback_array([
    "#<strong>(.+?)</strong>#" => function($word) use (&$strongs) {
        $strongs[] = $word[1];
    },
    "#<em>(.+?)</em>#" => function($word) use (&$ems) {
        $ems[] = $word[1];
    }
], $text);

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
    <!--<link rel="stylesheet" href="style.css">-->
    <title>Функция preg_replace_callback_array</title>
</head>
<body>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-4 col-md-offset-0" style="background-color: antiquewhite">
                <p>
                    <?php
                        echo '<pre>';
                        var_dump($strongs);
                        var_dump($ems);
                        echo '</pre>';
                    ?>
                </p>
            </div>
        </div>
    </div>
</main>
<!-- jQuery first, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
</body>
</html>