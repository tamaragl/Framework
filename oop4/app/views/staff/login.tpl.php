<html>
	<head>
	</head>
	<body>
		<p><a href="/register">Register</a> 

		<form action="/login" method="POST" enctype="multipart/form-data">
			
			<label for="username"> Username:
				<input type="text" name ="username" />
			</label>
			<br>
			<label for="username"> Password:
				<input type="password" name ="password" />
			</label>
			<br>
			<input type="submit" name="submit" />
		</form>
		<p><a href="/forgot-password">Forgot password?</a></p>
	</body>
</html>