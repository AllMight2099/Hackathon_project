<!DOCTYPE html>
<html>
<head>
	<title>
		Radar
	</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
</head>
<body>
<canvas id="myChart" width="45" height="45"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['Physics', 'Chemistry', 'Mathematics'],
        datasets: [{
             label: 'Test 1',
            data: [32,12,23],
            backgroundColor: [
                'rgba(37,77,236, 0.4)'
            ],
            borderColor: [
                'rgba(, 99, 132, 1)'
            ],
            borderWidth: 1
        },
        {
            label: '',
            data: [45,45,45],
            backgroundColor: [
                'rgba(255,255,255, 0.2)'
            ],
            borderColor: [
                'rgba(255, 255, 255, 0)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        maintainAspectRation: true
    }
});
</script>

</body>
</html>