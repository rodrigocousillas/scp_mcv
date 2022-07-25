<?php 
        if($resultado) {
            $mensaje = mostrarNotificacion( intval( $resultado) );
            if($mensaje) { ?>
                <p class="alert alert-primary"><?php echo s($mensaje); ?></p>
    <?php  
            } 
        }
    ?>
<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4> <i class="fa-solid fa-user"></i> Listar empresas del Grupo</h4>  
            </div>
            <div class="col-md-6">
            <a class="btn btn-success" style="float: right;" href="/empresas/crear">Agregar empresa</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%; float: left;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Siglas</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach( $empresas as $empresa ): ?>
                    <tr>
                        <td><?php echo $empresa->id; ?></td>
                        <td><?php echo $empresa->sigla; ?></td>
                        <td><?php echo $empresa->nombre; ?></td>
                        <td><?php echo $empresa->descripcion; ?></td>
                        <td><a class="btn btn-primary" href="actualizar?id=<?php echo $empresa->id; ?>">Modificar</a></td>
                        <td>
                            <form method="POST" class="w-100" action="eliminar">
                                <input type="hidden" name="id" value="<?php echo $empresa->id; ?>">
                                <input type="hidden" name="tipo" value="empresa">
                                <input type="submit" class="btn btn-danger" value="Eliminar">
                            </form>
                            
                        </td>
                    </tr>
                <?php endforeach; ?>    
                </tbody>
            </table>
        </div>
    </div>    
</div>