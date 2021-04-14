function Inicio() {
    $("#opciones a").click(function (e) {
        e.preventDefault();
        var url = $(this).attr("href");
        $.post(url, function (resultado) {
            if (url != "#")
                $("#contenido_principal").removeClass("hide");
            $("#contenido_principal").addClass("show");
            $("#contenido").html(resultado);
        });
    });
}
