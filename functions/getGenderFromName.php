<?php
    // Функция для определения пола по ФИО
    function getGenderFromName($fullname) {
        // Получаем части ФИО
        $parts = getPartsFromFullname($fullname);
        // Инициализируем суммарный признак пола
        $genderSign = 0;
        // Проверка признаков женского пола
        if (mb_substr($parts['patronomyc'], -3) === 'вна') {
            $genderSign -= 1;
        }
        if (mb_substr($parts['name'], -1) === 'а') {
            $genderSign -= 1;
        }
        if (mb_substr($parts['surname'], -2) === 'ва') {
            $genderSign -= 1;
        }
        // Проверка признаков мужского пола
        if (mb_substr($parts['patronomyc'], -3) === 'вич') {
            $genderSign += 1;
        }
        if (mb_substr($parts['name'], -1) === 'й' || mb_substr($parts['name'], -1) === 'н') {
            $genderSign += 1;
        }
        if (mb_substr($parts['surname'], -1) === 'в') {
            $genderSign += 1;
        }
        // Возвращаем результат в зависимости от суммарного признака пола
        if ($genderSign > 0) {
            return 1; // Мужской пол
        } elseif ($genderSign < 0) {
            return -1; // Женский пол
        } else {
            return 0; // Неопределённый пол
        }
    }