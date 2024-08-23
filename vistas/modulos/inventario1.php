<!-- CONTENT-HEADER -->
<section class="content-header">


    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Inventario</h1>
            </div>

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>

                    <li class="breadcrumb-item active">Inventario</li>
                </ol>

            </div>
        </div>
    </div>

</section>
<!-- /. CONTENT HEADER -->

<!-- CONTENT -->
<section class="content">

    <div class="container-fluid">
        <table id="tablaInventario" class="table table-striped table-bordered nowrap" style="width:100%;">
            <thead class="bg-info">
                <tr>
                    <td style="width:5%;">N° In.</td>
                    <th style="width:15%;">Fecha</th>
                    <th style="width:5%;">Usuario</th>
                    <th>Teclado</th>
                    <th>Mouse</th>
                    <th>Monitor</th>
                    <th>Equipo</th>
                    <th>Impresora</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

    </div>

</section>
<!-- ./ CONTENT -->

<!-- VENTANA MODAL PARA REGISTRO Y ACTUALIZACION -->
<div class="modal fade" id="modal-gestionar-inventario">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <!-- ============================================================
            =MODAL HEADER
            ===============================================================-->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Agregar Inventario</h4>
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
                            <input type="hidden" id="txtinventario" name="inventario" value="">
                            <label for="txtusuario">ID Usuario</label>
                            <select name="txtusuario" id="txtusuario" class="form-control select2bs4">
                                <option value="">Selecciona:</option>
                                <?php
                                require_once "/xampp/htdocs/control/modelos/conexion.php";
                                $cone = Conexion::conectar();
                                $sql = "SELECT idusuario,nombre FROM usuario";
                                $stmt = $cone->prepare($sql);
                                $resultado = $stmt->execute();
                                $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                                foreach ($row as $row) {
                                ?>
                                    <option value="<?php print($row->idusuario) ?>"><?php print($row->idusuario . ".- " . $row->nombre) ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtteclado">ID Teclado</label>
                            <select name="txtteclado" id="txtteclado" class="form-control select2bs4">
                                <option value="">Selecciona:</option>
                                <?php
                                require_once "/xampp/htdocs/control/modelos/conexion.php";
                                $cone = Conexion::conectar();
                                // $sql = "SELECT idteclado,numero_inventario FROM teclado";
                                $sql = "SELECT teclado.idteclado, teclado.numero_inventario, teclado.idmarca, teclado.modelo,
                                        marca.nombre
                                        FROM teclado 
                                        JOIN marca ON teclado.idmarca = marca.idmarca";
                                $stmt = $cone->prepare($sql);
                                $resultado = $stmt->execute();
                                $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                                foreach ($row as $row) {
                                ?>
                                    <option value="<?php print($row->idteclado) ?>"><?php print($row->idteclado . ".- " . $row->numero_inventario."-".$row->nombre) ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtmouse">ID Mouse</label>
                            <select name="txtmouse" id="txtmouse" class="form-control select2bs4">
                                <option value="">Selecciona:</option>
                                <?php
                                require_once "/xampp/htdocs/control/modelos/conexion.php";
                                $cone = Conexion::conectar();
                                // $sql = "SELECT idmouse,numero_inventario FROM mouse";
                                $sql = "SELECT mouse.idmouse, mouse.numero_inventario, mouse.idmarca, mouse.modelo,
                                marca.nombre
                                FROM mouse 
                                JOIN marca ON mouse.idmarca = marca.idmarca";
                                $stmt = $cone->prepare($sql);
                                $resultado = $stmt->execute();
                                $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                                foreach ($row as $row) {
                                ?>
                                    <option value="<?php print($row->idmouse) ?>"><?php print($row->idmouse . ".- " . $row->numero_inventario."- ".$row->nombre) ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtmonitor">ID Monitor</label>
                            <select name="txtmonitor" id="txtmonitor" class="form-control select2bs4">
                                <option value="">Selecciona:</option>
                                <?php
                                require_once "/xampp/htdocs/control/modelos/conexion.php";
                                $cone = Conexion::conectar();
                                // $sql = "SELECT idmonitor,numero_inventario FROM monitor";
                                $sql = "SELECT monitor.idmonitor, monitor.numero_inventario, monitor.idmarca,
                                marca.nombre
                                FROM monitor 
                                JOIN marca ON monitor.idmarca = marca.idmarca";
                                $stmt = $cone->prepare($sql);
                                $resultado = $stmt->execute();
                                $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                                foreach ($row as $row) {
                                ?>
                                    <option value="<?php print($row->idmonitor) ?>"><?php print($row->idmonitor . ".- " . $row->numero_inventario."- ".$row->nombre) ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtequipo">ID Equipo</label>
                            <select name="txtequipo" id="txtequipo" class="form-control select2bs4">
                                <option value="">Selecciona:</option>
                                <?php
                                require_once "/xampp/htdocs/control/modelos/conexion.php";
                                $cone = Conexion::conectar();
                                // $sql = "SELECT idequipo,numero_inventario FROM equipo";
                                $sql = "SELECT e.idequipo, e.numero_inventario, e.marca, e.disco_duro, e.procesador,e.ram,e.idtipo_equipo,
                                m.nombre,
                                t.tipo
                                FROM equipo e
                                INNER JOIN marca m ON e.marca=m.idmarca
                                INNER JOIN tipo_equipo t ON e.idtipo_equipo=t.idtipo_equipo";
                                $stmt = $cone->prepare($sql);
                                $resultado = $stmt->execute();
                                $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                                foreach ($row as $row) {
                                ?>
                                    <option value="<?php print($row->idequipo) ?>"><?php print($row->idequipo . ".- " . $row->numero_inventario."-".$row->nombre."-".$row->tipo) ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtimpresora">ID Impresora</label>
                            <select name="txtimpresora" id="txtimpresora" class="form-control select2bs4">
                                <option value="">Selecciona:</option>
                                <?php
                                require_once "/xampp/htdocs/control/modelos/conexion.php";
                                $cone = Conexion::conectar();
                                // $sql = "SELECT idimpresora,numero_inventario FROM impresora";
                                $sql = "SELECT impresora.idimpresora, impresora.numero_inventario, impresora.modelo, impresora.marca,
                                        marca.nombre
                                        FROM impresora 
                                        JOIN marca ON impresora.marca = marca.idmarca";
                                $stmt = $cone->prepare($sql);
                                $resultado = $stmt->execute();
                                $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                                foreach ($row as $row) {
                                ?>
                                    <option value="<?php print($row->idimpresora) ?>"><?php print($row->idimpresora . ".- " . $row->numero_inventario."- ".$row->nombre."-".$row->modelo) ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txttelefono">ID Telefono</label>
                            <select name="txttelefono" id="txttelefono" class="form-control select2bs4">
                                <option value="">Selecciona:</option>
                                <?php
                                require_once "/xampp/htdocs/control/modelos/conexion.php";
                                $cone = Conexion::conectar();
                                // $sql = "SELECT idtelefono,marca FROM telefono";
                                $sql = "SELECT telefono.idtelefono, telefono.numero_inventario, telefono.marca, telefono.modelo,
                                marca.nombre
                                FROM telefono
                                JOIN marca ON telefono.marca = marca.idmarca";
                                $stmt = $cone->prepare($sql);
                                $resultado = $stmt->execute();
                                $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                                foreach ($row as $row) {
                                ?>
                                    <option value="<?php print($row->idtelefono) ?>"><?php print($row->idtelefono . ".- " . $row->numero_inventario."-".$row->nombre) ?></option>
                                <?php
                                }
                                ?>
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

        var table = $("#tablaInventario").DataTable({
            "ajax": {
                "url": "ajax/inventario.ajax.php",
                "type": "POST",
                "dataSrc": ""
            },
            "columnDefs": [{
                    "targets": 2,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        <?php
                        require_once "/xampp/htdocs/control/modelos/conexion.php";
                        $cone = Conexion::conectar();
                        $sql = "SELECT idusuario,nombre FROM usuario";
                        $stmt = $cone->prepare($sql);
                        $resultado = $stmt->execute();
                        $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                        foreach ($row as $row) {
                        ?>
                            if (data == <?php print($row->idusuario) ?>) {
                                return "<div'><?php print($row->nombre) ?></div> "
                            }
                        <?php
                        }
                        ?>

                    }
                }, {
                    "targets": 3,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        <?php
                        require_once "/xampp/htdocs/control/modelos/conexion.php";
                        $cone = Conexion::conectar();
                        // $sql = "SELECT idteclado,numero_inventario,idmarca,modelo FROM teclado";
                        $sql = "SELECT teclado.idteclado, teclado.numero_inventario, teclado.idmarca, teclado.modelo,
                                        marca.nombre
                                        FROM teclado 
                                        JOIN marca ON teclado.idmarca = marca.idmarca";
                        $stmt = $cone->prepare($sql);
                        $resultado = $stmt->execute();
                        $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                        foreach ($row as $row) {

                        ?>
                            if (data == <?php print($row->idteclado) ?>) {
                                return "<div><?php print($row->numero_inventario . "<br> " . $row->nombre  . "<br> " . $row->modelo) ?></div> "
                            }
                        <?php
                        }

                        ?>

                    }
                }, {
                    "targets": 4,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        <?php
                        require_once "/xampp/htdocs/control/modelos/conexion.php";
                        $cone = Conexion::conectar();
                        // $sql = "SELECT idmouse,modelo FROM mouse";
                        $sql = "SELECT mouse.idmouse, mouse.numero_inventario, mouse.idmarca, mouse.modelo,
                                        marca.nombre
                                        FROM mouse 
                                        JOIN marca ON mouse.idmarca = marca.idmarca";
                        $stmt = $cone->prepare($sql);
                        $resultado = $stmt->execute();
                        $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                        foreach ($row as $row) {
                        ?>
                            if (data == <?php print($row->idmouse) ?>) {
                                return "<div'><?php print($row->numero_inventario . "<br> " . $row->nombre  . "<br> " . $row->modelo) ?></div> "
                            }
                        <?php
                        }
                        ?>

                    }
                }, {
                    "targets": 5,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        <?php
                        require_once "/xampp/htdocs/control/modelos/conexion.php";
                        $cone = Conexion::conectar();
                        // $sql = "SELECT idmonitor,modelo,pulgadas FROM monitor";
                        $sql = "SELECT monitor.idmonitor, monitor.numero_inventario, monitor.idmarca, monitor.modelo, monitor.pulgadas,
                                        marca.nombre
                                        FROM monitor 
                                        JOIN marca ON monitor.idmarca = marca.idmarca";
                        $stmt = $cone->prepare($sql);
                        $resultado = $stmt->execute();
                        $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                        foreach ($row as $row) {
                        ?>
                            if (data == <?php print($row->idmonitor) ?>) {
                                return "<div'><?php print($row->numero_inventario . "<br> " . $row->nombre . "<br> " . $row->modelo . "<br> " . $row->pulgadas) ?></div> "
                            }
                        <?php
                        }
                        ?>

                    }
                }, {
                    "targets": 6,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        <?php
                        require_once "/xampp/htdocs/control/modelos/conexion.php";
                        $cone = Conexion::conectar();
                        // $sql = "SELECT idequipo,numero_inventario,marca,disco_duro,procesador,ram,tipo_equipo FROM equipo";
                        $sql = "SELECT e.idequipo, e.numero_inventario, e.marca, e.disco_duro, e.procesador,e.ram,e.idtipo_equipo,
                                        m.nombre,
                                        t.tipo
                                        FROM equipo e
                                        INNER JOIN marca m ON e.marca=m.idmarca
                                        INNER JOIN tipo_equipo t ON e.idtipo_equipo=t.idtipo_equipo";

                        $stmt = $cone->prepare($sql);
                        $resultado = $stmt->execute();
                        $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                        foreach ($row as $row) {
                        ?>
                            if (data == <?php print($row->idequipo) ?>) {
                                return "<div'><?php print($row->numero_inventario . "<br> " . $row->nombre . "<br> " . $row->disco_duro . "<br> " . $row->procesador . "<br> " . $row->ram . "<br> " . $row->tipo) ?></div> "
                            }
                        <?php
                        }
                        ?>

                    }
                }, {
                    "targets": 7,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        <?php
                        require_once "/xampp/htdocs/control/modelos/conexion.php";
                        $cone = Conexion::conectar();
                        // $sql = "SELECT idimpresora,modelo FROM impresora";
                        $sql = "SELECT impresora.idimpresora, impresora.numero_inventario, impresora.modelo, impresora.marca,
                                        marca.nombre
                                        FROM impresora 
                                        JOIN marca ON impresora.marca = marca.idmarca";
                        $stmt = $cone->prepare($sql);
                        $resultado = $stmt->execute();
                        $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                        foreach ($row as $row) {
                        ?>
                            if (data == <?php print($row->idimpresora) ?>) {
                                return "<div'><?php print($row->numero_inventario . "<br> " . $row->modelo . "<br> " . $row->nombre) ?></div> "
                            }
                        <?php
                        }
                        ?>

                    }
                }, {
                    "targets": 8,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        <?php
                        require_once "/xampp/htdocs/control/modelos/conexion.php";
                        $cone = Conexion::conectar();
                        // $sql = "SELECT idtelefono,modelo FROM telefono";
                        $sql = "SELECT telefono.idtelefono, telefono.numero_inventario, telefono.marca, telefono.modelo,
                                        marca.nombre
                                        FROM telefono
                                        JOIN marca ON telefono.marca = marca.idmarca";
                        $stmt = $cone->prepare($sql);
                        $resultado = $stmt->execute();
                        $row = $stmt->fetchAll(\PDO::FETCH_OBJ);
                        foreach ($row as $row) {
                        ?>
                            if (data == <?php print($row->idtelefono) ?>) {
                                return "<div'><?php print($row->numero_inventario . "<br> " . $row->nombre . "<br> " . $row->modelo) ?></div> "
                            }
                        <?php
                        }
                        ?>

                    }
                }
            ],
            "columns": [{
                    "data": "numero_inventario"
                },
                {
                    "data": "fecha"
                },
                {
                    "data": "idusuario"
                },
                {
                    "data": "idteclado"
                },
                {
                    "data": "idmouse"
                },
                {
                    "data": "idmonitor"
                },
                {
                    "data": "idequipo"
                },
                {
                    "data": "idimpresora"
                },
                {
                    "data": "idtelefono"
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

    })
</script>