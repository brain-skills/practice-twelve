<?php
    // Функция для разбиения ФИО на части
    function getPartsFromFullname($fullname) {
        $parts = explode(' ', $fullname);
        return [
            'surname' => $parts[0],
            'name' => $parts[1],
            'patronomyc' => $parts[2],
        ];
    };