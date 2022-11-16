

if($('#estados')[0]){

    let estado_id = $('#estados').val();
    getMunicipios(estado_id);
}

$('#estados').on('change', function () {
    estado_id = document.getElementById("estados").value;
    getMunicipios(estado_id);
});


function getMunicipios(estado) {
    $.ajax({
        url: "./edit/show-municipios",
        type: 'GET',
        data: {
            estado: estado,
            "_token": $("meta[name='csrf-token']").attr("content")
        },
        success: function (response) {
            showMunicipios(response);

        },
        statusCode: {
            404: function () {
                alert('web not found');
            }
        },

    });
}


const municipio = $('#ciudades');

function showMunicipios(municipios) {

    let arrayMunicipios = JSON.parse(municipios);

    $('#ciudades option').remove();

    arrayMunicipios.map(item => {
        municipio.append(`<option value =${item.id}>${item.municipio}</option>`);
    })

}
