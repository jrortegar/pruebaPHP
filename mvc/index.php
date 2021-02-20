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
    </script>

</head>


<input type="button" href="javascript:;" onclick="realizaProceso();return false;" value="Traer" />

<br />

<!--Resultado: <br><span id="resultado">0</span>
-->

<body>
    <div>
        <table id="resultado" border="1">
        </table>
    </div>

</body>

</html>