<?php
    // Функция для разбиения ФИО на части
    function getPartsFromFullname($fullname) {
        $parts = explode(' ', $fullname);
        return [
            'surname' => $parts[0],
            'name' => $parts[1],
            'patronomyc' => $parts[2],
        ];
    }
    // Разбиваем ФИО на части
    $parts = getPartsFromFullname($fullname);
    // Выводим данные рандомного пользователя
    echo '<h2>Рандомные данные пользователя:</h2>';
    echo '<h3 style="color: green;">ФИО: ' . $fullname . '</h3>';
    echo '<h3 style="color: green;">Профессия: ' . $personjob . '</h3>';
    echo '<br>';
    // Выводим информацию о частях ФИО
    echo '<h3>1-a) Разбиение ФИО:</h3>';
    var_dump($parts);
    echo '<br>';
    echo 'Фамилия: ' . $parts['surname'] . '<br>';
    echo 'Имя: ' . $parts['name'] . '<br>';
    echo 'Отчество: ' . $parts['patronomyc'];
    echo '<br><br>';