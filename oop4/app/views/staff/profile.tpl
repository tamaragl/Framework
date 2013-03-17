{% extends "general_admin.tpl" %}


   {% block content %} 

		<table>
			<tr>
				<td>First Name:</td>
				<td> {{ staff_info[0].first_name }} </td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td>{{ staff_info[0].last_name }}</td>
			</tr>
			<tr>
				<td>Address ID</td>
				<td>{{ staff_info[0].address_id }}</td>
			</tr>
			<tr>
				<td>Avatar</td>
				<td><img src="{{ avatar }}" /></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td>{{ staff_info[0].email }}</td>
			</tr>
			<tr>
				<td>Store ID:</td>
				<td>{{ staff_info[0].store_id }}</td>
			</tr>
			<tr>
				<td>Active</td>
				<td>{{ staff_info[0].active }}</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>{{ staff_info[0].username }}</td>
			</tr>
			<tr>
				<td>Github</td>
				<td>
					<ul>

		{% if repositories %}

			{% for repositori in repositories %}
						<li>
							<b>{{ repositori.name }}</b> : {{ repositori.url }}
						</li>
			{% endfor %}

		{% endif %}
					</ul>
				</td>


			</tr>
			{% for repositori in repositories %}

			{% endfor %}

		</table>
	{% endblock content %}