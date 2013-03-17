<html>
	<head>
	</head>
	<body>			
		<p><a href="/new-staff">New Staff</a> | <a href="/list-staff">Staff List</a></p>

		<form method="POST" enctype="multipart/form-data">
			<label for="first_name"> First Name:
				<input type="text" name ="first_name" 
				value="<? echo $this->template_values['my_staff'][0]['first_name']; ?> " />
			</label>
			</br>
			<label for="last_name"> Last Name:
				<input type="text" name ="last_name" value = "<? echo $this->template_values['my_staff'][0]['last_name']; ?>" />
			</label>
			<br>
			<label for="address_id"> Address ID:
				<input type="text" name ="address_id" value="<? echo $this->template_values['my_staff'][0]['address_id']; ?>" />
			</label>
			<br>
			<label for="address_id"> Image:
				<input type="file" name="file" id="file">
			</label>
			<br>
			<label for="email"> Email:
				<input type="text" name ="email" value = "<? echo $this->template_values['my_staff'][0]['email']; ?>" />
			</label>
			<br>
			<label for="store_id"> Store ID:
				<input type="text" name ="store_id" value = "<? echo $this->template_values['my_staff'][0]['store_id']; ?>" />
			</label>
			<br>
			<label for="active"> Active
				<input type="text" name ="active" value = "<? echo $this->template_values['my_staff'][0]['active']; ?>" />
			</label>
			<br>
			<label for="username"> Username:
				<input type="text" name ="username" value = "<? echo $this->template_values['my_staff'][0]['username']; ?>" />
			</label>
			<br>
			<input type="submit" name="submit" />
		</form>

	</body>
</html>