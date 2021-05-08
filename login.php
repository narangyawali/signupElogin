
  <?php
    include_once 'header.php';
    
    ?>

<div class="form">
	<form action="loginAct.inc.php" method="POST">
		<label for="email">EMAIL</label>
   
    <input type="email" name="email" placeholder="email" required>
    <br>
    <!-- <label for="password">PASSWORD</label>
		<input type="password" name="password" placeholder="password" required>
    <br> -->
    <button type="submit" name="btn">SEARCH</button>
    </form>
    
    <?php
    include_once 'header.php';
    
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    
    
    ?>

	<div>
  	<h1> <?php global $name;echo $name  ?></h1>
    <h1> <?php global $phone;echo $phone  ?></h1>
  </div>

</div>

