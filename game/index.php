<!DOCTYPE html>
<html>
<head>
<title>Угадай число</title>
</head>
<body>
<h1>Игра "Угадай число"</h1>
<form action="game.php" method="post">
Введите ваше имя: <input type="text" name="player_name">

<input type="submit" value="Начать игру">
</form>
</body>
</html>

game.php:
<?php
session_start();

if(isset($_POST['player_name'])) {
$_SESSION['player_name'] = $_POST['player_name'];
}

if (!isset($_SESSION['number_to_guess'])) {
$_SESSION['number_to_guess'] = rand(1, 100); // Генерируем случайное число
$_SESSION['attempts'] = 0; // Количество попыток
}

if(isset($_POST['guess'])) {
$guess = $_POST['guess'];

$_SESSION['attempts']++;

if ($guess < $_SESSION['number_to_guess']) {
$message = "Попробуйте число больше";
} elseif ($guess > $_SESSION['number_to_guess']) {
$message = "Попробуйте число меньше";
} else {
$message = "Поздравляем, вы угадали число ".$_SESSION['number_to_guess']." за ".$_SESSION['attempts']." попыток!";
unset($_SESSION['number_to_guess']);
unset($_SESSION['attempts']);
}
}

?>
