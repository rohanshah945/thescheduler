$(document).ready(function () {
	$.ajax({
		url: "http://localhost/chart/sem5_report_data.php",
		method: "GET",
		success: function(data){
			console.log(data);
			var subject = [];
			var Syllabus = [];

			for(var i in data){
				subject.push(data[i].subject_ID);
				Syllabus.push(data[i].semester_ID);
			}

			var chartdata = {
				labels: subject,
				datasets: [
					{
						label:'Syllabus Completed',
						color: '#7e6def',
						borderColor: '#b141f5',
						borderWidth: 2,
						data: Syllabus
					}
				]
			};

			var ctx = $("#barChart5");
			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});

		},
		error: function(data){
			console.log(data);
		}


	});
});


/*
const CHART = document.getElementById('barChart');

Chart.scaleService.updateScaleDefaults('linear', {
    ticks: {
        min: 0,
        max: 100,
    }
});

let barChart = new Chart(CHART, {
	type: 'bar',
	data: {
		labels: subject,//['CC-101','CC-102','CC-103','CC-104','CC-105','CC-106','CC-107'],
		datasets: [
		{
			label:'Syllabus Completed',
			color: '#7e6def',
			borderColor: '#b141f5',
			borderWidth: 2,
			data: [30,30,45,50,60,40,45]
		}
		]
	}
}); */