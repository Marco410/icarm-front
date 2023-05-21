<html>

<head></head>

<body>
    <h2> {{ $user->name }} Gracias por registrarte en A&R</h2>
    @if ($user->verify == 0)
        <p>Verifica tu cuenta <a href="{{ route('admin.verificar-email', $user->email) }}">Da Clic aquí</a> </p>
    @endif
</body>

</html>
