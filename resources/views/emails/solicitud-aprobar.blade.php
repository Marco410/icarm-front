<html>
    <head></head>
    <body>
        <h2> {{ $solicitud->nombre }} {{ $solicitud->apellido_p }} gracias por tu solicitud en AutoNavega®</h2>
        <h3><strong>Membresía: </strong> {{ $solicitud->membresia }}</h3>
        <p>Tu solicitud ya fue revizada. Y la aprobamos.</p>
        <p><strong>Datos de acceso:</strong> </p>
        <p><strong>Usuario:</strong>{{ $user->email }}</p>
        <p><strong>Contraseña:</strong> {{ $user->pass }}</p>
        <p>Muchas gracias por tu interés</p>

        <h3>Resumen de tus datos de registro:</h3>
        <h4>Datos de Contacto</h4> <br>
        <p><strong>Nombre: </strong> {{ $solicitud->nombre }} {{ $solicitud->apellido_p }} {{ $solicitud->apellido_m }}</p>
        <p><strong>Email: </strong> {{ $solicitud->email }}</p>
        <p><strong>Teléfono: </strong> {{ $solicitud->telefono }}</p>
        <p><strong>Empresa: </strong> {{ $solicitud->empresa }}</p>
        <p><strong>Empresa: </strong> {{ $solicitud->empresa }}</p>
        <p><strong>Puesto: </strong> {{ $solicitud->puesto }}</p>
        <h4>Datos de la Concesionaria</h4> <br>
        <p><strong>Razón Social: </strong> {{ $solicitud->razon_social }}</p>
        <p><strong>ACTA CONSTITUTIVA:</strong></p>
        <p><strong>Número de Instrumento: </strong> {{ $solicitud->no_instrumento }}</p>
        <p><strong>Volumen del acta: </strong> {{ $solicitud->acta_volumen }}</p>
        <p><strong>Fecha de celebración: </strong> {{ $solicitud->acta_fecha }}</p>
        <p><strong>Localidad: </strong> {{ $solicitud->acta_localidad }}</p>
        <p><strong>Número de Notario: </strong> {{ $solicitud->acta_numero }}</p>
        <p><strong>Datos de inscripción ante el R.P.C.: </strong> {{ $solicitud->acta_datos }}</p>
        <p><strong>R.F.C.:</strong></p>
        <p><strong>Número de Instrumento: </strong> {{ $solicitud->rfc_numero }}</p>
        <p><strong>Volumen: </strong> {{ $solicitud->rfc_volumen }}</p>
        <p><strong>Fecha de Celebración: </strong> {{ $solicitud->rfc_fecha }}</p>
        <p><strong>Domicilio: </strong> {{ $solicitud->rfc_localidad }}</p>
        <p><strong>Teléfono: </strong> {{ $solicitud->rfc_telefono }}</p>
        <p><strong>Email RFC: </strong> {{ $solicitud->rfc_email }}</p>
        <h4>Documentación</h4> <br>
        <p><strong>INE: </strong> <img class="img-fluid desk" width="25px" src="{{ asset('assets/landing/check.png') }}" alt="check Autonavega"></p>
        <p><strong>Acta constitutiva de la empresa: </strong> <img class="img-fluid desk" width="25px" src="{{ asset('assets/landing/check.png') }}" alt="check Autonavega"></p>
        <p><strong>Identificación del apoderado legal: </strong> <img class="img-fluid desk" width="25px" src="{{ asset('assets/landing/check.png') }}" alt="check Autonavega"></p>
        <p><strong>Poder Notarial: </strong> <img class="img-fluid desk" width="25px" src="{{ asset('assets/landing/check.png') }}" alt="check Autonavega"></p>
        <p><strong>Hoja de Registro del R.F.C.: </strong> <img class="img-fluid desk" width="25px" src="{{ asset('assets/landing/check.png') }}" alt="check Autonavega"></p>
        <p><strong>Comprobante de domicilio: </strong> <img class="img-fluid desk" width="25px" src="{{ asset('assets/landing/check.png') }}" alt="check Autonavega"></p>

    </body>
</html>