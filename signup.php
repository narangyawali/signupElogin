<?php
include_once 'header.php';

?>

<div class="form">
    <form action="signup.inc.php" method ="POST">

        <label for="name">NAME</label>
        <input type="text" name="name" placeholder="enter your name" required>
        <br>
        <label for="email">EMAIL</label>
        <input type="email" name="email" placeholder="enter your email" required>
        <br>
        <label for="usern">USERNAME</label>
        <input type="text" name="usern" placeholder="enter your username" required>
        <br>
        <label for="phone">PHONE NO</label>
        <input type="number" name="phone" placeholder="enter your phone number" required>
        <br>
        <label for="passwd">PASSWORD</label>
        <input type="password" name="passwd" placeholder="password" required>
        <br>
        <button type="submit" name="btn">sign up</button>
        <!-- <input type="submit" name="btn" > -->
        
        
        </form>
        

</div>




