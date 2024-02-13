<?php    
    // Функция для объединения частей ФИО
    function getFullnameFromParts($surname, $name, $patronomyc) {
        return $surname . ' ' . $name . ' ' . $patronomyc;
    }