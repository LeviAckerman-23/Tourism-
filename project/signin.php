<?php

$db = mysqli_connect('localhost','root','','tourism');

$username = $_POST["user"];
$password = $_POST["pass"];
$d = date("Y-m-d h:i:sa");
$i=0;
$usern = "";
$passd = "";

// $que="INSERT INTO `login` (`user`,`pass`,`date_time`) VALUES ('$username','$password','$d')";

$sql="SELECT username, password FROM `users` WHERE username='$username' and password='$password'";
$result2 = mysqli_query($db, $sql);

if(isset($_POST['submit'])){
	if($username == 'admin' and $password == 'ad123'){
		$result = mysqli_query($db, $sql);
		header('location:admin.php');
	}
	elseif($result2) {
		while($rows = mysqli_fetch_assoc($result2) and $i==0)
		{

			$usern = $rows['username'];
			$passd = $rows['password'];
			$i= $i+1;
		}
		if ($usern==$username and $passd==$password) {
			$result = mysqli_query($db, $sql);
			header("location:main.php");
		}
		else{
			?>
			<script>
				alert("Invalid username or password");
			</script>
			<?php
		}
	}
}

?>
