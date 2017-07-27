<?php 
     $usernameErr =$passwordErr = "";
     $username =$password = "";
     if ($_SERVER['REQUEST_METHOD'] =="POST") {
       if (empty($_POST['username'])) {
         $usernameErr="username is reqired.";
       }else{
        $username = $_POST['username'];
       }

        if (empty($_POST['password'])) {
         $passwordErr="password is reqired.";
       }else{
        $password = $_POST['password'];
       }
     }
?>
<!DOCTYPE html>
<html>
	<head>
    <title>Wellcome to PHP</title>
    <style>
           .err{color: #ff0000;}
    </style>
	</head>
	<body>
    <h2>PHP Working with Form</h2>
    <span class="err">* is reqired </span>
    <form action ="<?php $_SERVER['PHP_SELF'] ?>"methot ="post" >
      <input type = text ="username" name ="username" placeholder ="username"/>
      <span class="err">* <?php echo $usernameErr; ?></span>
      <br/><br/>
      <input type = text ="password" name ="password" placeholder ="password"/>
       <span class="err">* <?php echo $passwordErr; ?></span>
        <br/><br/>
      <input type ="submit" value = "Login"/>
    </form>
    Username : <?php echo "$username";?><br/>
    Password : <?php echo "$password";?><br/>

	</body>
</html>
