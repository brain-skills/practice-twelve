<?php
    // Функция для получения сокращенного имени
    function getShortName($fullname) {
        // Получаем части ФИО
        $parts = getPartsFromFullname($fullname);
        // Сокращаем фамилию и отбрасываем отчество
        $shortName = $parts['name'] . ' ' . mb_substr($parts['surname'], 0, 1) . '.';
        return $shortName;
    }