<form method="POST" action="login.php">
	Login: <input name="login"><br>
	Senha: <input type="passoword" name="senha"><br>
	<input type="submit">
</form>

<?php
	$msg = filter_var(@$_REQUEST['msg'], FILTER_SANITIZE_STRING);
	echo $msg;
?>