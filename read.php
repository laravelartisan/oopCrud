<?php
	// include 'classes/Database.php';
	include 'classes/User.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Edit Panel</title>
    <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css.map"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap.css.map"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/custom.js"></script>
</head>
<body>
	<div class="header">
	    <h1>This is Header div</h1>
	</div>
	<div class="container">
		<div class="mainContent">
			<div class="row">
				<div class="xs-12">
					<div class="editorPanel">
						<h1 class="oop-title"><span class='glyphicon glyphicon-edit'></span> Registerd Users</h1><hr class="style-two">
						 <div class="table-responsive">
							<?php 
								$user1 = new User();
								// var_dump($user1->read());die();
								// va($user1->read()[0]);die();
								 //Output an array of Objects representing rows
								echo '<table class="table"><tr><th>ID</th><th>Name</th><th>Email</th><th>Address</th><th>Action</th></tr>';
								foreach($user1->read() as $value){
								   // echo $profile['id']."<br/>".$profile['uname']."<br/>".$profile['uemail']."<br/>".$profile['upass']."<br/>";
								   echo "<tr><td>".$value['id']."</td><td>".$value['uname']."</td><td>".$value['uemail']."</td><td>".$value['upass']."</td><td><form action='action.php' method='post'><input type='hidden' name='key' id='key' value='".$value['id']."'/><button class='btn btn-info' name='viewProfilebtn' id='viewProfilebtn'><span class='glyphicon glyphicon-user'></span> View Profile</button> || <button class='btn btn-warning' name='editbtn' id='editbtn'><span class='glyphicon glyphicon-edit'></span> Edit</button> || <button class='btn btn-danger' name='delbtn' id='delbtn' ><span class='glyphicon glyphicon-trash'></span> Delete</button></form></td></tr>";

								}
								echo "</table>"; 

							?> 
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
	    <h1>This is Footer div</h1>
	</div>
</body>
</html>