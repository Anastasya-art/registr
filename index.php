<?php
	require "db.php";
	echo "<link rel='stylesheet' href='style.css'>";
?>

<?php 
	if(isset($_SESSION['logged_user'])):
?>
<div class="exit">Привет, <?php echo $_SESSION['logged_user']->login; ?>!<br/>
<a href="logout.php">Выйти</a>
</div>
<div class="content">
	<p>Контент для авторизованных пользователей!</p>

	<p>Вы уже зашли как <?php echo $_SESSION['logged_user']->login; ?>. <a href="logout.php">Выйти и зарегистрироваться под другим именем?</a></p>
</div>

<?php
	else:
		header('Location: login.php');
?>
<?php endif; ?>
