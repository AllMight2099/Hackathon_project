<html>
<head>
	<title> Line Graph</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
</head>
<body>
<!-- fetching data from a database -->
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
 	<div class="chartContainer" 
 	style="position:center relative;height:390	; width: 390">
	<canvas id="myChart" width="20" height="20"> </canvas> <!--  -->
	</div>
	<script>
		//script to 
		var test=JSON.parse('<?php echo json_encode($data)?>');
		var x=[],y=[],c=[];
		j=test.lenght;
		// console.log(test);
		for(i=0;i<test.length-1;i++)
		{
			x[i]=test[i+1]["testno"];
			y[i]=test[i+1]["p"];
			c[i]=test[i+1]["c"];

		}
			console.log(x);
			console.log(y);
			console.log(c);

		var ctx =document.getElementById('myChart') .getContext('2d');
		var myChart = new Chart(ctx, {
    	type: 'line',
    data: {
        labels: [1,2,3,4,5,6,7,8,9,10,11,12,13],
        datasets: [{
            label: ' ',
            fill: true,
            data: [89,89,78,100,81,58,45,50,100,60,78,89,67],
             backgroundColor: [ <?php for($q=0;$q<5;$q++)
             	{
                if($q==4)
                    echo " 'rgba(255, 29, 12, 0.2)' ";
                else
                    echo " 'rgba(255, 29, 12, 0.2)', ";
            	}
             ?> 
            ],  
             //'rgba(255, 29, 12, 0.2)'
            //     'rgba(255, 29, 12, 0.2)',
            //     'rgba(54, 162, 235, 0.2)',
            //     'rgba(255, 206, 86, 0.2)',
            //     'rgba(75, 192, 192, 0.2)',
            //     'rgba(153, 102, 255, 0.2)',
            //     'rgba(255, 159, 64, 0.2)'
            // ],
            borderColor: [ 'rgba(255, 99, 132, 1)'
            // for (j=0,j<test.length;j++)
            // {
            // 	if(j==test.length-1)
            // 		'rgba(255, 99, 132, 1)'
            // 	else
            // 		'rgba(255, 99, 132, 1)',
            // }

            ],
            pointRadius: 2,
            borderWidth: 2,
            lineTension: 0,
        },
          			//Second Dataset
        // {
        //     // label: '! of Votes',
        //     fill: false,
        //     data: [1,2,3,4,5],
        //      backgroundColor: [ <?php for($q=0;$q<5;$q++)
        //      	{
        //         if($q==4)
        //             echo " 'rgba(255, 29, 12, 0.2)' ";
        //         else
        //             echo " 'rgba(255, 29, 12, 0.2)', ";
        //     	}
        //      ?> 
        //     ],  
        //      //'rgba(255, 29, 12, 0.2)'
        //     //     'rgba(255, 29, 12, 0.2)',
        //     //     'rgba(54, 162, 235, 0.2)',
        //     //     'rgba(255, 206, 86, 0.2)',
        //     //     'rgba(75, 192, 192, 0.2)',
        //     //     'rgba(153, 102, 255, 0.2)',
        //     //     'rgba(255, 159, 64, 0.2)'
        //     // ],
        //     borderColor: [ 'rgba(255, 99, 132, 1)'
        //     // for (j=0,j<test.length;j++)
        //     // {
        //     // 	if(j==test.length-1)
        //     // 		'rgba(255, 99, 132, 1)'
        //     // 	else
        //     // 		'rgba(255, 99, 132, 1)',
        //     // }

        //     ],
        //     pointRadius: 2,
        //     borderWidth: 2,
        //     lineTension: 0,
        // }
        ],

    },
    options: {
    	 maintainAspectRation: true,
        scales: {
        	xAxes:[{
        		ticks: {
        			beginAtZero: true
        		}
        	}],	
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
	</script> 
</body>
</html>