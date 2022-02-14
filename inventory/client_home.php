<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/w3.css">
        <title>Inventory Management System </title>
    </head>
    <style> 
        .bgimg_au {
    background-image:url('./image/paper3.jpg');
    background-size: 100% 1000px;
    background-repeat: no-repeat;
}

     </style>
    <body class="bgimg_au w3-display-top" >
        <ul class="w3-navbar w3-white">
            <li><a href="index.php">Home</a></li>
           
           
			
			
		</ul>

	<link rel="stylesheet" href="css/semantic.min.css">

	<?php 
	     require_once('db_config.php');
	 ?>
</head>
<body>
	
<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}


			$query = "SELECT * FROM product_info order by PRODUCT_ID asc";
			if ($result = $conn->query($query))
			
			?>
	<div class="ui grid">

		<div class="ui four wide column">
			<div style=" padding: 20px;">






				<h1>Inventory Management System</h1>
			</div>
			<div style="padding: 30px">
				
				<div class="field">
      <br>

      	<form class="ui form" method="post" action="search_result.php">
        <input type="text" name="search_quary" placeholder="search hare">
      </div>
        

      <div style="padding: 5px">
        <button class="ui right floated button">Search</button>        
     </div>
				
			</div>
					
				</div>
				
					
				<div class="ui twelve wide column">
					<div class="ui text container"  style="padding-top: 50px"> 
						
					<table class="ui inverted white table">
						<thead>
			<tr>

				<th>Product Id</th>
				<th>Product Name</th>
				<th>Stock Quantity</th>
				<th>Stock Status</th>
				<th>Purchase Price</th>
				<th>Selling Price</th>
				<th>Option</th>
				
			</tr> 

		</thead>
		
		<tbody>
			<tr>
				<?php
			if ($result = $conn->query($query)) {
				$ser =1;
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%s</td> <td>%s</td> <td>%d</td> <td>%s</td> <td>%s</td> <td>%s</td>  <td><a href='order.php?id=%s'>Order</a> </td>", $ser,$row["PRODUCT_NAME"], $row["STOCK_QUANTITY"],$row["STOCK_STATUS"],$row["PURCHASE_PRICE"] ,$row["PRICE"]  ,$row["PRODUCT_ID"]);

					printf("</tr>");
					$ser++;
				}
			}

			?>
			</tr>


		</tbody>

	</table>
	

<script src="js/jquery-3.4.1.min.js"></script>
  	<script src="js/semantic.min.js"></script>
</body>
</html>