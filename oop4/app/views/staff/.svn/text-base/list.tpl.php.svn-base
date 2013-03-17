<html>
	<head></head>
	<body>
		<p><a href="/new-staff">New Staff</a> | 
			<a href="/list-staff">Staff List</a>  
			<a href="/logout">Logout</a> Hola <?= $this->template_values['login'] ?></p>
		<table>
			<tr>
				<th>Staff ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address ID</th>
				<th>E-mail</th>
				<th>Store ID</th>
				<th>Active</th>
				<th>Username</th>
			<tr>

			<?php 
			
				foreach ($this->template_values['staffs'] as $key => $staff) {
					echo '	<tr>
								<td>
									<a href="/edit-staff/'.$staff['staff_id'].'">
										'.$staff['staff_id'].'
									</a>
								</td>
								<td><img src="'. $staff['avatar'] .'" /></td>
								<td>'.$staff['first_name'].'</td>
								<td>'.$staff['last_name'].'</td>
								<td>'.$staff['address_id'].'</td>
								<td>'.$staff['email'].'</td>
								<td>'.$staff['store_id'].'</td>
								<td>'.$staff['active'].'</td>
								<td><a href="/staff/'.$staff['username'].'">'.$staff['username'].'</a></td>
								<td>
									<form action="/delete-staff" method="POST">
										<input type="hidden" name="staff_id" value="'. $staff['staff_id'].'">
										<input type="submit" name="delete" value="delete" />
									</form>
								</td>
							</tr>'
					;

				}
			?>

		</table>
	</body>
</html>