<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Demystifying Email Design</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
  <h1>Contacto creado</h1>
  <h2>Datos del contacto</h2>
  <p><strong>Nombre:</strong> {{ $contacto->nombre }}</p>
  <p><strong>Correo:</strong> {{ $contacto->correo }}</p>
  <p><strong>Teléfono:</strong> {{ $contacto->telefono }}</p>
  <p><strong>Comentarios:</strong> {{ $contacto->comentarios }}</p>
</body> 
</html>