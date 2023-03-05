

console.log("ASDASD");

var español = {
    "sProcessing": "Procesando...",
    "sLengthMenu": "Mostrar _MENU_ registros",
    "sZeroRecords": "No se encontraron resultados",
    "sEmptyTable": "Ningún dato disponible en esta tabla",
    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix": "",
    "sSearch": "Buscar:",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
};

var table = $('#main-table').DataTable({
    columnDefs: [
        { responsivePriority: 1, targets: 1 },
        { responsivePriority: 2, targets: 6 },
        { responsivePriority: 3, targets: 3 },
        { responsivePriority: 4, targets: 4 },
    ],
    order: [0, 'des'],
    language: español,
    dom: '<"row" <"col-sm-4" l> <"col-sm-8" <"pull-right ml-15" B><"pull-right" f> > >r<"mt-30" t><"row mt-30" <"col-sm-5" i> <"col-sm-7" p> >',
    buttons: [
        {
            extend: 'excel',
            className: 'btn btn-success',
            exportOptions: {
                columns: ':not(:last-child)',
            },
            init: function (api, node, config) {
                $(node).removeClass('dt-button');
            }
        },
        {
            text: 'Nuevo Paciente',
            className: 'btn btn-primary',
            action: function (e, dt, node, config) {
                window.location.href = 'pacientes/nuevo'
            },
            init: function (api, node, config) {
                $(node).removeClass('dt-button');
            }
        }
    ],
    ajax: {
        type: "get",
        url: "pacientes/getxMxQ",
    },

    columns: [
        { "data": "id" },
        { "data": "clave_bancaria" },
        { "data": "nombre" },
        { "data": "email" },
        { "data": "motivo_consulta" },
        { "data": "estado" },
        { "data": "municipio" },
        { "data": "telefono_a" },
        { "defaultContent": "<button id='btn-historia' class='btn-historia btn btn-sm btn-info '><i class='fa fa-file-text-o'></i></button><button id='btn-editar' class='btn-editar btn btn-sm btn-warning '><i class='fa fa-edit'></i></button>" }
    ],
});

$("#main-table").on("click", "#btn-historia", function () {
    var data = table.row($(this).parents("tr")).data();
    window.location.href = base_url + "pacientes/historia/" + data.id;

});

$("#main-table").on("click", "#btn-editar", function () {
    var data = table.row($(this).parents("tr")).data();
    window.location.href = base_url + "pacientes/editar/" + data.id;

});

$('#main-table').on('click', 'tbody tr td', function () {
    var data = table.row($(this).parents("tr")).data();
    iziToast.info({
        timeout: 2000,
        title: 'Copiado',
        position: 'center',
        message: '' + data.clave_bancaria,
    });
    var aux = document.createElement("input");
    aux.setAttribute("value", data.clave_bancaria);
    document.body.appendChild(aux);
    aux.select();
    document.execCommand('copy');
    aux.setAttribute("type", "hidden");

});






