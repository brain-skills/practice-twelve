<?php
    // Функция для определения возрастно-полового состава
    function getGenderDescription($personsArray) {
        // Инициализация счетчиков для каждой категории пола
        $maleCount = 0;
        $femaleCount = 0;
        $undefinedCount = 0;
        // Проходим по каждому человеку в массиве и определяем пол
        foreach ($personsArray as $person) {
            $gender = getGenderFromName($person['fullname']);
            // Увеличиваем соответствующий счетчик в зависимости от результата
            if ($gender === 1) {
                $maleCount++;
            } elseif ($gender === -1) {
                $femaleCount++;
            } else {
                $undefinedCount++;
            }
        }
        // Общее количество людей в аудитории
        $totalPeople = count($personsArray);
        // Рассчитываем проценты
        $malePercentage = ($maleCount / $totalPeople) * 100;
        $femalePercentage = ($femaleCount / $totalPeople) * 100;
        $undefinedPercentage = ($undefinedCount / $totalPeople) * 100;
        // Округляем до одного знака после запятой
        $malePercentage = round($malePercentage, 1);
        $femalePercentage = round($femalePercentage, 1);
        $undefinedPercentage = round($undefinedPercentage, 1);
        // Формируем строку с результатами
        $result = "Мужчины: $malePercentage%<br>";
        $result .= "Женщины: $femalePercentage%<br>";
        $result .= "Неопределённый состав: $undefinedPercentage%";
        return $result;
    }
    // Выводим на экран
    echo '<h3>4) Определение возрастно-полового состава:</h3>';
    echo getGenderDescription($example_persons_array);
    echo '<br><br>';