window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Programming Skillset"
		},
		legend: {
			maxWidth: 600,
			itemWidth: 400
		},
		data: [
		{
			type: "pie",
			showInLegend: false,
			legendText: "{indexLabel}",
			dataPoints: [
				{ y: 20, indexLabel: "SharePoint" },
				{ y: 5, indexLabel: "SQL" },
				{ y: 25, indexLabel: "HTML" },
				{ y: 20, indexLabel: "CSS"},
				{ y: 15, indexLabel: "JavaScript" },
				{ y: 10, indexLabel: "PHP"},
				{ y: 5, indexLabel: "Python"}
			]
		}
		]
	});
	chart.render();
}