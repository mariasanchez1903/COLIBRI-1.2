<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contáctanos</title>

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

		<form action="index.php" method="POST" class="j-forms" id="j-forms" novalidate>

			<div class="header">
				<p>Contáctenos</p>
				
				<label   style="opacity:1.7; top:0px; right: 49px;" class="icon-right" for="email"> <a href="ingresar.php"><img src="j-folder/css/logo.jpg" width="89" height="89" alt=""/></a> </label>
			</div>
			<!-- end /.header-->

			<div class="content">
			<p>Visítanos: </p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7942.380101581419!2d-73.63303875828376!3d5.538809733967313!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb8f8e2bb14afcebc!2zQXJ0ZXNhbsOtYXMgQ29saWJyw60!5e0!3m2!1ses!2ses!4v1497415014930" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


				<!-- start name email -->
				<div class="j-row">
				<br>
				<p>Escríbenos: </p>
					<div class="span6 unit">
						<label class="label">Nombre</label>
						<div class="input">
							<label class="icon-right" for="name">
								<i class="fa fa-user"></i>
							</label>
							<input type="text" id="name" name="name">
						</div>
					</div>
					<div class="span6 unit">
						<label class="label">Email</label>
						<div class="input">
							<label class="icon-right" for="email">
								<i class="fa fa-envelope-o"></i>
							</label>
							<input type="email" id="email" name="email">
						</div>
					</div>
				</div>
				<!-- end name email -->

				<!-- start subject -->
				<div class="unit">
					<label class="label">Asunto</label>
					<div class="input">
						<label class="icon-right" for="subject">
							<i class="fa fa-tag"></i>
						</label>
						<input type="text" id="subject" name="subject">
					</div>
				</div>
				<!-- end subject -->
					<div class="unit">
					<label class="label">Teléfono</label>
					<div class="captcha-group">
						<div class="input">
							<label class="icon-right" for="captcha_code">
								<i class="fa fa-unlock-alt"></i>
							</label>
							<input type="text" id="telefono" name="telefono">
							<span class="tooltip tooltip-right-top">Ingrese solo números</span>
						</div>
						<label class="captcha" for="captcha_code">
					    <img src="j-folder/css/lo.png" width="90" height="48" alt=""/> </label>
					</div>
				</div>
				<!-- start textarea -->
				<div class="unit">
					<label class="label">Mensaje</label>
					<div class="input">
						<textarea spellcheck="false" name="message"></textarea>
					</div>
				</div>
				<!-- end textarea -->

				<!-- start captcha -->
				
				<!-- end captcha -->

			
				<div id="response"></div>
				<!-- end response from server -->

			</div>
			<!-- end /.content -->

			<div class="footer">
				<button type="submit" class="primary-btn">Enviar Mensaje</button>
			</div>
			<!-- end /.footer -->

		</form>
		
  <?php
         require('conexion.php');

		
        if (isset($_POST['name'])) 
{
           $fecha=date("Y-m-d H:i:s");
		 
               
            mysqli_query($conex,'INSERT INTO mensaje(nombre,email,asunto,telefono,mensaje, fecha_hora)
                VALUES("'.$_POST['name'].'",
                    "'.$_POST['email'].'",
                    "'.$_POST['subject'].'",
                    "'.$_POST['telefono'].'",
                    "'.$_POST['message'].'",
                    "'.$fecha.'"  )');
					
			
       					
   		echo '<script language="javascript">
				modal({
				type: "'.success.'",
				title: "'.Éxito.'",	
				text: "Mensaje enviado correctamente.",
				callback: function(result) {
					
					window.location.href="index.php";
				}
				
			});
			</script>';
					
        
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