//· Crear la funcion getInfoTop(category) que desde Softonic.com nos devuelva un objeto
//con la siguiente info (según la categoria downloads, sales o rates ):
//o El programa mas descargado, vendido o valorado
//o Los programas que han mejorado en esa categoria
//Es decir, una función que devuelva esto:
//>>> var oTopSales = getInfoTop('sales');
//>>> console.dir (oTopSales);
//best "Kaspersky Anti-Virus"
//better "ConvertXtoDVD | EASEUS Data Recovery Wizard"
//category "SALES"
//>>> var oTopDownloads = getInfoTop('downloads');
//>>> console.dir (oTopDownloads);
//best "Ares"
//better "PhotoScape | Windows Live Messenger 8.5"
//category "DOWNLOADS"

function getInfoTop()
{ 
  var local_info = "Best in local: " + document.querySelector("#top_downloads_local li.top1 > a").text;
  var global_info = "Best global: " + document.querySelector("#top_downloads li.top1 > a").text;

  console.log(local_info);
  console.log(global_info);
}

//· Crear la funcion getInfoCloud() que desde Softonic.com nos devuelva un objeto con el
//numero de busquedas de los programas mas buscados (title de los links)
//Es decir, una funcion que consiga esto:
//>>> var oInfoCloud = getInfoCloud(); console.dir (oInfoCloud);
//a mi tambien "4.020"
//antivirus "8.268"
//antivirus
//gratis
//"5.495"
//ares "19.464"
//avast "3.578"
//drivers "3.835"
//emule "3.928"
//juegos "7.706"
//juegos gratis "3.629"
//juegos pc "7.598"
//messenger "8.138"
//msn "3.957"
//musica "4.657"
//nero "7.224"
//photoshop "4.558"
//programa video "3.507"
//cono
//programas
//gratis
//"6.572"
//programas
//gratis archivos
//cab
//"4.098"
//programas
//gratis en
//español
//"3.346"
//winrar "5.317"

function getInfoCloud()
{
  var links =  document.querySelectorAll(".tags_cloud_content a");
  var links_search = [];

  for(key in links)
  {
    var title = links[key]['title'];
    
    var title_split = title.split(":");
   
    var title_split2 = title_split[1].split(" ");

    var response = title_split[0] + " " + title_split2[1];
    console.log(response);
   
  }

}

//· Crear otra función sumPopularSearches() que, dado el objeto conseguido en el
//ejercicio anterior devuelva el total de busquedas populares;
//>>> var nSumTopSearches = sumPopularSearches (oInfoCloud);
//>>> nSumTopSearches
//118895

function sumPopularSearches()
{
  var links =  document.querySelectorAll(".tags_cloud_content a");
  var links_search = [];

  for(key in links)
  {
    var title = links[key]['title'];   

    if( title != "")
    {
      var title_split = title.split(":");   
      var title_split2 = title_split[1].split(" ");
      var sum = 0;

      var number = title_split2[1].replace(".", "");
      number = parseInt(number);

      sum += number;
       console.log(sum); 
    } 
        
  }

 

}







//· Crear la función clickedLinks() que anule el efecto de los links y que
//o Cambia el color de los links a gris y tache el texto

function clickedLinks()
{

  $("a").bind('click', function(event)
  {
    $(this).css({'color':'gray', 'text-decoration':'line-through'});
    event.preventDefault();

  }
  )
}




//· Crea la funcion isPhoneNumberSpain que valide un numero de telefono de España
//>>> isPhoneNumberSpain("93 9844585");
//true
//>>> isPhoneNumberSpain("93 98445855");
//false
//>>> isPhoneNumberSpain("93-9844585");
//true
//>>> isPhoneNumberSpain("939844585");
//true
//>>> isPhoneNumberSpain("93984455585");
//false
//>>> isPhoneNumberSpain("93984sasss585");
//false
//>>> isPhoneNumberSpain("");
//false



function isPhoneNumberSpain( number )
{
  var regex = new RegExp("(^9[0-9][ -]?[0-9]{7}$");
  console.log(regex.test(number));
}

isPhoneNumberSpain("93 9844585");     // true
isPhoneNumberSpain("93 98445855");    // false
isPhoneNumberSpain("93-9844585");     // true
isPhoneNumberSpain("939844585");      // true
isPhoneNumberSpain("93984455585");    // false
isPhoneNumberSpain("93984sasss585");  // false
isPhoneNumberSpain("");               // false






//· Crear la función timeLinks() que desde Softonic.com capture el click de los enlaces del
//menu de categorias (categories_nav) y que:
//o Anule el efecto los links (que no lleven a ninguna pagina al hacer click)
//o Vaya escribiendo por consola la URL y la hora actual cada vez que hacemos click en
//algun link
//Es decir que devuelva esto:
//>>> timeLinks ();
//15:37:2 --> http://www.softonic.com/windows/imagen-diseno-y-fotografia
//15:37:3 --> http://www.softonic.com/windows/editores-graficos
//15:37:4 --> http://www.softonic.com/windows/internet
//15:37:5 --> http://www.softonic.com/windows/personaliza-tu-pc
//15:37:6 --> http://www.softonic.com/windows/pieles-skins//

function timeLinks()
{

  var ahora = new Date() 
  var time="";
  time = ahora.getHours()+":"+ahora.getMinutes()+":"+ahora.getSeconds()+" --> ";

  $("a").bind('click', function(event)
  {
    event.preventDefault();
    var log = time + $(this).attr("href");
    console.log(log);
  }
  )
}