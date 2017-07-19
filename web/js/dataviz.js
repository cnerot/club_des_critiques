//
$(document).ready(function(){
       	// Pas de cache sur les requête IMPORTANT !
	$.ajaxSetup({ cache: false });
	
	/*** 
		On définit ici les fonctions de base qui vont nous servir à la récupération des données
		Je ne définis que le GET ici, mais il est possible d'utiliser POST pour récupérer ses données (on le verra dans un prochain TP)
	****/
	function getRequest(url, callback) {
		$.get(url, function(data) {
			//data = $.parseJSON(data);
			callback(data);
		});
	}
	
    	/***************************************
		QUESTION 1 : PIE CHART : - Evolution du popularité
	****************************************/
       	function generateDateAxis(idDiv, data) {
            
            var plot1 = $.jqplot(idDiv, [data], {
              title:'Nombre visite par mois',
              axes:{
                  xaxis:{
                      renderer:$.jqplot.DateAxisRenderer
                  }
              },
              series:[{lineWidth:4, markerOptions:{style:'square'}}]
            });
        }
       	
//        function genCategoryAxisRenderer(){
//            $.jqplot.config.enablePlugins = true;
//            var s1 = [2, 6, 7, 10];
//            var ticks = ['a', 'b', 'c', 'd'];
//
//            plot1 = $.jqplot('chart1', [s1], {
//                // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
//                animate: !$.jqplot.use_excanvas,
//                seriesDefaults:{
//                    renderer:$.jqplot.BarRenderer,
//                    pointLabels: { show: true }
//                },
//                axes: {
//                    xaxis: {
//                        renderer: $.jqplot.CategoryAxisRenderer,
//                        ticks: ticks
//                    }
//                },
//                highlighter: { show: false }
//            });
//
//            $('#chart1').bind('jqplotDataClick', 
//                function (ev, seriesIndex, pointIndex, data) {
//                    $('#info1').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
//                }
//            );
//        }
      //  genCategoryAxisRenderer();
       // generateDateAxis2();
      /*  getRequest("/nbVisite?mois=7", function(data) {
                console.log(data);
                generateDateAxis2('chart3', data);
	});*/
        getRequest("/nbVisite?mois=7", function(data) {
                console.log(data);
                generateDateAxis('chart2', data);
	});
    });