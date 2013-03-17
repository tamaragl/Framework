{% extends "general_admin.tpl" %}


   {% block content %} 

<ul style="float:left; width:300px">
	{% for category in menu_categories %}
		<li>
			<a href="/list-film-category/{{ category.name }}">{{ category.name }} ({{ category.total_found }}) </a>
		</li>
	{% endfor %}
</ul>

<div style="float:left;">
	<table>

	{% for film in film_list %}

		<tr>
			<td>{{ film.film_id }}	</td>
			
			<td>{{ film.title }}</td>
			
			<td><a href="/film/{{ film.username }}">{{ film.username }}</a></td>
			
		</tr>

	{% endfor %}
	
	</table>
</div>

   {% endblock content %}
				
				
		