<html>
	<head>
		<style>
			.bg{
			background-image:url("imgs/trafficjam.jpeg");
			height:1000px;
			background-position:center;
			background-repeat:no-repeat;
			background-size:cover;
			opacity:0.8;
		   }
		   
			#title{
				background-color:transparent;
				font-size:24px;
				color:white;
				margin-left:20px;
				
				}
				
			ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: transparent;
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
			}

			
			* {
				box-sizing: border-box;
			}

			input[type=text], select, textarea,input[type=password],input[type=email],input[type=number],input[type=date] {
				margin-right:400px;
				text-align:center;
				width: 40%;
				padding: 12px;
				border: 1px solid #ccc;
				border-radius: 4px;
				resize: vertical;
			}

			label {
				font-size:18px;
				margin-left:450px;
				padding: 12px 12px 12px 0;
				display: inline-block;
			}

			input[type=submit] {
				background-color: #00b300;
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				float: right;
			}

			input[type=submit]:hover {
				background-color: #4dff4d;
			}

			.container {
			    
				border-radius: 5px;
				background-color: transparent;
				padding: 20px;
			}
			.cont{
				background-position:center;
				 background: rgb(0, 0, 0); 
				background: rgba(0, 0, 0, 0.5); 
				color: #f1f1f1;
				height:1000px;
			}


			.col-25 {
				float: left;
				width: 50%;
				margin-top: 6px;
			}

			.col-75 {
				float: left;
				width: 50%;
				margin-top: 6px;
			}

			/* Clear floats after the columns */
			.row:after {
				content: "";
				display: table;
				clear: both;
			}

			/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
			@media screen and (max-width: 600px) {
				.col-25, .col-75, input[type=submit] {
					width: 100%;
					margin-top: 0;
				}
			}
			
		</style>
	</head>
	
	<body>
		
		<div class="bg">
		<div class="cont">
		<ul>
			
			<li><a href="about_us.php">About us</a></li>
			<li><a href="admin_login.php">Admin</a></li>
			<li><a href="judge_login.php">Judge</a></li>
			<li><a href="officer_login.php">Police</a></li>
			<li><a href="home.php">Home</a></li>
		</ul>
		
		<h2 style="font-style:italic; font-size:30px;padding-left:30px;">Search Traffic Record</h2>
		
		<div style="text-align:center;"> <img src="imgs\trafficimg.png">  </div>
		
		<div class="container">
			<form action="traffic_search_action.php" method = "get">
				<div class="row">
					<div class="col-25">
						<label for="fname">Traffic Record Id</label>
					</div>
					<div class="col-75">
						<input type="text" pattern=".{1,}" required  name="trafficrecordid" placeholder="Record Id..">
					</div>
				</div>
				
				
				
				<div class="row">
					<input type="submit" style="margin-right:600px; margin-top:10px;" value="Submit">
				</div>
			</form>
			
			
			
		</div>
		
		
		</div>
		</div>
		
	</body>
	
	
	


</html>