 <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html40/strict.dtd">
<?php include('dbConfig.php'); ?>
<?php 
	$sql = "INSERT INTO sites (username, password, email)
        VALUES (?,?,?)" 
?>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ADMIN | My Local Sites</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?= $projroot ?>css/main.css">
        <link rel="stylesheet" href="<?= $projroot ?>css/font-awesome.css">
	</head>
	<body>
		<div class="canvas">

		    <header>

			    <h1>My Local Sites</h1>

			    <nav>
			        <ul>
				        <li style="background: none !important; box-shadow: none; padding-left:0px;color: #005fb6;"><i class="fa fa-gear" style="margin-right: 5px;"></i><strong>Administration</strong></li>
			        </ul>
			    </nav>
				<h3>Sites</h3>
				 <?php
					  if(isset($_POST['save']))
						{
						    $sql = "INSERT INTO Sites (name, directory, category)
						    VALUES ('".$_POST["name"]."','".$_POST["directory"]."','".$_POST["category"]."')";
						
						    $result = mysqli_query($conn,$sql);
						}
				?>			
				<div class="admin-box">
					<table border="0" cellpadding="5" cellspacing="0">
						<tr>
							<th>Name</th>
							<th>Directory</th>
							<th>Category</th>
							<th>Actions</th>
						<tr>
							<?php $sql = "SELECT name, directory, category
										FROM sites;";   
										if(!$conn) {
											die("Connection failed: " . mysqli_connect_error());
										}

									    while ($row = $result->fetch_assoc()) {
										    echo '<tr>';
									        echo '<td>'.$row["name"].'</td><td>'.$row["directory"].'</td><td>'.$row["category"].'</td>';
									        echo '</tr>';
									    }
							?>
							
						</tr>
						<tr>
							<td><form action="admin.php" method="post"><input type="text" name="name"></td>
							<td><input type="text" name="directory"></td>
							<td><input type="text" name="category"></td>
							<td><button type="submit" name="save">save</button></form></td>
						</tr>
						</tr>
					</table>
					
				</div>
					
				<h3>Quick Links</h3>
				<h3>Site Categories</h3>
	</body>
</html>
