
let id;
let id_marca;
let id_user;

$('#tabla-index-agency').on('click', '#btn-delete', function (event) {
    id = $(this).parents('tr').find('td:nth-child(1)').text();

}
);

$('#tabla-index-agency').on('click', '#btn-edit', function (event) {
    id = $(this).parents('tr').find('td:nth-child(1)').text();
}
);


$('#tabla-index').on('click', '#btn-delete', function (event) {
    id = $(this).parents('tr').find('td:nth-child(1)').text();

}
);

$('#tabla-index').on('click', '#btn-edit', function (event) {
    id = $(this).parents('tr').find('td:nth-child(1)').text();
}
);

function destroyAgencia() {

    $.ajax({
        url: "./agencias/destroy",
        type: 'GET',
        async: false,
        data: {
            id: id,
            "_token": $("meta[name='csrf-token']").attr("content")
        },
        success: function (response) {
            location.reload();
        },
        statusCode: {
            404: function () {
                alert('web not found');
            }
        },

    });

}

function recoverAgencia() {

    $.ajax({
        url: "./agencias/recover",
        type: 'GET',
        async: false,
        data: {
            id: id,
            "_token": $("meta[name='csrf-token']").attr("content")
        },
        success: function (response) {
            location.reload();
        },
        statusCode: {
            404: function () {
                alert('web not found');
            }
        },

    });

}





function deleteAgencia() {

    $.ajax({
        url: "./agencias/delete-temp",
        type: 'GET',
        async: false,
        data: {
            id: id,
            "_token": $("meta[name='csrf-token']").attr("content")
        },
        success: function (response) {
            location.reload();
        },
        statusCode: {
            404: function () {
                alert('web not found');
            }
        },

    });

}


//Enviar id al edit
function getId(params) {

    $.ajax({
        url: "./edit",
        type: 'GET',
        data: {
            id: id,
            "_token": $("meta[name='csrf-token']").attr("content")
        },
        success: function (response) {


        },
        statusCode: {
            404: function () {
                alert('web not found');
            }
        },

    });


}

$('#tabla-users').on('click', '#btn-delete-user', function (event) {
    id_user = $(this).parents('tr').find('td:nth-child(1)').text();

}
);

$('#tabla-users').on('click', '#btn-recover-user', function (event) {
    id_user = $(this).parents('tr').find('td:nth-child(1)').text();
}
);


function deleteUser() {

    $.ajax({
        url: "./usuarios-delete",
        type: 'get',
        async: false,
        data: {
            id: id_user,
            "_token": $("meta[name='csrf-token']").attr("content")
        },
        success: function (response) {
            location.reload();
        },
        statusCode: {
            404: function () {
                alert('web not found');
            }
        },

    });

}

function destroyUser() {

    $.ajax({
        url: "./usuarios-destroy",
        type: 'POST',
        async: false,
        data: {
            id: id_user,
            "_token": $("meta[name='csrf-token']").attr("content")
        },
        success: function (response) {
            location.reload();

        },
        statusCode: {
            404: function () {
                alert('web not found');
            }
        },

    });

}

function recoverUser() {

    $.ajax({
        url: "./usuarios-recover",
        type: 'POST',
        async: false,
        data: {
            id: id_user,
            "_token": $("meta[name='csrf-token']").attr("content")
        },
        success: function (response) {
            location.reload();

        },
        statusCode: {
            404: function () {
                alert('web not found');
            }
        },

    });

}







$('#tabla-marca').on('click', '#btn-delete-marca', function (event) {
    id_marca = $(this).parents('tr').find('td:nth-child(1)').text();

}
);

$('#tabla-marca').on('click', '#btn-recover-marca', function (event) {
    id_marca = $(this).parents('tr').find('td:nth-child(1)').text();
    console.log(id_marca);

}
);

function deleteMarcas() {

    $.ajax({
        url: "./marcas-delete",
        type: 'post',
        async: false,
        data: {
            id: id_marca,
            "_token": $("meta[name='csrf-token']").attr("content")
        },
        success: function (response) {
            location.reload();

        },
        statusCode: {
            404: function () {
                alert('web not found');
            }
        },

    });

}



function destroyMarca() {

    $.ajax({
        url: "./marcas-destroy",
        type: 'get',
        async: false,
        data: {
            id: id_marca,
            "_token": $("meta[name='csrf-token']").attr("content")
        },
        success: function (response) {
            location.reload();
        },
        statusCode: {
            404: function () {
                alert('web not found');
            }
        },

    });

}
function recoverMarca() {

    $.ajax({
        url: "./marcas-recover",
        type: 'GET',
        async: false,
        data: {
            id: id_marca,
            "_token": $("meta[name='csrf-token']").attr("content")
        },
        success: function (response) {
            location.reload();
        },
        statusCode: {
            404: function () {
                alert('web not found');
            }
        },

    });

}
