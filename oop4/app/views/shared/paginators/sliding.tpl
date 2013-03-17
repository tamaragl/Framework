
<p class="pagination">


{% if prev_page >= 1 %}
	<a href="/list-film/{{ prev_page }}" title="Prev" class="page gradient">< Prev</a> 
{% endif %}

{% for page in pages %}

	{% if page == current_page %}

	<strong><a href="/list-film/{{ page }}" title="{{ page }}" class="page current-page"> {{ page }}</a></strong> 

	{% else %}

	<a href="/list-film/{{ page }}" title="{{ page }}" class="page gradient"> {{ page }}</a> 

	{% endif %}


{% endfor %}

{% if next_page <= total_pages %}
	<a href="{{ next_page }}" title="Next" class="page gradient">Next></a> 
{% endif %}

</p>


<p>
	<b style="font-size:11px;">showing {{ items_per_page }} /{{ total_items }} films</b>
</p>