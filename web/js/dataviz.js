$(document).ready(function(){
	// Pas de cache sur les requête IMPORTANT !
	$.ajaxSetup({ cache: false });
	
	/*** 
		On définit ici les fonctions de base qui vont nous servir à la récupération des données
		Je ne définis que le GET ici, mais il est possible d'utiliser POST pour récupérer ses données (on le verra dans un prochain TP)
	****/
	function getRequest(url, callback) {
		$.get(url, function(data) {
			data = $.parseJSON(data);
			callback(data);
		});
	}
	
	/***************************************
		QUESTION 1 : PIE CHART : - Evolution du popularité
	****************************************/
       /*	function generateDateAxis(idDiv, data) {
            
            var plot1 = $.jqplot(idDiv, [data], {
              title:'Default Date Axis',
              axes:{
                  xaxis:{
                      renderer:$.jqplot.DateAxisRenderer
                  }
              },
              series:[{lineWidth:4, markerOptions:{style:'square'}}]
            });
        }*/
       	function generateDateAxis(idDiv, data) {
            
            // Our ajax data renderer which here retrieves a text file.
            // it could contact any source and pull data, however.
            // The options argument isn't used in this renderer.
            var ajaxDataRenderer = function(url, plot, options) {
              var ret = null;
              $.ajax({
                // have to use synchronous here, else the function 
                // will return before the data is fetched
                async: false,
                url: url,
                dataType:"json",
                success: function(data) {
                  ret = data;
                }
              });
              return ret;
            };

            // The url for our json data
            var jsonurl = "./jsondata.txt";

            // passing in the url string as the jqPlot data argument is a handy
            // shortcut for our renderer.  You could also have used the
            // "dataRendererOptions" option to pass in the url.
            var plot2 = $.jqplot('chart2', jsonurl,{
              title: "AJAX JSON Data Renderer",
              dataRenderer: ajaxDataRenderer,
              dataRendererOptions: {
                unusedOptionalUrl: jsonurl
              }
            });
        }
        
       
	getRequest("/nbVisite", function(data) {
                console.log(data);
                generateDateAxis('qst1', data);
	});
         
        // Fonction pour générer un Pie Chart (on peut entièrement paramétré le tout)
	// WARNING : Pour le reload, on doit stocker la référence (ici plot1), donc ce système de fonction ne peut pas marcher, il faudra le changer.
	// Je vous met cette fonction en exemple mais c'est une bonne pratique quand on utilise un modèle pour générer ses charts.

});