<?php
include 'Database.php';

class User{
	private $db;

	function __construct(){
		$newdd = new Database();
		$this->db = $newdd->conDb('localhost','root','','crud');
		// var_dump($this->db); die();
		}

	function create($name,$email,$pass){
		$myQuery = "INSERT into user VALUES('','$name','$email', '$pass')";
		$res = mysqli_query($this->db,$myQuery);
		if($res){
			echo "Successfully Inserted!!";
		}else{
			echo "Wrong";
		}
	}

	function read(){
		$myQuery = "SELECT * from user";
		$res = mysqli_query($this->db,$myQuery);
		$value=NULL;
		while ($value = $res->fetch_assoc()) {
			$data[] = $value;
		}
		return $data;
		// var_dump($data);

		// echo '</table>';
		// die();
		// var_dump($res->fetch_assoc());die();
		// foreach($res->fetch_assoc() as $value){
		// 	// var_dump($value);//die();
		// 	echo $value;
		// 	// echo $value['id'] ."<br/>".$value['uname'] ."<br/>".$value['uemail'] ."<br/>".$value['upass'];
			
		// }
	}

	function delete($id){
		$myQuery = "DELETE from user WHERE id=$id";
		$res = mysqli_query($this->db,$myQuery);
		if($res){
			echo "Successfully Deleted The Row!!";
			header('Location: read.php');
		}
	}

	function show($id){
		// echo $id; die();

		$myQuery = "SELECT * from user WHERE id=$id";
		 $res = mysqli_query($this->db,$myQuery);
		 return $res->fetch_assoc();
		// var_dump($res);
	}

	/*function edit($id){
		return $singleProfile = $this->show($id);
		// echo $id; die();
		// var_dump($this->show($id));


	}	*/

function update($id,$name,$email,$pass){
	// echo $id. $name;die();
	$myQuery = "UPDATE user SET uname='$name', uemail='$email',upass='$pass' WHERE id=$id";
	if(mysqli_query($this->db,$myQuery)){
		// echo "Updated";
		header('Location: read.php');
	}else echo "Wrong";
}

function view_profile($id){
	// echo $id;
	$myQuery = "SELECT * from user WHERE id=$id";
	$res = mysqli_query($this->db,$myQuery);
	return $res->fetch_assoc();

}

}