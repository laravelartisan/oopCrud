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
						<h1>Editor Panel</h1>
						<form class="form-horizontal" action="#" method="post" role="form">
							<div class="form-group">
								<div class="col-xs-10">
									<input class="form-control" type="hidden" name="id" value="<?php echo $showProfile['id'];?>" placeholder="ID" >
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="name" name="name">Name :</label>
								<div class="col-xs-10">
									<input class="form-control" type="text" name="name" value="<?php echo $showProfile['uname']; ?>" placeholder="User Name">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="email" name="email">E-mail :</label>
								<div class="col-xs-10">
									<input class="form-control" type="email" name="email" value="<?php echo $showProfile['uemail']; ?>" placeholder="User E-mail">
								</div>
							</div>
							<!--<div class="form-group">
								<label class="control-label col-sm-2" for="password" name="pass">Password :</label>
								<div class="col-xs-10">
									<input class="form-control" type="text" name="pass" value="<?php /*echo $showProfile['upass']; */?>" placeholder="Password">
								</div>
							</div>-->
							<div class="form-group">
								<div class="col-xs-offset-2 col-xs-10">
									<input type="submit" class="btn btn-primary btn-block" name="updatebtn" value="Update" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<?php 
			// $user1 = new User();
			// $user1->read();
		?>
	</div>
	<div class="footer">
	    <h1>This is Footer div</h1>
	</div>
</body>
</html>