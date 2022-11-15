<html>
    <head></head>
    <body>
        <h2>Gracias por registrarte</h2>
        <p>Ahora verifica tu correo electrónico en el siguiente enlace</p>
        <p>{{ $email }}</p>

        <h4> <a href="{{ route('admin.verificar-email',$email) }}">Da Clic aquí</a> </h4>
    </body>
</html>