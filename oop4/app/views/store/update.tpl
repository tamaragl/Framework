{% extends "general_admin.tpl" %}


   {% block content %} 
		
		<form method="POST">
			<label for="manager"> Manager ID:
				<input type="text" name ="manager" value="{{ my_store[0].manager_staff_id}}"/>
			</label>
			</br>
			<label for="address"> Address ID:
				<input type="text" name ="address" value="{{ my_store[0].address_id}}" />
			</label>
			<input type="submit" name="submit" />
		</form>

	{% endblock content %}