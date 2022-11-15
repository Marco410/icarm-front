console.log("ASDSADASDASDASD");

$('#tabla-users').DataTable({
    responsive: true,
    "bFilter": true,
    "searching": true,
    dom: '<"row" <"col-sm-4" l> <"col-sm-4 offset-4" <"pull-right" f><"float-right" B> > >r<"mt-30" t><"row mt-30" <"col-sm-5" i> <"col-sm-7" p> >',
    buttons: [
        {
            extend: 'excel',
            className: 'btn btn-sm btn-success ',
            exportOptions: {
                columns: ':not(:last-child)',
            },
            init: function (api, node, config) {
                $(node).removeClass('dt-button');
            }
        },
    ]
});

$('div.dataTables_filter input').removeClass('form-control-sm');

$('#asistencia').on('click', function () {

    var notyf = new Notyf({
        duration: 2000,
        position: {
            x: 'center',
            y: 'top',
        },
        types: [
            {
                type: 'warning',
                background: 'orange',
                icon: {
                    className: 'material-icons',
                    tagName: 'i',
                    text: 'warning'
                }
            },
            {
                type: 'error',
                duration: 3000,
                dismissible: true
            },
            {
                type: 'success',
                duration: 3000,
                dismissible: true
            }
        ]
    });

    var countAsis = parseInt($("#asistencia" + $("#alumno_id").val()).text());

    $.ajax({
        url: "./alumnos-asistencia",
        type: 'POST',
        data: {
            alumno_id: $("#alumno_id").val(),
            "_token": $("meta[name='csrf-token']").attr("content")
        },
        success: function (response) {

            if (response) {
                if (response.listo) {
                    notyf.open({
                        type: 'warning',
                        message: 'Ya se le paso lista el día de hoy'
                    });
                } else {
                    notyf.open({
                        type: 'success',
                        message: 'Éxito, asistencia completa.'
                    });

                    countAsis += 1;

                    $("#asistencia" + $("#alumno_id").val()).html(countAsis);
                }

                $("#asistenciaModal").modal('hide');
            }

        }

    });
});


$('#editar-alumno').on('click', function () {

    var notyf = new Notyf({
        duration: 2000,
        position: {
            x: 'center',
            y: 'top',
        },
        types: [
            {
                type: 'warning',
                background: 'orange',
                icon: {
                    className: 'material-icons',
                    tagName: 'i',
                    text: 'warning'
                }
            },
            {
                type: 'error',
                duration: 3000,
                dismissible: true
            },
            {
                type: 'success',
                duration: 3000,
                dismissible: true
            }
        ]
    });

    $.ajax({
        url: "./alumno-editar",
        type: 'POST',
        data: {
            alumno_id: $("#alumno_id_update").val(),
            nombre_update: $("#nombre_update").val(),
            apellido_p_update: $("#apellido_p_update").val(),
            apellido_m_update: $("#apellido_m_update").val(),
            fecha_nacimiento_update: $("#fecha_nacimiento_update").val(),
            telefono_update: $("#telefono_update").val(),
            "_token": $("meta[name='csrf-token']").attr("content")
        },
        success: function (response) {
            if (response == 1) {
                notyf.open({
                    type: 'success',
                    message: 'Éxito, se edito correctamente.'
                });

                $("#editarModal").modal('hide');

                setTimeout(function () {
                    location.reload();
                }, 2000);
            }
        }
    });
});

