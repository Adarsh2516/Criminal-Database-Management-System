<html>
	<head>
		<style>
			
			#title{
				background-color:Gray;
				font-size:24px;
				color:#E53935;
				
				color:white;
				margin-left:20px;
				
				}
				
			ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: Gray;
			}
			
			li {
				float: right;
			}
			
			#titlehead{
				float: left;
			}

			li a {
				display: block;
				color: white;
				font-size:20px;
				text-align: center;
				padding: 16px 20px;
				margin-top:10px;
				text-decoration: none;
			}

			li a:hover:not(.active) {
				background-color: #cccccc;
				color:black;
			}

			
			#home_img{
				padding-left:50px;
				padding-bottom:10px;
				
			}
			
			#bottom_posts{
				
				display: grid;
				grid-template-columns: auto auto auto;
				padding: 10px;
			
			}
			
			#img_title{
				
				display: grid;
				grid-template-columns: auto auto auto;
				padding: 10px;
			
			}
			
			#posts{
				padding: 20px;
				font-size: 30px;
				text-align: center;
			
			}
			
			#card{
				background-color:#FFFFEF;
				margin:150px;
				height:150px:
				border-radius:5px;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
				text-align:center;
				font-size:24px;
				padding:25px;
				margin-left:200px;
				margin-right:200px;
			}
			
			#done{
				background-color: #00b300;
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			
			}
			
		</style>
	</head>
	
	<body>
		
		
		
		<ul>
			
			<li><a href="about_us.php">About us</a></li>
			<li><a href="admin_login.php">Admin</a></li>
			<li><a href="judge_login.php">Judge</a></li>
			<li><a class="active" href="officer_login.php">Police</a></li>
			<li><a href="home.php">Home</a></li>
		</ul>

<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname ="crimedb";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "CREATE TABLE IF NOT EXISTS traffic_record (
			trafficrecord_id VARCHAR(50) PRIMARY KEY,
			criminal_name VARCHAR(50), 
			officer_name VARCHAR(50),
			case_name VARCHAR(50),
			vehicle_number VARCHAR(50),
			fine_amount VARCHAR(50),
			crime_address VARCHAR(50),
			criminal_gender VARCHAR(50)
		)";

		if ($conn->query($sql) === TRUE) {
		//echo "Table traffic_database created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}
		
		$trafficrecordid = filter_input(INPUT_GET,'trafficrecordid');
		$crimialname = filter_input(INPUT_GET,'crimialname');
		$officername = filter_input(INPUT_GET,'officername');
		$casename = filter_input(INPUT_GET,'casename');
		$vehicleno = filter_input(INPUT_GET,'vehicleno');
		$fineamount = filter_input(INPUT_GET,'fineamount');
		$crimeaddress = filter_input(INPUT_GET,'crimeaddress');
		$criminalgender = filter_input(INPUT_GET,'criminalgender');
		


		$sql = "INSERT INTO traffic_record (trafficrecord_id, criminal_name ,officer_name ,case_name ,vehicle_number ,fine_amount, crime_address ,criminal_gender) 
		VALUES ('$trafficrecordid', '$crimialname', '$officername','$casename','$vehicleno','$fineamount','$crimeaddress','$criminalgender')";


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	echo "<div id='card'><p>Traffic Record Successfully Added</p><form action='officer_home.php' method='get'><button type='submit' id='done'>Done</button></form></div>";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

		$conn->close();
		
		?>
		
</body>
	
	
	


</html>