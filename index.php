






<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<!-- Mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>A short Project</title>

	<!-- Bootstrap CSS Only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<!-- Own Style Sheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Own HTML Sheet -->
	<link rel="stylesheet" type="text/css" href="index.html">


</head>
	<body>

		<!-- Welcome Administrator LogIn Form PHP -->

			<?php

				$welcomeMessage = "";
				$errorMessage = "";


				/*$min = 5;
				$max = 15;*/



				$users = array('mashrick','rahat','raisul','eshrat','maisha','rabeya','farzana');

				$usersEmail = array('mashrick@gmail.com','rahat@gmail.com','raisul@gmail.com','eshrat@gmail.com','maisha@gmail.com','rabeya@gmail.com','farzana@gmail.com');

				$usersPassword = array('123456789','12345678','','1234567','123456','12345');


				

				if (isset($_POST['contact-button'])) {

					$username 	= $_POST['username'];
					$email		= $_POST['emailaddress'];
					$password 	= $_POST['password'];

					

					/*if (strlen($username) < $min) {

						$errorMessage = "Sorry.... ADMIN<br>Username is too Short. Please Set a Username that contains a minimum of 5 letters.";

					}


					if (strlen($username) > $max) {

						$errorMessage = "Sorry.... ADMIN<br>Username is too Large. Please Set a Username that contains a maximum of 15 letters.";

					}*/		


					if ( !in_array ($username, $users)) {

						$errorMessage = '<div class="alert alert-danger">The Username is not existing</div>';
						

					} elseif (!in_array ($email, $usersEmail)) {

						$errorMessage = '<div class="alert alert-danger">The email is not existing</div>';

					} elseif (!in_array($password, $usersPassword)) {

						$errorMessage = '<div class="alert alert-danger">The Password is not existing</div>';

					} else {

						$welcomeMessage =  '<div>
																	
													<h1 class="fw-bold">Welcome Administrator</h1>


													<h3 class="fw-bold">Thanks for login</h3>


											</div>	

											<br>

											<div class="alert alert-success">Welcome Admin ' . $username .  '</div>';

											 
					}





				};




			?>



		<!-- End of Welcome Administrator LogIn Form PHP -->

		

		
		<!-- Administrator LogIn Form -->

		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-6 offset-md-3">

							<div class="header_content">


									<?php

										echo $errorMessage;
										echo $welcomeMessage;


									?>


							</div>	

					</div>
				</div>
			</div>
		</section>


		<!-- End of Administrator LogIn Form -->

			


		


		
		<!--Bootstrap jquery -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>


		<!--Bootstrap JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

	</body>
</html>





