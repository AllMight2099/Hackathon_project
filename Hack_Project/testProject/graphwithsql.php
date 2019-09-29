
<!DOCTYPE html>
<html>
<head>
	<title> Line Graph</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
</head>
<body>
Damn Important
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test1";
	$conn = new mysqli($servername, $username, $password,$dbname);
	 $sql = "SELECT testno,p FROM st2";
	 $result = $conn->query($sql);
	 // print_r($result) ;
	 $data[]=array();
	 if($result->num_rows > 0)
	 {
	 	while($row = $result->fetch_assoc())
	 	{
	 		$data[] = $row;
	 	}
	 }
	 ?>
	 <div>
	<canvas id="myChart"></canvas>
	<script>
		var test=JSON.parse('<?php echo json_encode($data)?>');
		var x=[],y=[];
		// console.log(test);
		for(i=0;i<test.length-1;i++)
		{
			x[i]=test[i+1]["testno"];
			y[i]=test[i+1]["p"];
		}
			console.log(x);
			console.log(y);

		var ctx =document.getElementById('myChart') .getContext('2d');
		var myChart = new Chart(ctx, {
    	type: 'bar',
    data: {
        labels: x,
        datasets: [{
            label: '# of Votes',
            data: y,
            backgroundColor: [
                'rgba(0, 29, 12, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
	</script> 
</div>
</body>
</html>