<fieldset>    
    <div class="row">
        <div class="col-md-6">   
            <label for="descripcion" class="form-label">descripcion</label>
            <input class="form-control" name="ratios[descripcion]" type="text" id="descripcion" value="<?php echo s( $ratios->descripcion) ; ?>">
        </div>
        <div class="col-md-6">   
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="ratios[imagen]">
            <?php if($ratios->imagen) { ?>
                <img src="../../prensa/<?php echo $ratios->imagen ?>" width="30%">
            <?php } ?>
        </div>
    </div> 
</fieldset>