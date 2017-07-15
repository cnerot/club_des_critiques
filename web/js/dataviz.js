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
              title:'Default Date Axis',
              axes:{
                  xaxis:{
                      renderer:$.jqplot.DateAxisRenderer
                  }
              },
              series:[{lineWidth:4, markerOptions:{style:'square'}}]
            });
        }
       	function generateDateAxis2(idDiv, data) {
            
            $.jqplot.config.enablePlugins = true;
 
            var line1=[['2008-09-30', 4], ['2008-10-30', 6.5], ['2008-11-30', 5.7], ['2008-12-30', 9], 
            ['2009-01-30', 8.2], ['2009-02-28', 7.6], ['2009-03-30', 11.4], ['2009-04-30', 16.2], 
            ['2009-05-30', 21.8], ['2009-06-30', 19.3], ['2009-07-30', 29.7], ['2009-08-30', 36.7], 
            ['2009-09-30', 38.7], ['2009-10-30', 33.7], ['2009-11-30', 49.7], ['2009-12-30', 62.7]];

            var plot1 = $.jqplot(idDiv, [data], {
                title:'Rotated Axis Text',
                axes:{
                    xaxis:{
                        renderer:$.jqplot.DateAxisRenderer, 
                        rendererOptions:{
                            tickRenderer:$.jqplot.CanvasAxisTickRenderer
                        },
                        tickOptions:{ 
                            fontSize:'10pt', 
                            fontFamily:'Tahoma', 
                            angle:-40
                        }
                    },
                    yaxis:{
                        rendererOptions:{
                            tickRenderer:$.jqplot.CanvasAxisTickRenderer},
                            tickOptions:{
                                fontSize:'10pt', 
                                fontFamily:'Tahoma', 
                                angle:30
                            }
                    }
                },
                series:[{ lineWidth:4, markerOptions:{ style:'square' } }],
                cursor:{
                    zoom:true,
                    looseZoom: true
                }
            });
        }
    
        function genCategoryAxisRenderer(){
            $.jqplot.config.enablePlugins = true;
            var s1 = [2, 6, 7, 10];
            var ticks = ['a', 'b', 'c', 'd'];

            plot1 = $.jqplot('chart1', [s1], {
                // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
                animate: !$.jqplot.use_excanvas,
                seriesDefaults:{
                    renderer:$.jqplot.BarRenderer,
                    pointLabels: { show: true }
                },
                axes: {
                    xaxis: {
                        renderer: $.jqplot.CategoryAxisRenderer,
                        ticks: ticks
                    }
                },
                highlighter: { show: false }
            });

            $('#chart1').bind('jqplotDataClick', 
                function (ev, seriesIndex, pointIndex, data) {
                    $('#info1').html('series: '+seriesIndex+', point: '+pointIndex+', data: '+data);
                }
            );
        }
        genCategoryAxisRenderer();
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