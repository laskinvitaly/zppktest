<!DOCTYPE html>
<html>
<head>
<title>Угадай число</title>
</head>
<body>
<h2>Привет, <?php echo isset($_SESSION['player_name']) ? $_SESSION['player_name'] : "Игрок"; ?>!</h2>
<?php if(isset($message)) : ?>
<p><?php echo $message; ?></p>
<?php endif; ?>

<form action="game.php" method="post">
Введите число: <input type="number" name="guess" required>
<input type="submit" value="Проверить">
</form>
</body>
</html>
