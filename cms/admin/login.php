<?php
include "includes/header.php";
?>
		<body style="background-image:url('../img/img12.jpg');background-size:cover">

        <div class="row">
					<div class="col l6 offset-l3 m8 offset-m2 s12">
						<div class="card-panel center " style="margin-bottom:0px">
							<ul class="tabs">
								<li class="tab">
									<a href="#login">Log in</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col l6 offset-l3 m8 offset-m2 s12" id="login">
					<div class="card-panel center" style="margin-top:1px">
					<?php
						if(isset($_SESSION['message']))
						{
							echo $_SESSION['message'];
							unset($_SESSION['message']);
						}
					?>
					<form action="" method="POST">
					<div class="input-fild">
						<input type="text" id="username" name="username" placeholder="Username">
						</div>
						<div class="inpute-fild">
						<input type="password" name="password" id="password" placeholder="Password">
						</div>
						<input type="submit" name="submit" class="btn" value="Login">
						<a href="signup.php">click to Singup</a>
					</form>
					</div>
					</div>
        </div>

<?php
include "includes/footer.php";
?>



     