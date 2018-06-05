function checkForm(parameters) {
    var results = {
        name: false,
        email: false,
        phone: false,
        message: false
    };

    if (parameters.name) {
        results["name"] = true;
    }
    if (parameters.email.indexOf("@") !== -1) {
        results["email"] = true;
    }
    if (!isNaN(parameters.phone)) {
        results["phone"] = true;
    }
    if (parameters.message) {
        results["message"] = true;
    }


    return results;


}
var GlobalFormData;

function sendContactForm() {

    var nNombre = $("#nameInput").val();
    var nEmail = $("#emailInput").val();
    var nPhone = $("#phoneInput").val();
    var nMessage = $("#messageInput").val();

    var parametros = {
        "name": nNombre,
        "email": nEmail,
        "phone": nPhone,
        "message": nMessage

    };

    var p = checkForm(parametros);

    if (true) {
        $.ajax({
            data: parametros, //datos que se envian a traves de ajax
            url: '/backend/processFormAdmissions.php', //archivo que recibe la peticion
            type: 'post', //método de envio
            beforeSend: function () {
                $(".contactForm submit").text("Enviando ... ");
            },
            success: function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve


                $(".contactForm submit").text("Enviado");

                setTimeout(function () {
                    $(".contactForm submit").text("Enviar");
                    $("#nameInput").val("");
                    $("#emailInput").val("");
                    $("#phoneInput").val("");
                    $("#messageInput").val("");
                }, 2500);
                console.log("Respuesta : ");
                console.log(response);
            }
        });

    } else {
        console.error("Error checking form");
        console.table(p)
    }




}








$(".contactForm submit").click(function () {
    sendContactForm()
});
var FormUpCVEnable = true;

$("#spanUploadCV").click(function (e) {

    if (FormUpCVEnable) {
        FormUpCVEnable = false;
        $("#uploadCV").trigger('submit');
    }
});


$("#uploadCV").on('submit', (function (e) {
    e.preventDefault();
    $("#file").change(function (e) {
        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file', files);

        $.ajax({
            url: 'http://dev.colegiotecnologicodesuba.edu.co/backend/uploadCVFile2.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            beforeSend: function () {
                console.log("Submitting ... ");
                $("#spanUploadCV span").html("Subiendo ... ");
            },
            success: function (response) {
                console.log(response)
                if (response.status == "OK") {
                    $("#spanUploadCV span").html("Archivo enviado exitosamente");
                    setTimeout(function () {
                        $("#spanUploadCV span").html("SUBE TU HOJA DE VIDA");
                    }, 3000);
                } else {
                    $("#spanUploadCV span").html("CV Subido Exitosamente");
                    setTimeout(function () {
                        $("#spanUploadCV span").html("SUBE TU HOJA DE VIDA");
                    }, 3000);
                    console.log("Response with some error");
                    console.log(response);
                }
                FormUpCVEnable = true;

            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
                FormUpCVEnable = true;
            }
        });
    });


}));
