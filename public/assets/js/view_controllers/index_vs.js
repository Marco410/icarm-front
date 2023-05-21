$('#btn_search,#btn_star',).on("click", function () {
    if ($('#search-box').is(':visible')) {
        $("#search-box").hide("slow");
    } else {
        $("#search-box").show("slow");
    }
});

$("#btn-save-contacto").on('click', function () {
    var notyf = new Notyf({
        duration: 2000,
        position: {
            x: 'right',
            y: 'top',
        },
        types: [
            {
                type: 'error',
                duration: 3000,
                dismissible: true
            },
            {
                type: 'success',
                duration: 2000,
                dismissible: true
            }
        ]
    });

    console.log("ASD");

    $.ajax({
        type: 'POST',
        url: 'send-contact/',
        headers: {
            'Content-Type': 'application/json'
        },
        success: function (data) {
            var res = JSON.parse(data);

            console.log("data");
            console.log(data);


            notyf.open({
                type: 'success',
                message: 'Mensaje enviado con éxito'
            });

            /* setTimeout(function () {
                location.reload();
            }, 3000); */

        }
    });
});

