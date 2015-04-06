<?php
include'classes/User.php';
include("classes/resize-class.php");


// $key = $_POST['key'];
/*$s = $_POST['delbtn'];
echo $s;die();*/
$user1 = new User();


// $name = $_POST['s'];
// $email = $_POST['t'];
// $pass = $_POST['e'];
// $user1->create($name,$email,$pass);
// echo $name; die();
$option = null;

if(isset($_POST['signup'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];


    $height = $_POST['height'];
    $width  = $_POST['width'];
    $option = $_POST['option'];
    $img  = $_FILES['photo']['name'];
    $image = $_FILES['photo']['tmp_name'];
//        var_dump($img);
    echo '<br>';
//        var_dump($image);die();

    // *** 1) Initialise / load image
    $resizeObj = new resize($img,$image);

    // *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
    $resizeObj -> resizeImage($height, $width, $option);
    $newImage ='image/'.time().'.jpg';

    // *** 3) Save image
    $resizeObj -> saveImage($newImage, 100);

			/*$name = $_POST['s'];
			$email = $_POST['t'];
			$pass = $_POST['e'];*/

			// echo $name; die();
			$user1->create($name,$email,$pass,$newImage);
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
    $key = $_POST['key'];
    $profile = $user1->show($key);

//	$profile = $user1->view_profile($_POST['key']);
	include'profile.php';

}



