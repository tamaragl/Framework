{% extends "general_admin.tpl" %}


   {% block content %}
		<table>
			<tr>
				<th>Store ID</th>
				<th>Manager Staff ID</th>
				<th>Address ID</th>
				<th>Last Update</th>
			<tr>

			

			{% for store in stores %}
			
			
								<td><a href="/edit-store/{{ store.store_id }}">{{ store.store_id }}</td>
								<td>{{ store.manager_staff_id }}</td>
								<td>{{ store.address_id }}</td>
								<td>{{ store.last_update }}</td>
								<td>
									<form action="/delete-store" method="POST">
										<input type="hidden" name="store_id" value="{{ store.store_id }}">
										<input type="submit" name="delete" value="delete" />
									</form>
								</td>
							</tr>
			{% endfor %}
		

		</table>

   {% endblock content %}