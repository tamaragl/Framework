{% extends "general_admin.tpl" %}


   {% block content %} 

   {{ paginator_html | raw }}

   	<table>
		{% for film in films %}
			<tr>
				<td>{{ film.film_id }}	</td>
				
				<td>{{ film.title }}</td>
				<td>{{ film.release_year }}</td>
				<td>{{ film.rental_duration }}</td>
				<td><a href="/film/{{ film.username }}">{{ film.username }}</a></td>
				
			</tr>

		{% endfor %}
		
	</table>

   {% endblock content %}
				
				
		