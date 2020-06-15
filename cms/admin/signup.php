<?php
include "includes/header.php";
?>
		<body style="background-image:url('../img/img12.jpg');background-size:cover">

        <div class="row">
					<div class="col l6 offset-l3 m8 offset-m2 s12">
						<div class="card-panel center " style="margin-bottom:0px">
							<ul class="tabs">
								<li class="tab">
									<a href="#signup">Sign up</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col l6 offset-l3 m8 offset-m2 s12" id="signup">
					<div class="card-panel center" style="margin-top:1px">
					<form action="" method="POST">
                    <div class="input-field">
						<input type="email" name="email" id="email" placeholder="Enter Email" class="validate">
						<label for="email" data-error="Invalid Email Format" data-success="Valid email"></label>
						</div>
					<div class="input-fild">
						<input type="text" id="username" name="username" placeholder="Username">
						</div>
						<div class="inpute-fild">
						    <input type="password" name="password" id="password" placeholder="Password">
						</div>
						<input type="submit" name="submit" class="btn" value="Sign Up">
                        <a href="login.php">click to Login</a>
					</form>
                    </div>
                    </div>
        </div>            

<?php
include "includes/footer.php";
?>                    

<?php
include "includes/header.php";
if(isset($_POST['submit']))
{
    $email=$_POST['email']; 
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=mysqli_real_escape_string($conn,$email);
    $username=mysqli_real_escape_string($conn,$username);
    $password=mysqli_real_escape_string($conn,$password);
    $email=htmlentities($email);
    $username=htmlentities($username);
    $password=htmlentities($password);
    $sql="insert into users(email,username,password) values('$email','$username','$password')";
    $res=mysqli_query($conn,$sql);
    echo $sql;
    if($res)
    {
        header("Location: login.php");
        $_SESSION['message']="You have been Sucessfuly Registered, Login to Continue ";
    }
    else
    {
        header("Location: login.php");
        $_SESSION['message']="Sorry Somthing went Wrong,Pleace Singuo Again ";
    }
}

?>
