<?
print_r('ЗАДАНИЯ 2 ГЛАВЫ ');
print_r('<hr>');
print_r('1 Задание - ');
print_r('Егор самый лучший мужчина на свете ');
print_r('<hr>');
print_r('2 Задание - ');
print_r('Sublime Text установлен и выполнена задача через него ');
print_r('<hr>');
print_r('3 Задание - ');
print_r('echo выводит строки ');
print_r('<hr>');
print_r('4 Задание - ');
print_r('я думаю, что нахуй не нужен этот VirtualBox и альтернативная система ');
print_r('<hr>');
print_r('5 Задание - ');
print_r('Web сервер nginx также, я так понял, не нужен');
print_r('<hr>');
print_r('ЗАДАНИЯ 3 ГЛАВЫ ');
print_r('<hr>');
print_r('1 Задание - ');
print_r('Приёмы функций date, по моему понятию, имеют, в основном, множество форматов выведения даты и времени и держится на часовом поясе, который задаётся в первую очередь, перед тем, как задавать сам формат даты ');
print_r('<hr>');
print_r('2 Задание - ');
echo date('d.m.Y H:i' );
print_r('<hr>');
print_r('3 Задание - ');
echo 'Ща будет случайное число от 0 до 1000 > '. rand(0, 1000);
print_r('<hr>');
print_r('ЗАДАНИЯ 4 ГЛАВЫ ');
print_r('<hr>');
print_r('1 Задание - ');
print_r('Функция is_numeric в общем определяет, является ли значение чисто числовым или строчным с числом, а функции is_int и is_float уже работают с самим числом (цельное и плавающее, соответственно)');
print_r('<hr>');
print_r('2 Задание - ');
print_r('Функция round округляет число с плавающей точкой, ceil округляет дробь в большее значение, floor действует наоборот');
print_r('<hr>');
print_r('3 Задание - ');
echo round(42.43752, 2);
print_r('<hr>');
print_r('4 Задание - ');
echo decbin (4252);
print_r('<hr>');
print_r ('Второе число - ');
echo decbin (89080);
print_r('<hr>');
print_r('ЗАДАЧНИК');
print_r('<hr>');
print_r('1.1 Задание - ');
print_r('<hr>');
$value = 0;
if ($value > 0 or $value == 0) {
    echo 'Число положительное';
}
if ($value < 0) {
	echo 'Число отрицательное';
}
print_r('<hr>');
print_r('1.2 Задание - ');
print_r('<hr>');
echo mb_strlen('фывфыв');
print_r('<hr>');
print_r('1.3 Задание - ');
print_r('<hr>');
echo mb_substr('Егор крут', 0, 1);
print_r('<hr>');
print_r('1.4 Задание - ');
print_r('<hr>');
$value = 10;
if ($value > 10) {
	echo $value + 100;
} else {
	echo $value - 30;
}
print_r('<hr>');
print_r('1.5 Задание - ');
print_r('<hr>');
$value = 5;
if ($value % 2 == 0) {
	echo ($value / 2);
} else {
	echo ($value * 3);
}
print_r('<hr>');
print_r('1.6 Задание - ');
print_r('<hr>');
$value = 9;
if ($value > 50) {
	echo $value ** 2;
} else if ($value > 10 and $value < 30) {
	echo 'Ноль';
} else {
	echo 'Ошибка';
}
print_r('<hr>');
print_r('1.7 Задание - ');
print_r('<hr>');
$value1 = 11;
$value2 = 11;
if ($value1 > $value2) {
	echo $value1;
} else if ($value1 < $value2) {
	echo $value2;
} else {
	echo 'Ты еблан';
}
?>