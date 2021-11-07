<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Agronegocios San Francisco</title>
</head>
<body>
    <p>Estimado {{ $name }} muchas gracias por comunicarse con nosotros.</p>
    <p>Estaremos en contacto con Usted a la brevedad para poder ofrecer nuestros servicios teneindo en cuenta vuestros datos:</p>
    <ul>
        <li>Nombre: {{ $name }}</li>
        <li>Email: {{ $email }}</li>
        <li>Telefono: {{ $phone }} </li>
        <li>Subject: {{ $subject }} </li>
        <li>Mensaje: {{ $user_query }} </li>        
    </ul>
    <p>Muchas Gracias</p>
</body>
</html>