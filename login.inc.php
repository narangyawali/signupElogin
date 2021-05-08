

<?php
$email = $_POST['email'];
//$passswd = $_POST['password'];

include 'db.php';

$sql = "SELECT name FROM active WHERE email like '%$email%'; ";

$result = mysqli_query($conn, $sql);

if($result){
	
	echo $result;
    // $row = mysqli_fetch_assoc($result);
	// $name = $row['name'];
	// $phone = $row['phone'];
	// header("location: home.php");

	

}
<div>
	

	<h1> this is it<?php global $result; echo $result ?></h1>
</div>

else(){
    die("something is wrong with this page")
}

//$url = "login.php?name=$name&phone=$phone"




// echo "up to result working";
// if ($result){
// 	$row = mysqli_fetch_assoc($result);

//     $name = $row['name'];
//     $phone = $row['phone'];
	
//     $url = "login.php?name=$name&phone=$phone"
	
//     header("location:home.php");


// }
// else{

//     die("this didn't work");
// }




?> -->