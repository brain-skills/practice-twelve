<?php
    // Функция для получения сокращенного имени
    function getShortName($fullname) {
        // Получаем части ФИО
        $parts = getPartsFromFullname($fullname);
        // Сокращаем фамилию и отбрасываем отчество
        $shortName = $parts['name'] . ' ' . mb_substr($parts['surname'], 0, 1) . '.';
        return $shortName;
    }
    // Получаем сокращенное имя
    $shortName = getShortName($fullname);
    // Выводим на экран
    echo '<h3>2) Сокращаем ФИО:</h3>';
    echo 'Сокращенное имя: ' . $shortName . '<br>';
    echo '<br>';