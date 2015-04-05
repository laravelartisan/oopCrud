<?php
	// include 'classes/Database.php';
	// include 'classes/User.php';
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
<!--						<h1 class="oop-title"><span class='glyphicon glyphicon-user'></span><img src="--><?php //echo $profile['image'] ?><!--" alt="no image" class=" img-circle"/><br> --><?//=$profile['uname']?><!--</h1><hr class="style-two">-->
                        <h1 class="oop-title"><img src="<?php echo $profile['image'] ?>" alt="no image" class=" img-circle"/> <?=$profile['uname']?></h1><hr class="style-two">
						 <div class="table-responsive">

                             <?php

							echo $profile['uname']."<br/>".$profile['uemail'];

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