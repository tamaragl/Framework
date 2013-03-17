<html>
	<head>

		{% block head %}           
            <title>
            	{% block title %}{% endblock %} - My Framework
            </title>
        {% endblock %}

        <style type="text/css">
        
            body {font-family: Arial;}

            .page {
                display: inline-block;
                padding: 0px 9px;
                margin-right: 4px;
                border-radius: 3px;
                border: solid 1px #c0c0c0;
                background: #e9e9e9;
                box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);
                font-size: .875em;
                font-weight: bold;
                text-decoration: none;
                color: #717171;
                text-shadow: 0px 1px 0px rgba(255,255,255, 1);
                width: 17px;
                text-align: center;
            }

            .page.current-page {
                border: none;
                background: #616161;
                box-shadow: inset 0px 0px 8px rgba(0,0,0, .5), 0px 1px 0px rgba(255,255,255, .8);
                color: #f0f0f0;
                text-shadow: 0px 0px 3px rgba(0,0,0, .5);
            }

            .page.gradient {
                background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
                background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);
            }



        </style>

	</head>
	<body>

		{% block header %}
		
        
        {% endblock header %}


        {% block content %}    
        
        {% endblock content %}



        {% block footer %}   
        	
        {% endblock footer %} 

	</body>
</html>