<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mensaje enviado</title>
</head>
<body>
	<p>Recibiste un mensaje de: {{ $msg['name'] }}</p>
	<p><strong>Correo:</strong> {{ $msg['email'] }}</p>
	<p><strong>Asunto:</strong> {{ $msg['subject'] }}</p>
	<p><strong>Contenido:</strong> {{ $msg['content'] }}</p>
</body>
</html>