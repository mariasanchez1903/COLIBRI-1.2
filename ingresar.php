<?php
  require('conexion.php');
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>

	<!-- Your META here -->
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="j-folder/css/demo.css">
	<link rel="stylesheet" href="j-folder/css/font-awesome.min.css">
	<link rel="stylesheet" href="j-folder/css/j-forms.css">
	
	
	  <link href="alerts/css/jquery.modal.css" type="text/css" rel="stylesheet" />

	<!--jQuery-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="alerts/js/jquery.modal.js"></script>

</head>
<body class="bg-pic">
	<div class="wrapper wrapper-640">

<form action="ingresar.php" method="POST" class="j-forms" id="j-forms" novalidate>

			<div class="header">
				<p>LOGIN</p>
				
				<label   style="opacity:1.7; top:0px; right: 49px;" class="icon-right" for="email"> <a href="index.php"><img src="j-folder/css/logo.jpg" width="89" height="89" alt=""/></a> </label>
			</div>
			<!-- end /.header-->

			<div class="content">
			

				<!-- start name email -->
				<!-- start login -->
				<div class="unit">
					<div class="input">
						<label class="icon-left" for="login">
							<i class="fa fa-user"></i>
						</label>
						<input type="text" id="email" name="email" placeholder="Usuario">
					</div>
				</div>
				<!-- end login -->

				<!-- start password -->
				<div class="unit">
					<div class="input">
						<label class="icon-left" for="password">
							<i class="fa fa-lock"></i>
						</label>
						<input type="password" id="password" name="password" placeholder="Contraseña">
						<span class="hint">
							<a href="#" class="link">Olvido Password?</a>
						</span>
					</div>
				</div>
				<!-- end password -->
			

				<!-- end textarea -->

				<!-- start captcha -->
				
				<!-- end captcha -->

			
				<div id="response"></div>
				<!-- end response from server -->

			</div>
			<!-- end /.content -->

			<div class="footer">
				<button type="submit" class="primary-btn">Ingresar</button>
			</div>
			<!-- end /.footer -->

		</form>
  <?php
       
				 if (isset ($_POST['email']))
			 {
				  $consulta= mysqli_query($conex, "SELECT id ,concat(nombre, ' ' , apellido) as nombre_completo FROM login
				  where email='".$_POST['email']."' and contrasena ='".$_POST['password']."'");
				  $assoc = mysqli_fetch_array($consulta);
				  $num=mysqli_num_rows($consulta);


				  $_SESSION['id']=$assoc[0];
				  $_SESSION['usu']=$assoc[1];
	  

				  if ($num!=0)
				  	{
						echo '<meta http-equiv="refresh" content="0;URL=listado.php">';

				  }else {
				echo '<script language="javascript">
				modal({
				type: "'.warning.'",
				title: "'.Advertencia.'",	
				text: "Usuario y/o contraseña incorrectos",
				callback: function(result) {
					
					window.location.href="ingresar.php";
				}
			});
			</script>';
				  }
			 }
		?>
	</div>

	<!-- Scripts -->
	<script src="j-folder/js/jquery.1.11.1.min.js"></script>
	<script src="j-folder/js/jquery.validate.min.js"></script>
	<script src="j-folder/js/jquery.form.min.js"></script>
	<script src="j-folder/js/additional-methods.min.js"></script>
	<script src="j-folder/js/j-forms.min.js"></script>

	<!--[if lt IE 10]>
			<script src="j-folder/js/jquery.placeholder.min.js"></script>
		<![endif]-->

</body>
</html>