<?php    
    // Функция для объединения частей ФИО
    function getFullnameFromParts($surname, $name, $patronomyc) {
        return $surname . ' ' . $name . ' ' . $patronomyc;
    }
    // Объединяем части ФИО
    $mergedFullname = getFullnameFromParts($parts['surname'],$parts['name'],$parts['patronomyc']);
    // Выводим объединенное ФИО
    echo '<h3>1-b) Объединение ФИО:</h3>';
    echo 'ФИО: ' . $mergedFullname;
    echo '<br><br>';