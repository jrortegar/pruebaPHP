<html>

<head>

    <title>PRUEBA</title>

    <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script>

    <script>
        function realizaProceso() {
            $.ajax({
                url: '../mvc/Controlador/control.php',
                type: 'get',
                beforeSend: function() {
                    $("#resultado").html("Procesando, espere por favor...");
                },
                success: function(response) {
                    $("#resultado").html(response);
                }
            });
        }

        function contarUsuarios() {
            $.ajax({
                url: '../mvc/Controlador/controlContador.php',
                type: 'get',
                success: function(response) {
                    var x = JSON.parse(response);
                    console.log(x,x["cuenta"]);
                    $("#respuesta").html(x["cuenta"]);
                }
            });
        }

    </script>

</head>




<br />

<!--Resultado: <br><span id="resultado">0</span>
-->

<body>
<input type="button" href="javascript:;" onclick="realizaProceso();return false;" value="Traer" />
    <div>
        <table id="resultado" border="1">
        </table>
    </div>

    <input type="button" href="javascript:;" onclick="contarUsuarios();return false;" value="Traer" />
    <div>
        <span id="respuesta"></span>
    </div>


</body>

</html>