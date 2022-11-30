<?php
    include_once '../Model/Tarticles.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../Front-end-tools/bootstarp/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Bienvenu
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="nom">
						<span class="focus-input100" data-placeholder="nom"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="log" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<?php
                    if(isset($_POST['log'])){
                        $pass=$_POST['pass'];
                        $name=$_POST['nom'];
                        $a=admin::login();
                            while($p=$a->fetch()){
                                if($name==$p[0]){
                                    if($pass==$p[1]){
                                        header("location:articles_admin.php");
                                    }
                                    else{
                                        echo 'mot de pass est incorrect !';
                                    }
                                }
                                else{
                                    echo 'nom est incorrect !';
                                }
                            }
                    }
                ?>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<script src="../front-end-tools/bootstarp/bootstrap.min.js"></script>
	<script src="script.js"></script>


</body>
</html>