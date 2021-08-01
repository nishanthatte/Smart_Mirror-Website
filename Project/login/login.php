<?php /*Sign up code(for registration) */
$insert = false ;
$msg = false;
$msg2 = false;
$check = false;
$check_p = false;
if(isset($_POST['submit']))
{
    $server = "localhost";
    $username = "root";
    $password = "";
	$database = "smartmirror";

    $con = mysqli_connect($server , $username , $password, $database);
   
    if(!$con){
        die("failed ". mysqli_connect_error());
    }

	$name = $_POST['name'];
	$emailid  = $_POST['emailid'];
	$pass = $_POST['pass'];

	$sqlname = "SELECT u_name FROM usr_data WHERE u_name='$name'";
	$resultverf = mysqli_query($con, $sqlname);

	
	$sqlemailid = "SELECT email FROM usr_data WHERE email='$emailid'";
	$resultverf_2 = mysqli_query($con, $sqlemailid);

	$sql = "INSERT INTO `usr_data`(`u_name`,`email`,`passwrd`) VALUES('$name','$emailid','$pass');";

	if(mysqli_num_rows($resultverf) <= 0){
        if(mysqli_num_rows($resultverf_2) <=0){
                if($con->query($sql) == true){
                $insert = true;
                }
                else{
                echo "Error: $sql <br> $con->error";
                }
                $con->close();
            }
        else{
            $msg2 = true;
        }
    }
    else{
        $msg = true;
    }


}
?>
<?php /*Sign in code(for Login)*/
if(isset($_POST['submit1'])){
	$server = "localhost";
    $username = "root";
    $password = "";
	$database = "smartmirror";

	$con = mysqli_connect($server , $username , $password, $database);

	$usr_login = $_POST['loginemail'];
	$usr_pass = $_POST['loginpass'];

	$sql = "SELECT email FROM usr_data WHERE email ='$usr_login'";
	$resultverf = mysqli_query($con, $sql);

	$sqlpasswrd = "SELECT passwrd FROM usr_data WHERE passwrd ='$usr_pass'";
	$resultverf_2 = mysqli_query($con, $sqlpasswrd); 

	if(mysqli_num_rows($resultverf) == 1){
        if(mysqli_num_rows($resultverf_2) == 1){
			?>
			<script>
				alert("Logged In")
				location.replace("https://animesuge.io/anime/one-piece-ov8/ep-745")
			</script>
			<?php
		}
		else{
			$check_p = true;
		}
	}
	else{
		$check = true;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style.css">
<body>
  <div class="NavBar">
	<a href="http://localhost/Project/index/index.php">
    <img src="logo.png" class="logo"> 
	</a>
  </div>
   <div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="login.php" method="post">
			<h1>Create Account</h1>			
			<input type="text"  name="name" placeholder="Name" />
			<input type="email" name="emailid" placeholder="Email" />
			<input type="password" name="pass" placeholder="Password" />
			<button type="submit" name="submit" class="submit-btn">Sign Up</button>
		</form>
	</div>  
	<div class="form-container sign-in-container">
		<form method="post">
			<h1>Sign in</h1>
			<p>
				<?php
				if($check == true){
                    echo "<p class='submitmsg1'>The Email entered is not registered.</p>";
                }
                if($check_p == true){
                    echo "<p class='submitmsg1'>Incorrect password.</p>";
                }
				if($msg == true){
                    echo "<p class='submitmsg1'>The Username is already taken.</p>";
                }
                if($msg2 == true){
                    echo "<p class='submitmsg1'>The Email Id is already taken.</p>";
                }
                if($insert == true){
                    echo "<p class='submitmsg'>Registration Successful. Please Login to continue.</p>";
                }
				?>
			</p>
			<input type="email" name="loginemail" placeholder="Email" />
			<input type="password" name="loginpass" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button type="submit" name="submit1" class="submit-btn">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, User!</h1>
				<p>Enter your personal details</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
    </script>
  </body>
</html>