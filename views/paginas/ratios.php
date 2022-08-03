<?php
    $seccion = "";
?>

<section class="container-fluid ratios">
    <div class="container">
        <div class="franjaAmarilla"></div>
        <div class="headerTitulo">
        <h1>Información financiera</h1>
            <H2>RATIOS</H2>
        </div>
    </div>    
</section>

<!--<div class="container homePrincipalesActivos">
    <div class="row">
        <div class="row justify-content-end">
            <div class="col-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
            </div> 
        </div>
    </div>
</div>-->

<div class="container">
    <div class="row">
        
    <?php foreach($ratios as $ratio) { ?>

        <div class="col-md-4">
            <div id="tab<?php echo $ratio->id;?>" data-slide="<?php echo $ratio->id;?>" class="tab">
                <?php echo $ratio->descripcion;?>
            </div>
        </div>
    
    <?php } ?>


        <!--
        <div class="col-md-4">
            <div id="tab2" data-slide="2"  class="tab">
                Evolución del activo
            </div>
        </div>
        <div class="col-md-4">
            <div id="tab3" data-slide="3"  class="tab">
                Evolución del patrimonio neto
            </div>
        </div>
        -->

    </div>
</div>

<div class="container-fluid ratiosSlide">
		
    <div class="container-fluid p-0">
        <div class="row p-0 sliderRatios"> 
 
        <?php 

    
        
        foreach($ratios as $ratio) {
        
        
        ?>
            <div class="slideRatio">
                <img src="prensa/<?php echo $ratio->imagen;?>" alt="" width="100%">
            </div>

        <?php } ?>    

            <!--


            <div class="slideRatio">
                <img src="img/grafico.jpg" alt="" width="100%">
            </div>

            <div class="slideRatio">
                <img src="img/grafico.jpg" alt="" width="100%">
            </div>      
   
            -->


        </div>          
    
</div>    
    
    </div>
</div>