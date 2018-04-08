<!DOCTYPE HTML>  
<html>
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>  

		<?php
		// define variables and set to empty values
		$unameErr = $emailErr = $phoneErr = "";
		$uname = $email = $phone = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  if (empty($_POST["username"])) {
		    $unameErr = "Username tidak boleh kosong!";
		  } else {
		    $uname = test_input($_POST["username"]);
		    // check if name only contains letters and whitespace
		    if (!preg_match("/^[a-z]*$/",$uname)) {
		      $unameErr = "Username harus menggunakan huruf kecil semua"; 
		    }
		  }
		  
		  if (empty($_POST["email"])) {
		    $emailErr = "Email harus diisi!";
		  } else {
		    $email = test_input($_POST["email"]);
		    // check if e-mail address is well-formed
		    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match("/^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,4}$/",$email)) {
		      $emailErr = "email invalid! disamping menggunakan @, huruf yang diinputkan juga harus kecil semua!. Contoh: dafapramudya7@gmail.com"; 
		    }
		  }

		  if (empty($_POST["phone_number"])) {
		    $phoneErr = "No Telp tidak boleh kosong!";
		  } else {
		    $phone = test_input($_POST["phone_number"]);
		    // check if name only contains letters and whitespace
		    if (!preg_match("/^[0-9]{3}[0-9]{3}[0-9]{3}[0-9]{3}$/",$phone)) {
		      $phoneErr = "No Telephon tidak valid!"; 
		    }
		  }
		}
		    
		  

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
		?>

		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
		  <input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username">
		  <span class="error"> <?php echo $unameErr;?></span>
		  <br><br>
		  <input type="text" name="email" value="<?php echo $email;?>" placeholder="Email">
		  <span class="error"> <?php echo $emailErr;?></span>
		  <br><br>
		  <input type="text" name="phone_number" value="<?php echo $phone;?>" placeholder="No Telephone">
		  <span class="error"><?php echo $phoneErr;?></span>
		  <br><br>
		  <input type="submit" name="submit" value="Submit">  
		</form>
	</body>
</html>