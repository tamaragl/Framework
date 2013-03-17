/*5. Crea una función sum() y una función multiply() que sume y multiplique
(respectivamente) todos los números de un array de números que se le pase como
parámetro.
>>> sum([1,2,3,4])
10
>>> multiply([1,2,3,4])
24*/



function sum( values )
{
    var length = values.length;
    var suma = 0;
    for(var i = 0; i< values.length; i++)
    {
        suma += values[i];
    }
   console.log( suma );
}

sum([1,2,3,4]);


function multiply( values )
{
    var length = values.length;
    var multiply = 1;
    for(var i = 0; i< values.length; i++)
    {
       if( i == 0 )
       {
           multiply = values[i] * values[i+1];
           i++;
       }
       else
       {
            multiply =  multiply * values[i];
       }
    }
   console.log( multiply );
}

multiply([1,2,3,4]);



/*6. Crea una funcion vocal() que reciba una letra y devuelva true si es una vocal y false si
no lo es.*/

function vocal( vocal)
{
    var my_vocal = vocal.toLowerCase();
    var vocals = ['a','e', 'i', 'o', 'u'];
    
    if( vocals.indexOf( my_vocal) != -1 )
    {
        return true;
    }
    else
    {
        return false;
    }  
}

console.log(vocal('p'));

/*
8. Crea una función isFuture() que admita como parámetro un objeto tipo fecha y que
devuelva true si la fecha pasada es mayor que la fecha actual y false si no.
 */
function isFuture( date )
{
    var now = new Date();
    
    if( date.getTime() > now.getTime() )
    {
        return true;
    }
    else
    {
        return false;
    }
}

var my_date = new Date( '2010 11 12' );
console.log(isFuture(  my_date ));

/*9. Crea una función reverse que devuelva el reverso de una cadena de texto.
>>> reverse("jag testar")
"ratset gaj"*/

function reverse( string )
{
    var string_reverse = '';    
    for(var i = 0; i < string.length; i++)
    {
        string_reverse += string[string.length-i-1];
    }
    return string_reverse;
}
console.log( reverse( 'jag testar' ) );

/*10. Dado un objeto que contenga traducciones crea una function translateChristmas()
que traduzca la frase “merry christmas and happy new year” en base a este objeto de
traducción
>>> objTranslations = {"merry":"god", "christmas":"jul", "and":"och",
"happy":”gott", "new":"nytt", "year":"år"}
>>> translateChristmas("merry christmas and happy new year",
objTranslations)
"god jul och gott nytt år "*/

function translateChristmas( sentence, translation)
{
	var sentence_array = sentence.split(" ");
    
    var translate = "";
    for(key in translation)
    {
        for(key2 in sentence_array )
        {            
             if( key == sentence_array[key2])
             {   
                 translate += translation[key] + " "; 
             }
        }       
    }
  return translate;     
}

objTranslations = {'merry':'god', 'christmas':'jul', 'and':'och','happy':'gott', 'new':'nytt', 'year':'år'};
console.log( translateChristmas( "merry christmas and happy new year", objTranslations ) );


/*11. Prepara un objeto de traducción para castellano y aplica de nuevo la funcion anterior*/
objTranslations = {'merry':'feliz', 'christmas':'navidad', 'and':'y','happy':'feliz', 'new':'nuevo', 'year':'año'};

/*14. Crea una función charFreq() que tome una cadena de texto y devueva una objeto con
los caracteres del texto y su frecuencia*/

function charFreq( cadena )
{
    var contenedor = [];

	for(key in cadena)
	{  
        if( ! contenedor[cadena[key]] )
        {
            contenedor[cadena[key]]= 1;
        }
		else
        {
             contenedor[ cadena[key] ]++;
        }
	}	
    
    return contenedor;
}
console.log(charFreq("Holaa como estas"));
