
<?php
    include_once 'header.php';
	include 'db.php';

    $email = $_POST['email'];
    $sql = "SELECT * FROM active WHERE email like '%$email%'";

	$result = mysqli_query($conn, $sql);


    if($result){
		echo "it is working ";
        // echo $result;
        $row = mysqli_fetch_assoc($result);
        $name = $row['name']; 
        $phone = $row['phone'];
        //header("location: home.php");
    	echo $name;
      
    }
    else if (! $result){

	echo "this is not working but why";

    }
    
?>


<div class="discontent">
    <h1> the name is <br><?php  echo  $name;?></h1>
    <br>
    <h1> the phone is <br><?php  echo  $phone;?></h1>
</div>

