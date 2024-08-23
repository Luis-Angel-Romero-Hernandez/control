<!-- CONTENT-HEADER -->
<section class="content-header">


    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Monitor</h1>
            </div>

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>

                    <li class="breadcrumb-item active">Monitor</li>
                </ol>

            </div>
        </div>
    </div>

</section>
<!-- /. CONTENT HEADER -->

<!-- CONTENT -->
<section class="content">

    <div class="container-fluid">

        <div class="btn-agregar-monitor btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-monitor" data-dismiss="modal"> <i class="fas fa-plus-square"></i> Agregar Monitor</button>
        </div>

        <table id="tablaMonitor" class="table table-striped table-bordered nowrap" style="width:100%;">
            <thead class="bg-info">
                <tr>
                    <td style="width: 5%;">ID</td>
                    <td style="width: 5%;">Inventario</td>
                    <td>Conector</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>Serie</td>
                    <td>Tamaño</td>
                    <td>Fecha</td>
                    <td>Precio</td>
                    <td style="width: 10%;">Estado</td>
                    <td style="width: 5%;">Acciones</td>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

    </div>

</section>
<!-- ./ CONTENT -->

<!-- VENTANA MODAL PARA REGISTRO Y ACTUALIZACION -->
<div class="modal fade" id="modal-gestionar-monitor">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <!-- ============================================================
            =MODAL HEADER
            ===============================================================-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Agregar Monitor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- ============================================================
            =MODAL BODY
            ===============================================================-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="hidden" id="idMonitor" name="monitor" value="">
                            <label for="txtinv">Numero de inventario</label>
                            <input type="text" class="form-control" name="txtinv" id="txtinv" placeholder="Ingrese el numero de inventario">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtconector">Tipo de conector</label>
                            <input type="text" class="form-control" name="txtconector" id="txtconector" placeholder="Ingrese el tipo de conector">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtmarca">Marca</label>
                            <select name="txtmarca" id="txtmarca" class="form-control select2bs4">
                                <option value="">Selecciona:</option>
                                <?php
                                require_once "/xampp/htdocs/control/modelos/conexion.php";
                                $cone = Conexion::conectar();
                                $sql = "SELECT idmarca,nombre FROM marca";
                                $stmt = $cone->prepare($sql);
                                $resultado = $stmt->execute();
                                $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                                foreach ($row as $row) {
                                ?>
                                    <option value="<?php print($row->idmarca) ?>"><?php print($row->idmarca . ".- " . $row->nombre) ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtmodelo">Modelo</label>
                            <input type="text" class="form-control" name="txtmodelo" id="txtmodelo" placeholder="Ingrese el modelo">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtserie">Numero de serie</label>
                            <input type="text" class="form-control" name="txtserie" id="txtserie" placeholder="Ingrese el numero de serie">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtpulgadas">Tamaño de pantalla</label>
                            <input type="text" class="form-control" name="txtpulgadas" id="txtpulgadas" placeholder="Ingrese el tammaño de pantalla">
                        </div>
                    </div>
                    <!-- <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtfecha">Fecha</label>
                            <input type="date" class="form-control" name="txtfecha" id="txtfecha" placeholder="Ingrese la fecha">
                        </div>
                    </div> -->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtprecio">Precio</label>
                            <input type="text" class="form-control" name="txtprecio" id="txtprecio" placeholder="Ingrese el precio">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ddlEstado">Estado</label>
                            <select name="estado" id="ddlEstado" class="form-control select2bs4">
                                <option value="">Selecciona:</option>
                                <option value="1">En Uso</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                   </div>
                </div>
            </div>
            <!-- ============================================================
            =MODAL FOOTER
            ===============================================================-->
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>
            </div>

        </div>

    </div>

</div>
<!-- ./ VENTANA MODAL PARA REGISTRO Y ACTUALIZACION -->

<script>
    $(document).ready(function() {

        var accion = "";

        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        var table = $("#tablaMonitor").DataTable({
            "ajax": {
                "url": "ajax/monitor.ajax.php",
                "type": "POST",
                "dataSrc": ""
            },
            "columnDefs": [               {
                    "targets": 3,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        <?php
                        require_once "/xampp/htdocs/control/modelos/conexion.php";
                        $cone = Conexion::conectar();
                        $sql = "SELECT idmarca,nombre FROM marca";
                        $stmt = $cone->prepare($sql);
                        $resultado = $stmt->execute();
                        $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                        foreach ($row as $row) {
                        ?>
                            if (data == <?php print($row->idmarca) ?>) {
                                return "<div'><?php print($row->nombre) ?></div> "
                            }
                        <?php
                        }
                        ?>

                    }
                }, {
	            		"targets": 9,
	            		"sortable": false,
	            		"render": function (data, type, full, meta){

	            			if(data == 1){
								return "<div class='bg-primary color-palette text-center'>EN USO</div> " 
	            			}else{
								return "<div class='bg-danger color-palette text-center'>INACTIVO</div> " 
	            			}
	            			
	            		}
	            	},{
                "targets": 10,
                "sortable": false,
                "render": function(data, type, full, meta) {
                    return "<center>" +
                        "<button type='button' class='btn btn-primary btn-sm btnEditar' data-toggle='modal' data-target='#modal-gestionar-monitor'> " +
                        "<i class='fas fa-pencil-alt'></i> " +
                        "</button> " +
                        "<button type='button' class='btn btn-danger btn-sm btnEliminar'> " +
                        "<i class='fas fa-trash'> </i> " +
                        "</button>" +
                        "</center>";
                }
            }],
            "columns": [{
                    "data": "idmonitor"
                },
                {
                    "data": "numero_inventario"
                },
                {
                    "data": "tipo_conector"
                },
                {
                    "data": "idmarca"
                },
                {
                    "data": "modelo"
                },
                {
                    "data": "numero_serie"
                },
                {
                    "data": "pulgadas"
                },
                {
                    "data": "fecha_adquisicion"
                },
                {
                    "data": "precio"
                },
                {
                    "data": "estado"
                },
                {
                    "data": "acciones"
                }
            ],

            "language": {
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "infoThousands": ",",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad",
                    "collection": "Colección",
                    "colvisRestore": "Restaurar visibilidad",
                    "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                    "copySuccess": {
                        "1": "Copiada 1 fila al portapapeles",
                        "_": "Copiadas %d fila al portapapeles"
                    },
                    "copyTitle": "Copiar al portapapeles",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength": {
                        "-1": "Mostrar todas las filas",
                        "1": "Mostrar 1 fila",
                        "_": "Mostrar %d filas"
                    },
                    "pdf": "PDF",
                    "print": "Imprimir"
                },
                "autoFill": {
                    "cancel": "Cancelar",
                    "fill": "Rellene todas las celdas con <i>%d<\/i>",
                    "fillHorizontal": "Rellenar celdas horizontalmente",
                    "fillVertical": "Rellenar celdas verticalmentemente"
                },
                "decimal": ",",
                "searchBuilder": {
                    "add": "Añadir condición",
                    "button": {
                        "0": "Constructor de búsqueda",
                        "_": "Constructor de búsqueda (%d)"
                    },
                    "clearAll": "Borrar todo",
                    "condition": "Condición",
                    "conditions": {
                        "date": {
                            "after": "Despues",
                            "before": "Antes",
                            "between": "Entre",
                            "empty": "Vacío",
                            "equals": "Igual a",
                            "notBetween": "No entre",
                            "notEmpty": "No Vacio",
                            "not": "Diferente de"
                        },
                        "number": {
                            "between": "Entre",
                            "empty": "Vacio",
                            "equals": "Igual a",
                            "gt": "Mayor a",
                            "gte": "Mayor o igual a",
                            "lt": "Menor que",
                            "lte": "Menor o igual que",
                            "notBetween": "No entre",
                            "notEmpty": "No vacío",
                            "not": "Diferente de"
                        },
                        "string": {
                            "contains": "Contiene",
                            "empty": "Vacío",
                            "endsWith": "Termina en",
                            "equals": "Igual a",
                            "notEmpty": "No Vacio",
                            "startsWith": "Empieza con",
                            "not": "Diferente de"
                        },
                        "array": {
                            "not": "Diferente de",
                            "equals": "Igual",
                            "empty": "Vacío",
                            "contains": "Contiene",
                            "notEmpty": "No Vacío",
                            "without": "Sin"
                        }
                    },
                    "data": "Data",
                    "deleteTitle": "Eliminar regla de filtrado",
                    "leftTitle": "Criterios anulados",
                    "logicAnd": "Y",
                    "logicOr": "O",
                    "rightTitle": "Criterios de sangría",
                    "title": {
                        "0": "Constructor de búsqueda",
                        "_": "Constructor de búsqueda (%d)"
                    },
                    "value": "Valor"
                },
                "searchPanes": {
                    "clearMessage": "Borrar todo",
                    "collapse": {
                        "0": "Paneles de búsqueda",
                        "_": "Paneles de búsqueda (%d)"
                    },
                    "count": "{total}",
                    "countFiltered": "{shown} ({total})",
                    "emptyPanes": "Sin paneles de búsqueda",
                    "loadMessage": "Cargando paneles de búsqueda",
                    "title": "Filtros Activos - %d"
                },
                "select": {
                    "1": "%d fila seleccionada",
                    "_": "%d filas seleccionadas",
                    "cells": {
                        "1": "1 celda seleccionada",
                        "_": "$d celdas seleccionadas"
                    },
                    "columns": {
                        "1": "1 columna seleccionada",
                        "_": "%d columnas seleccionadas"
                    }
                },
                "thousands": ".",
                "datetime": {
                    "previous": "Anterior",
                    "next": "Proximo",
                    "hours": "Horas",
                    "minutes": "Minutos",
                    "seconds": "Segundos",
                    "unknown": "-",
                    "amPm": [
                        "am",
                        "pm"
                    ]
                },
                "editor": {
                    "close": "Cerrar",
                    "create": {
                        "button": "Nuevo",
                        "title": "Crear Nuevo Registro",
                        "submit": "Crear"
                    },
                    "edit": {
                        "button": "Editar",
                        "title": "Editar Registro",
                        "submit": "Actualizar"
                    },
                    "remove": {
                        "button": "Eliminar",
                        "title": "Eliminar Registro",
                        "submit": "Eliminar",
                        "confirm": {
                            "_": "¿Está seguro que desea eliminar %d filas?",
                            "1": "¿Está seguro que desea eliminar 1 fila?"
                        }
                    },
                    "error": {
                        "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                    },
                    "multi": {
                        "title": "Múltiples Valores",
                        "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
                        "restore": "Deshacer Cambios",
                        "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                    }
                },
                "info": "Mostrando de _START_ a _END_ de _TOTAL_ entradas"
            },
        });

        $(".btn-agregar-monitor").on('click', function() {
            accion = "registrar";
        });

        $('#tablaMonitor tbody').on('click', '.btnEliminar', function() {
            var data = table.row($(this).parents('tr')).data();

            var idmonitor = data["idmonitor"];

            var datos = new FormData();
            datos.append('accion', "eliminar")
            datos.append('idmonitor', idmonitor);

            swal.fire({

                title: "¡CONFIRMACION!",
                text: "Seguro que desea eliminar el monitor?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Sí, Eliminar",
                cancelButtonText: "Cancelar"

            }).then(resultado => {

                if (resultado.value) {

                    //LLAMADO AJAX
                    $.ajax({
                        url: "ajax/monitor.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {

                            console.log(respuesta);

                            table.ajax.reload(null, false);

                            Toast.fire({
                                icon: 'success',
                                title: respuesta
                            });

                        }
                    })
                } else {}

            })
        })

        $('#tablaMonitor tbody').on('click', '.btnEditar', function() {

            var data = table.row($(this).parents('tr')).data();
            accion = "actualizar";

            $("#idMonitor").val(data["idmonitor"]);
            $("#txtinv").val(data["numero_inventario"]);
            $("#txtconector").val(data["tipo_conector"]);
            $("#txtmarca").val(data["idmarca"]);
            $("#txtmodelo").val(data["modelo"]);
            $("#txtserie").val(data["numero_serie"]);
            $("#txtpulgadas").val(data["pulgadas"]);
            $("#txtfecha").val(data["fecha_adquisicion"])
            $("#txtprecio").val(data["precio"]);
            $("#ddlEstado").val(data["estado"]);


        })

        // GUARDAR LA INFORMACION 
        $("#btnGuardar").on('click', function() {

            var idmonitor = $("#idMonitor").val(),
                numero_inventario = $("#txtinv").val(),
                tipo_conector = $("#txtconector").val(),
                idmarca = $("#txtmarca").val(),
                modelo = $("#txtmodelo").val(),
                numero_serie = $("#txtserie").val(),
                pulgadas = $("#txtpulgadas").val(),
                fecha_adquisicion = new Date().toISOString().replace(/T/, ' ').replace(/\..+/, ''),
                precio = $("#txtprecio").val(),
                estado = $("#ddlEstado").val();

            var datos = new FormData();

            datos.append('idmonitor', idmonitor);
            datos.append('numero_inventario', numero_inventario);
            datos.append('tipo_conector', tipo_conector);
            datos.append('idmarca', idmarca);
            datos.append('modelo', modelo);
            datos.append('numero_serie', numero_serie);
            datos.append('pulgadas', pulgadas);
            datos.append('fecha_adquisicion', fecha_adquisicion);
            datos.append('precio', precio);
            datos.append('estado', estado);
            datos.append('accion', accion);

            swal.fire({
                title: "¡CONFIRMAR!",
                text: "¿Está seguro que desea registrar el monitor?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Si, deseo registrar",
                cancelButtonText: "Cancelar"

            }).then(resultado => {

                if (resultado.value) {

                    $.ajax({
                        url: "ajax/monitor.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {
                            console.log(respuesta);

                            $("#modal-gestionar-monitor").modal('hide');

                            table.ajax.reload(null, false);

                            $("#idMonitor").val("");
                            $("#txtinv").val("");
                            $("#txtconector").val("");
                            $("#txtmarca").val("");
                            $("#txtmodelo").val("");
                            $("#txtserie").val("");
                            $("#txtpulgadas").val("");
                            $("#txtfecha").val("");
                            $("#txtprecio").val("");
                            $("#ddlEstado").val("");

                            Toast.fire({
                                icon: 'success',
                                title: respuesta
                            })

                        }
                    });
                } else {

                }
            })
        })
    })
</script>