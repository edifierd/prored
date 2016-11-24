
<!--<link href="../layout/prored/css/bootstrap.min.css" rel="stylesheet" type="text/css">-->

<style>
	.fondo{
		padding: 30px;
		background-color: #CCC;
		border: #000 2px solid;
		color: #000;
		border-radius: 20px;
	}
</style>

<div class="fondo">
	<div class="row" style="margin-bottom: 15px;">
		<div class="col-xs-12 col-sm-12 col-md-3">
			<img src="{$_layoutParams.root}views/socios/fotos/{$socio.id}/{$socio.img}.jpg" class="img-responsive img-thumbnail" 
            style="max-height: 180px; margin-right:auto; margin-left:auto;" />
    	</div>
   		<div class="col-xs-12 col-sm-12 col-md-9">
    		<img src="{$_layoutParams.img}{$socio.logo}.jpg" class=" img-responsive img-rounded" 
            style="max-height:150px; margin-top:20px; margin-right:auto; margin-left:auto;" />
    	</div>
	</div>
    
    
    <div class="row">
    	<div class="col-md-4">
        	<h2>Información</h2>
            <ul class="list-group">
            	<li class="list-group-item"><b>Razon Social:</b><br>{$socio.razonSocial}</li>
                <li class="list-group-item"><b>Teléfono:</b> <br>{$socio.tel}</li>
                <li class="list-group-item"><b>Ubicación:</b> <br> {$socio.ciudad} - {$socio.provincia}</li>
                <li class="list-group-item"><b>Dirección:</b> <br> {$socio.calle} </li>
                <li class="list-group-item"><b>Correo:</b> <br> {$socio.correo} </li>
                <li class="list-group-item"><b>Web:</b> <br> <a href="http://{$socio.web}" target="_blank"> {$socio.web} </a></li>
			</ul>
    	</div>
    	<div class="col-md-8">
    		<div class="row">
        		<div class="col-md-12">
            		<iframe src="{$socio.gmaps}" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
           		</div>
        	</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
            {for $i=1 to $socio.numFotos}
            	<img src="{$_layoutParams.root}views/socios/fotos/{$socio.id}/foto{$i}.jpg" 
                class="img-responsive img-rounded" 
            	style="width: 160px; height:100px; margin: 7px; float:left;" />
            {/for}
        </div>
    </div>
</div>


