<style>
    h1,h2,h3,h4,h5,h6,p {margin: 0;padding: 0;}
</style>

<?php
    require_once('persons.php'); // Путь к массиву с данными пользователей

    // ===================================================================
    // Для демонстрации, будем использовать динамичные данные из $example_persons_array.
    // Возьмём рандомное число от 0 до 10.
    $personIndex = rand(0, 10);
    // Берём рандомное ФИО пользователя и сохраняем в $fullname.
    $fullname = $example_persons_array[$personIndex]['fullname'];
    // Также получаем профессию этого-же пользователя и сохраняем в $personjob.
    $personjob = $example_persons_array[$personIndex]['job'];
    // ===================================================================

    // ===================================================================
    // Задача № 1-a) Функция для разбиения ФИО на части
    require_once('functions/getPartsFromFullname.php');
    // Задача № 1-b) Функция для объединения частей ФИО
    require_once('functions/getFullnameFromParts.php');
    // ===================================================================

    // ===================================================================
    // Задача № 2) Функция для получения сокращенного имени
    require_once('functions/getShortName.php');
    // ===================================================================

    // ===================================================================
    // Задача № 3) Функция для определения пола по ФИО
    require_once('functions/getGenderFromName.php');
    // ===================================================================

    // ===================================================================
    // Задача № 4) Функция для определения возрастно-полового состава
    require_once('functions/getGenderDescription.php');
    // ===================================================================

    // ===================================================================
    // Задача № 5) Функция для определения "идеальной" пары
    require_once('functions/getPerfectPartner.php');
    // ===================================================================