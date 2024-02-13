<style>
    h1,h2,h3,h4,h5,h6,p {margin: 0;padding: 0;}
</style>

<?php
    require_once('persons.php'); // Путь к массиву с данными пользователей

    // ===================================================================
    // Для работы используем массив $example_persons_array из persons.php.
    $personIndex = rand(0, 10); // Получаем рандомное число.
    $fullname = $example_persons_array[$personIndex]['fullname']; // Получаем рандомное ФИО из persons.php
    $personjob = $example_persons_array[$personIndex]['job']; // Получаем профессию этого-же пользователя
    // ===================================================================


    
    // ===================================================================
    // Задача № 1-a) Функция для разбиения ФИО на части
    require_once('functions/getPartsFromFullname.php');
    // Вызываем и выводим на экран
    $parts = getPartsFromFullname($fullname);
    echo '<h3>1-a) Разбиваем ФИО на три части:</h3>';
    var_dump($parts);
    echo '<br>';
    echo 'Фамилия: ' . $parts['surname'] . '<br>';
    echo 'Имя: ' . $parts['name'] . '<br>';
    echo 'Отчество: ' . $parts['patronomyc'];
    echo '<br><br>';
    // ===================================================================


    
    // ===================================================================
    // Задача № 1-b) Функция для объединения частей ФИО
    require_once('functions/getFullnameFromParts.php');
    // Вызываем и выводим на экран
    $mergedFullname = getFullnameFromParts($parts['surname'],$parts['name'],$parts['patronomyc']);
    echo '<h3>1-b) Объединение ФИО:</h3>';
    echo 'ФИО: ' . $mergedFullname;
    echo '<br><br>';
    // ===================================================================


    
    // ===================================================================
    // Задача № 2) Функция для получения сокращенного имени
    require_once('functions/getShortName.php');
    // Вызываем и выводим на экран
    $shortName = getShortName($fullname); // Получаем сокращенное имя
    echo '<h3>2) Сокращаем ФИО:</h3>';
    echo 'Сокращенное имя: ' . $shortName . '<br>';
    echo '<br>';
    // ===================================================================


    
    // ===================================================================
    // Задача № 3) Функция для определения пола по ФИО
    require_once('functions/getGenderFromName.php');
    // Вызываем и выводим на экран
    $gender = getGenderFromName($fullname); // Получаем пол
    echo '<h3>3) Определяем пол по ФИО:</h3>';
    echo 'Пол: ';
    if ($gender === 1) {echo 'Мужской';} elseif ($gender === -1) {echo 'Женский';} else {echo 'Неопределённый';}
    echo '<br><br>';
    // ===================================================================


    
    // ===================================================================
    // Задача № 4) Функция для определения возрастно-полового состава
    require_once('functions/getGenderDescription.php');
    // Вызываем и выводим на экран
    echo '<h3>4) Определение возрастно-полового состава:</h3>';
    echo getGenderDescription($example_persons_array);
    echo '<br><br>';
    // ===================================================================



    // ===================================================================
    // Задача № 5) Функция для определения "идеальной" пары
    require_once('functions/getPerfectPartner.php');
    // Вызываем и выводим на экран
    echo '<h3>5) Функция для определения "идеальной" пары:</h3>';
    $perfectPartnerResult = getPerfectPartner($parts['surname'], $parts['name'], $parts['patronomyc'], $example_persons_array);
    echo $perfectPartnerResult . '<br>';
    // ===================================================================