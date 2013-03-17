
/*
Escribe una función que devuelva la tabla de multiplicar en 10 columnas (del 1 al 10)
*/

function tablaMultiplicar()
{
  var string = "";

  for(var i=1; i<=10; i++)
  {           
   for(var j=1; j<=10; j++)
   {
    string += i * j + "\t";               
}
string +="\n";
}

console.log( string );

};

tablaMultiplicar();


/*
Escribe una función que devuelva la tabla de multiplicar (en una columna) de cualquier
valor que se le pase por parametro
 */
function tablaMultiplicarPassNumber( number )
{
    var string = "";

    for(var i=1; i<=10; i++)
    { 
        string += i * number + "\t";  
    }

    console.log( string );

};

tablaMultiplicarPassNumber( 3 );

/*
Haz un programa que escriba en la consola todos los multiplos de 23 inferiores a 500 y por
ultimo nos de la suma de todos ellos de esta forma:
 */

function function7( number )
{
    var i = 0;
    var result_text = "Elementos: ";
    var result = 0;
    var suma_text = "Suma: "
    var suma = 0;

    while (result < 500)
    { 
        result = i*23;
        
        if( result < 500 )
        {
            result_text += result + " ";
            suma += result;

            i++;
        }
        
    } 
    
    suma_text  += suma;
    

        console.log( result_text );
        console.log( suma_text );

};

function7();



/**
 * El cálculo de la letra del Documento Nacional de Identidad (DNI) es un proceso
matemático sencillo que se basa en obtener el resto de la división entera del número de
DNI y el número 23. A partir del resto de la división, se obtiene la letra seleccionándola
dentro de un array de letras.
El array de letras es:
var letras = 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K',
'E', 'T';
Por tanto si el resto de la división es 0, la letra del DNI es la T y si el resto es 3 la letra es la
A.
Con estos datos, elaborar una función que:
1. Reciba 2 parametros: el numero y la letra del DNI
2. Valide que el numero es correcto
3. Valide que la letra que se le ha pasado es la correcta
 */

function DNI( dni, letter )
{
    var letter_calculated;
    var letters = [ 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K',
                    'E', 'T'];

    resto = dni % 23;    

    if( resto == 0)
    {
        letter_calculated = "T";
    }
    else
    {
        letter_calculated = letters[resto-1];
    }

    if( letter == letter_calculated )
    {
        console.log("Letter is " + letter_calculated + " correct");
    }
    else
    {
        console.log("Letter is " + letter_calculated + " not correct");
    }
        
}

DNI( 43553270, "X");