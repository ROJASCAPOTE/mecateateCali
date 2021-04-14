function usuario() {
    $("#contenido_principal").on("click", "button#actualizar", function () {
        var datos = $("#fusuario-cliente").serialize();
    });

    $(".box").on("click", "#nuevo", function () {
        $(this).hide();
        $(".box-title").html("Crear Usuario");
        $("#editar").addClass('show');
        $("#editar").removeClass('hide');
        $("#listaUsuarios").addClass('hide');
        $("#listaUsuarios").removeClass('show');
        $("#editar").load('Views/usuario/registro.php', function () {
            $.ajax({
                type: "get",
                url: "",
                data: {accion: 'listar'},
                dataType: "json"
            }).done(function (resultado) {
                ;
                $.each(resultado.data, function (index, value) {
                    $("#editar #id_sede").append("<option value='" + value.id_sede + "'>" + value.nom_sede + "</option>")
                });
            });
        });

    })
}

