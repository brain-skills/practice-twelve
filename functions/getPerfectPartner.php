<?php
    // Функция для определения "идеальной" пары
    function getPerfectPartner($surname, $name, $patronomyc, $personsArray) {
        // Приводим ФИО к привычному регистру
        $surname = mb_convert_case($surname, MB_CASE_TITLE);
        $name = mb_convert_case($name, MB_CASE_TITLE);
        $patronomyc = mb_convert_case($patronomyc, MB_CASE_TITLE);
        // Склеиваем ФИО
        $fullFIO = getFullnameFromParts($surname, $name, $patronomyc);
        $gender = getGenderFromName($fullFIO);
        $partnerGender = 0;
        
        while($partnerGender == 0 || $gender == 0){
            $randomIndex = rand(0, count($personsArray) - 1);
            $partnerFIO = $personsArray[$randomIndex]['fullname'];
            $partnerGender = getGenderFromName($partnerFIO);
            if($gender == 0){
                return "Не удалось определить пол партнера $name";
            }
        }
        // Рассчитываем процент совместимости
        $compatibilityPercentage = mt_rand(5000, 10000) / 100;
        // Формируем строку с результатами
        $result = getShortName($fullFIO) . " + " . getShortName($partnerFIO) . " = \n";
        $result .= "♡ Идеально на {$compatibilityPercentage}% ♡";
        return $result;
    }