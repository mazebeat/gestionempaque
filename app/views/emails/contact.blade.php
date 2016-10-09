<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Contact Form</h2>
<h5>Someone just contacted us:</h5>
<div> User: {{ $user }}</div>
<div> Subject: {{ $subject }}</div>
<div> Message: <p>{{ $text }}</p></div>
</body>
</html>