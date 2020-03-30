<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php require_once "scripts.php";?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card text-left">
                        <div class="card-header">
                            Tablas Dinamicas con DataTable y PHP
                        </div>
                        <div class="card-body">
                           <span class="btn btn-primary">Agregar nuevo</span>
                           <hr>
                           <div id="tablaDatatable"></div>
                        </div>
                        <div class="card-footer text-muted">
                            By VHNGROUP
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>

<script tipe="text/javascript">
$(document).ready(function(){
    $('#tablaDatatable').load('tabla.php');
});
</script>