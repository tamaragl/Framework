{% extends "general_admin.tpl" %}


   {% block content %} 

   	<table>
		{% for staff in staffs %}

			<tr>
				<td>
					<a href="/edit-staff/{{ staff.staff_id }}">
						{{ staff.staff_id }}
					</a>
				</td>
				<td><img src="{{ staff.avatar }}" /></td>
				<td>{{ staff.first_name }}</td>
				<td>{{ staff.last_name }}</td>
				<td>{{ staff.address_id }}</td>
				<td>{{ staff.email }}</td>
				<td>{{ staff.staff_id }}</td>
				<td>{{ staff.active }}</td>
				<td><a href="/staff/{{ staff.username }}">{{ staff.username }}</a></td>
				<td>
					<form action="/delete-staff" method="POST">
						<input type="hidden" name="staff_id" value="{{ staff.staff_id }}">
						<input type="submit" name="delete" value="delete" />
					</form>
				</td>
			</tr>

		{% endfor %}
		
	</table>

   {% endblock content %}
				
				
		