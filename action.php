<?php
include'classes/User.php';


// $key = $_POST['key'];
/*$s = $_POST['delbtn'];
echo $s;die();*/
$user1 = new User();


// $name = $_POST['s'];
// $email = $_POST['t'];
// $pass = $_POST['e'];
// $user1->create($name,$email,$pass);
// echo $name; die();

if(isset($_POST['sub'])){

			$name = $_POST['s'];
			$email = $_POST['t'];
			$pass = $_POST['e'];

			// echo $name; die();
			$user1->create($name,$email,$pass);
		}

if(isset($_POST['editbtn'])){
	$key = $_POST['key'];
	// echo $key;die();
	// $user1->edit($key);
	$showProfile = $user1->show($key); //retrievs single data array(single row) based on a ID
	include'update.php';
};

if(isset($_POST['delbtn'])){
	
	$user1->delete($_POST['key']);
};

if(isset($_POST['updatebtn'])){
	
	$user1->update($_POST['id'],$_POST['name'],$_POST['email'],$_POST['pass']);
	// header('Location: read.php');
};

if(isset($_POST['viewProfilebtn'])){
	$profile = $user1->view_profile($_POST['key']);
	include'profile.php';

}



