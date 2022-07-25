<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4> <i class="fa-solid fa-user"></i> Agregar Miembro al gobierno corporativo</h4>  
            </div>
            <div class="col-md-6">
            <a class="btn btn-success" style="float: right;" href="/gobierno/admin">Volver</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <?php foreach($errores as $error): ?>
            <div class="alert alert-warning">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        <form method="POST" enctype="multipart/form-data">
            <?php include __DIR__ . '/formulario.php'; ?>
            <div class="form-group mt-5">
                <input type="submit" value="Crear miembro del gobierno corporativo" class="btn btn-success">
            </div>
        </form>
    </div>    
</div>




