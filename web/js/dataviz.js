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
        function generateLineAjax(idDiv, data){
           console.log(data);
           Highcharts.chart('container', {

            title: {
                text: 'Solar Employment Growth by Sector, 2010-2016'
            },

            subtitle: {
                text: 'Source: thesolarfoundation.com'
            },

            yAxis: {
                title: {
                    text: 'Nombre de visite'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    pointStart: 1
                }
            },

            series: [{
                name: 'Visite',
                data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
            }]

        });
        }
        function generate3dpieDonut(idDiv, data){
            Highcharts.chart(idDiv, {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45
                }
            },
            title: {
                text: 'Les categorie les plus visités'
            },
            subtitle: {
                text: '3D donut in Highcharts'
            },
            plotOptions: {
                pie: {
                    innerSize: 100,
                    depth: 45
                }
            },
            series: [{
                name: 'Delivered amount',
                data: data
            }]
        });
        }
        function generateColumChart(idDiv ,data){
            Highcharts.chart(idDiv, {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Nombre d\'article existant par categorie'
                },
                subtitle: {
                    text: 'Source: <a href="/contenu">contenu</a>'
                },
                xAxis: {
                    type: 'category',
                    labels: {
                        rotation: -45,
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Population (millions)'
                    }
                },
                legend: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: 'Population in 2008: <b>{point.y:.1f} millions</b>'
                },
                series: [{
                    name: 'Population',
                    data: data,
                    dataLabels: {
                        enabled: true,
                        rotation: -90,
                        color: '#FFFFFF',
                        align: 'right',
                        format: '{point.y:.1f}', // one decimal
                        y: 10, // 10 pixels down from the top
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                }]
            });
        }
        function pyramid(idDiv, data){
            Highcharts.chart(idDiv, {
                chart: {
                    type: 'pyramid'
                },
                title: {
                    text: 'Les livres par statut',
                    x: -50
                },
                plotOptions: {
                    series: {
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b> ({point.y:,.0f})',
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
                            softConnector: true
                        },
                        center: ['40%', '50%'],
                        width: '80%'
                    }
                },
                legend: {
                    enabled: false
                },
                series: [{
                    name: 'Nombre de livre',
                    data:data
                }]
});
        }




        generateLineAjax();

        getRequest("/nbVisite", function(data) {
                console.log(data);
                generateDateAxis('chart2', data);
	});
        getRequest("/articleStat", function(data) {
                console.log(data);
                
                generateColumChart('container', data);
	});
        getRequest("/visiteCategorie", function(data) {
                console.log(data);
                generate3dpieDonut('container2', data);
	});
        getRequest("/echangeStat", function(data) {
                console.log(data);
                pyramid('container3', data);
	});
    });