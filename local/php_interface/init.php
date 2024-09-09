<?php

#Константы
if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/constants.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/constants.php");
}

#Автозагрузка классов
if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/autoload.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/autoload.php");
}

#Функции
if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/functions.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/functions.php");
}

#Обработчики событий
if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/events.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/events.php");
}

