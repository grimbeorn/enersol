<html>

<head>
	<title> Nuevo Contacto</title>
</head>

<body>
	<p>Has recibido un nuevo e-mail, estos son los datos:</p>
	<ul>
		<li>
			<strong>Nombre: </strong>
			{{ $nombre }}
		</li>
		<li>
			<strong>Correo: </strong>
			{{ $correo }}
		</li>
		<li>
			<strong>Teléfono: </strong>
			{{ $telefono }}
		</li>
		<li>
			<strong>Mensaje: </strong>
			{{ $mensaje }}
		</li>
	</ul>
</body>

</html>