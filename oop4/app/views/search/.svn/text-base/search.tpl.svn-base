{% extends "general_admin.tpl" %}


   {% block content %} 

   <form method="POST" action="/search">
   		<label> Buscador
   			<input type="text" name="search" />
   		</label>
   		<select name="option">
   			<option value="all" selected>All</option>
   			<option value="film">Films</option>
   			<option value="actor">Actors</option>
   			<option value="customer">Customers</option>
   		</select>
   		<input type="submit" name="submit" value="Buscar" />
   </form>

  	<h2>Actors</h2>

  		

		{% for actor in actor_list %}

		<ul>
			<li>{{ actor.first_name }} {{ actor.last_name }}</li>
			<li>Actor</li>
			<li><a href="/actor-profile/">Profile</a></li>
		</ul>	

		{% endfor %}

		

	<h2>Customers</h2>
		

		{% for customer in customer_list %}
		<ul>
			<li>
				{{ customer.first_name }} {{ customer.last_name }}
			</li>	
			<li>Customer</li>
			<li><a href="/customer-profile/">Profile</a></li>
		</ul>	

		{% endfor %}

	<h2>Films</h2>		

		{% for film in film_list %}
		<ul>
			<li>
				{{ film.title }}
			</li>	
			<li>Film</li>
			<li><a href="/film-profile/">Profile</a></li>
		</ul>	

		{% endfor %}
	
	

   {% endblock content %}
				
				
		