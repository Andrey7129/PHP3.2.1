<?php 
// Объявление   
$name = "Андрей" ; 
$age = 53  ;
$rabota = "работающий";  
  // булево значение
  // Пример объявления переменной для булевого значения:

$is_submitted = false;
 $is_valid = true;
 
define("sitename", "Logoped");
// Константа  

echo "Имя:$name!";   
echo "Возраст:$age!";  
echo "категория:$rabota!";   
echo "Название сайта: $sitenam!";  

print($name);
print($age);
print($rabota);
print("Меня зовут". $name. "и мне". $age. "года.");
  
// Преобразование типов  
$num = (int)"50";
echo gettype($num);

// Получение типа переменной
// Для получения типа переменной применяется функция gettype(), 
// которая возвращает название типа переменной, например, integer (целое число), double (число с плавающей точкой), string (строка), boolean (логическое значение), null, array (массив), object (объект) или unknown type. Например:


$a = 10;
$b = "10";
echo gettype($a); // integer
echo "<br>";
echo gettype($b);  // string
?>

$numberString = "10";
$number =  20;
echo gettype($numberString); // integer
echo "<br>";
echo gettype($number);  // string

// Арифметические операции  
$num1 = 10;  
$num2 = 5;  
$cymma = $num1 + $num2;
echo "Сложение: $cymma";  
$vizet = $num1 - $num2;
echo "Вычитание: $vizet";
$ymn = $num1 * $num2;
echo "Умножение: $ymn";
$delen = $num1 / $num2;
echo "Деление: $delen";

$srav = $num1 > $num2;
echo "Сравнение: $srav";
$srav1 = $num1 < $num2;
echo "Сравнение: $srav1";
 
// Логическое выражение 
  $a = true;
  $b = false;
  if($a&&$b){
    echo "Оба выражения истины";
    } else {
      echo "Одно из выражений ложно";
    }

    if($a&&$b){
    echo "Одно из выражений истинно";
    } else {
      echo "Оба выражения ложны";
    }

// Суперглобальная переменная $_SERVER 
$_SERVER = "";
echo "Информация о сервере: " . $_SERVER['SERVER_NAME']. "<br>";
echo "IP-адрес клиента: " . $_SERVER['REMOTE_ADDR']. "<br>"; 

?>
