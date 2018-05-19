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




function uploadCVForm() {
    $.ajax({
        url: "/backend/uploadCVFile.php", // Url to which the request is send
        type: "POST", // Type of request to be send, called as method
        data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false, // The content type used when sending data to the server.
        cache: false, // To unable request pages to be cached
        processData: false, // To send DOMDocument or non processed data file it is set to false
        success: function (data) // A function to be called if request succeeds
        {
            $('#loading').hide();
            $("#message").html(data);
        }
    });
}




$(".contactForm submit").click(function () {
    sendContactForm()
});

$("#spanUploadCV").click(function () {
    document.getElementById("#uploadCV").submit();
});



$("#uploadCV").on('submit', (function (e) {
            e.preventDefault();
            $.ajax({
                    url: "/backend/uploadCVFile2.php", // Url to which the request is send
                    type: "POST", // Type of request to be send, called as method
                    data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                    contentType: false, // The content type used when sending data to the server.
                    cache: false, // To unable request pages to be cached
                    processData: false, // To send DOMDocument or non processed data file it is set to false
                    success: function (data) // A function to be called if request succeeds
                    {
                        console.log(data)
                    }
            });
}));
            
