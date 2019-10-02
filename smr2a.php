<center>
Pablo
<br>
</center>
<br>
<br>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,date('Y-m-d H:i:s '));
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,"\r\n");
?>

<?php
if(isset($_GET['correo'])){
	$f=fopen('suscriptores.txt','a');
	fwrite($f,$_GET['correo']);
	fwrite($f,"\r\n");
}
?>


<a href="http://192.168.0.123/smr2a_pablo/catalogo.php"    >Listado compañeros</a> <br>

<br>
<a href="http://192.168.0.106/smr2a_anabella/smr2a.php">Anabella</a>
<br>
<a href="http://192.168.0.121/smr2a_jonander/smr2a.php">Jonander</a>

<html>
<body>
<center>
<h1>FORMULARIO</h1>
<form>
	<p>
		Correo electronico: <input type="email" name="correo">
	</p>
	<button>Enviar la informacion</button>
</form>

</html>
</center>


