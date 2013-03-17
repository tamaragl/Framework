/*· ¿Qué hará esta función?
function walkDOM(n) {
do {
console.log(n);
if (n.hasChildNodes()) {
walkDOM(n.firstChild)
}
} while (n = n.nextSibling)
}*/

//Se recorre todo el DOM a partir del tag "n" que se le pasa a la función. 
//Es una función recursiva que va mirando si el tag actual tiene hijos y 
//así hasta se encuentra asi mismo como hermano.



/*· ¿Y esta?
function removeAll(n) {
 while (n.firstChild) 
 {
  n.removeChild(n.firstChild);
 }
}*/

//Elimina todo el DOM a partir del tag que le pasas hacía sus hijos.  


/*· Modifica la función translateChristmas()para que reciba un JSON y haga la traducción*/

function translateChristmas( sentence, translation)
{    
    var translate = "";
    for(key in translation)
    {
        for(key2 in sentence )
        {            
             if( key == sentence[key2])
             {   
                 translate += translation[key] + " "; 
             }
        }       
    }
  return translate;     
}

objTranslations = {'merry':'god', 'christmas':'jul', 'and':'och','happy':'gott', 'new':'nytt', 'year':'år'};
sentence = {0:"merry", 1:"christmas", 2:"and", 3:"happy", 4:"new", 5:"year"};
console.log( translateChristmas(sentence , objTranslations ) );



/*· Añade el siguiente HTML a nuestra página de ejemplo sin utilizar innerHTML
<p>one more paragraph<strong>bold</strong></p>*/
 
function addElement () {
  var newP = document.createElement("p");
  var newContent = document.createTextNode("one more paragraph");
  newP.appendChild(newContent); 
    
  var newB = document.createElement("strong");
  var newContent2 = document.createTextNode("strong");
  newB.appendChild(newContent2)

    document.body.appendChild(newP);
    newP.appendChild(newB);
}

addElement();



//· Ir a http://www.softonic.com y mostrar la siguiente información por consola

//o Número de enlaces de la pagina
console.log(document.links.length) || console.log(document.getElementsByTagName("a").length)
//>>>415

//o Número de enlaces internos y externos
console.log(document.anchors.length)
//>>>0
console.log(document.links.length) 
//>>>415

//o Direccion a la que enlaza el penúltimo enlace
console.log(document.links[length-2].getAttribute("href")) || console.log(document.getElementsByTagName("a")[length-2].getAttribute("href"))
//>>#

//o Navegador que estamos utilizando para visitar la pagina
var navegador=navigator.userAgent;


if(navegador.indexOf('MSIE') != -1) 
{
    console.log("Internet Explorer");
}
else if(navegador.indexOf('Firefox') != -1) 
{
    console.log("Firefox");
}
else if(navegador.indexOf('Chrome') != -1)
{ 
    console.log("Chrome");
}


//o El title de los enlaces que apunten a http://www.softonic.com/
var links = document.getElementsByTagName("a")

for(key in links)
{
    if(links[key].getAttribute("href") == "http://www.softonic.com/")
    {
        console.log(links[key].getAttribute("title"));
    }
}

//o El tanto por ciento de enlaces trackeados (los que tienen la clase ‘track’ )
function trackme()
{
    var total = document.links.length;
    var tracks = document.getElementsByClassName("track-me").length;
    var percent = (tracks*100)/total + "%";
    console.log( percent);
}

//· Crea una función que te muestre todos los enlaces de la pagina en rojo y con subrayado
//amarillo. Pruebala en http://www.softonic.com
function redLinksAndYellowBorder()
{
       var links = document.getElementsByTagName("a")
        
        for(key in links)
        {
           links[key].style.color = "red";
            links[key].style.textDecoration ="none";
           links[key].style.borderBottom = "1px solid yellow";
        }
}

//· Crea otra función que muestre tachados, en rojo y en negrita todos los links con la palabra
//gratis en el title

function freeRedLinks()
{
       
    var links = document.getElementsByTagName("a")
    var regex = new RegExp("gratis");       
    
    for(key in links)
    {
        if( regex.test( links[key].getAttribute("title") ) )
        {
        
            links[key].style.color = "red";
            links[key].style.textDecoration ="line-through";
            links[key].style.fontWeight = "bold";
        }
    }

}
