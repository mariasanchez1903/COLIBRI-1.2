
<?php
	session_start();

if ($_SESSION['usu']==""){
echo '<meta http-equiv="refresh" content="0;URL=ingresar.php">';
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Listado</title>
<meta name="description" content="Responsive tables design with CSS and jQuery">
<meta name="author" content="Gary Hepting">
<meta name="revisit-after" content="30 days">
<meta name="robots" content="index, follow" >
<link rel="stylesheet" href="listado/jquery-responsive-tables.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="jquery-1.10.2.min.js" type="text/javascript"><\/script>')</script>
<script type="text/javascript" src="j-folder/js/jquery-responsiveTables.js"></script>
<script type="text/javascript" src="j-folder/js/jquery.responsiveText.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
        $('.responsive').not('table').responsiveText();
        $('table.responsive').responsiveTables();
      });
    </script>
<link href='http://fonts.googleapis.com/css?family=Pacifico|Average+Sans' rel='stylesheet' type='text/css'>
<style type="text/css">
body {
margin: 0;
padding: 20px;
font-family: 'Average Sans', sans-serif;
font-size: 16px;
font-weight: normal;
line-height: 1.5;
background: #69b88b;
color: #fff;
text-shadow: 2px 2px 2px #3F6558;
}
a, a:link, a:visited {
color: #fff;
text-decoration: none;
border-bottom: 1px dashed #3F6558;
-webkit-transition: border-color 0.3s ease-in;
}
a:hover, a:focus {
border-bottom: 1px dashed #fff;
}
h1, h2, h3, p {
text-align: center;
}
h1, h2, h3 {
padding: 0 0.1em;
}
h1[data-scrollable] {
line-height: 1.85;
}
.heading {
margin-top: 0.25em;
font-family: 'Pacifico', sans-serif;
text-shadow: 0.1em 0.1em 2px #3F6558;
}
.subheading {
font-weight: normal;
}
.button {
margin: 2em 0;
}
.button a {
background: #3F6558;
padding: 0.4em 1em;
border: none;
border-radius: 10px;
}
.clearfix {
clear: both;
}
.space {
margin: 5em 0;
}
table {
border: 1px solid #3F6558;
margin-bottom: 20px;
}
thead tr th {
background: #3F6558;
}
th, td {
padding: 0 10px;
}
tbody th, tbody td {
border: 1px solid #3F6558;
}
</style>
</head>
<body>

<h2 class="subheading responsive" data-compression="25" data-min="14" data-max="40">Mensajes Recibidos</h2>
<div class="clearfix space"><p>Bienvanido <?php echo $_SESSION['usu'];?> </p></div>
<table class="responsive" data-min="11" data-max="30" cellpadding="0" cellspacing="0">
<thead>
<tr>
<th valign="middle">Nombre</th>
<th valign="middle">Email</th>
<th valign="middle">Asunto</th>
<th valign="middle">Celular</th>
<th valign="middle">Mensaje</th>
<th valign="middle">Fecha</th>
</tr>
</thead>
<tbody>
	<?php
         require('conexion.php');

			$sql = "SELECT * from mensaje";
				  $query = mysqli_query($conex, $sql);
  
				?>
	<?php while($fetch = mysqli_fetch_assoc($query)) { ?>

<tr>
<th valign="middle"><?php echo $fetch["nombre"]; ?></th>
<td valign="middle"><?php echo $fetch["email"]; ?></td>
<td valign="middle"><?php echo $fetch["asunto"]; ?></td>
<td valign="middle"><?php echo $fetch["telefono"]; ?></td>
<td valign="middle"><?php echo $fetch["mensaje"]; ?></td>
<td valign="middle"><?php echo $fetch["fecha_hora"]; ?></td>
</tr>
	<?php } ?>
</tbody>
</table>
<div align="center"><div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div></div>
<h3 class="button responsive" data-compression="25" data-min="12" data-max="30"><a href="salir.php">Salir</a></h3>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
