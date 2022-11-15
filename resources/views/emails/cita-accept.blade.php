<html>
    <head></head>
    <body>
        <h2>Felicidades tu cita fue aceptada</h2>
        <h3>Aquí un resumen:</h3>
            <p><strong>Agencia: </strong> {{ $agencia->nombre }}</p>
            <p><strong>Dirección: </strong> {{ $agencia->direccion }}</p>
            <p><strong>Teléfono: </strong> {{ $agencia->telefono }}</p>
            <p><strong>Horario: </strong> {{ $agencia->horario }}</p> <br>
            <p><strong>Tu nombre: </strong> {{ $cita->nombre }} {{ $cita->apellidos }}</p>
            <p><strong>Fecha y hora de tu cita: </strong> {{ $cita->date_cita }}</p>
            <p><strong>Notas del Dealer: </strong> {{ $cita->notas_dealer }}</p>
            
    </body>
</html>