//window.onload = function () {
//	var chart = new CanvasJS.Chart("chartContainer",
//	{
//		title:{
//			text: "Programming Skillset"
//		},
//		legend: {
//			maxWidth: 600,
//			itemWidth: 600
//		},
//		data: [
//		{
//			type: "pie",
//			showInLegend: false,
//			legendText: "{indexLabel}",
//			dataPoints: [
//				{ y: 20, indexLabel: "SharePoint" },
//				{ y: 5, indexLabel: "SQL" },
//				{ y: 25, indexLabel: "HTML" },
//				{ y: 20, indexLabel: "CSS"},
//				{ y: 15, indexLabel: "JavaScript" },
//				{ y: 10, indexLabel: "PHP"},
//				{ y: 5, indexLabel: "Python"}
//			]
//		}
//		]
//	});
//	chart.render();
//}

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Skills', 'Percentage'],
          ['SharePoint',     20],
          ['SQL',      5],
          ['HTML',  30],
          ['CSS', 20],
          ['JavaScript',    10],
          ['PHP', 5],
          ['OOP',    10]
        ]);

        var options = {
          title: 'Programming Skillset'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chartContainer'));

        chart.draw(data, options);
      }