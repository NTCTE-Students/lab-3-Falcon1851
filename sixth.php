<?php

// Создание массива
$fruits = ['Яблоко', 'Банан', 'Апельсин'];

// Сортировка массива
sort(array: $fruits);

foreach($fruits as $fruit) {
    print("{$fruit}<br>");
}