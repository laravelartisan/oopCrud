<?php
include'database.php';
class User{
		private $name;
		private $email;
		private $pass;
		private $db;

		function __construct(){
			$dd = new Database;			
			// $this->db= $dd->ddbb('mysql.2freehosting.com','u787434923_oop','2246101626','u787434923_crud');
			$this->db= $dd->ddbb('localhost','root','','crud');
			//var_dump($this->db); die();
			
		}

		function create($name,$email,$pass){
			$myquery = "INSERT into user VALUES('', '$name', '$email', '$pass')";
			if(mysqli_query($this->db,$myquery)){
				mail($email,"Congratulations!!", 'Thank you very much for signup');
				echo "Signed Up Successfully!! \r\n Please check your email";
			}
		}

		function read(){
			$myQuery = "SELECT * from user";
			$res = mysqli_query($this->db,$myQuery);
			while ($value = $res->fetch_assoc()) {
			// var_dump($value);
				echo"<br/>".$value['id'] ."<br/>".$value['uname'] ."<br/>".$value['uemail'] ."<br/>". $value['upass'];
			}

	function setInput($name, $email, $pass){
		$this->name = $name;
		$this->email = $email;
		$this->pass = $pass;
	}

	function getInput(){
		return $this->name."\r\n".$this->email."\r\n".$this->pass;
		// include'database.php';
		// $db=new Database('localhost','root','','crud');
		// $query = "INSERT into users VALUES('',$this->name,$this->email,$this->pass)";
		// $result = $db->query($query);
		// if($result){
		// 	echo "Success";
		// }
		// return $this->name;

	}
}
		// if(isset($_POST['login'])){

		// 	$name = $_POST['name'];
		// 	$email = $_POST['email'];
		// 	$pass = $_POST['password'];


		// 	$user2 = new User();
		// 	$user2->create($name,$email,$pass);
		// }


		

			 $user1 = new User();
		 // $user1->create('','Rinto','rinto.sp@gmail.com','2246smu'); die();
		 // $user1->create($_POST['s'], $_POST['t'],$_POST['e']); die();
		 //$user1->setInput($_POST['s'], $_POST['t'],$_POST['e']);
		 // echo $user1->getInput();
		// $user1->email('rinto.sp@gmail.com');
		// $user1->pass('2246');


