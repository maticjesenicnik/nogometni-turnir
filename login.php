<?php
	include_once 'database.php';
	include_once 'header.php';
?>

<body>
	<form action="login_check.php" method="POST">
	  <table class="table table-hover" style="width: 500px; margin: 0 auto; margin-top: 100px;">
			<tr>
				<td colspan="2" class="input_desc">
					Email:
				</td>
				<td colspan="2">
					<input class="input_login" type="email" name="email" required="required"/>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					Password:
				</td>
				<td colspan="2" class="input_desc">
					<input class="input_login" type="password" name="pass" required="required"/>
				</td>
			</tr>
			<tr>
				<td>
					<input class="button_login" type="submit" value="Prijava"/>
				</td>
				<td>
					<input class="button_cancel" type="reset" value="Prekliči" />
				</td>
			</tr>
	  </table>
	</form>
</body>
