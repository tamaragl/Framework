{% extends "general.tpl" %}

	 {% block content %} 

		<p><a href="/register">Register</a> 

		<form action="/forgot-password" method="POST">
			
			<label for="email"> Email:
				<input type="text" name ="email" />
			</label>
			<br>
			
			<input type="submit" name="submit" />
		</form>
		
 	{% endblock content %}