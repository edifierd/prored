
<!--<link href="../layout/prored/css/bootstrap.min.css" rel="stylesheet" type="text/css">-->

<div class="row" >

	<h2>Nuestras Marcas:</h2><br>
    
    {foreach item=proveedor from=$proveedores}
	<div class="col-xs-6 col-sm-4 col-md-2" style="margin-bottom:20px;">
    	<div class="row" style="text-align:center; margin-right:10px;">
        	<!--<div class="col-xs-12">
            	<h3>{$proveedor.nombre}</h3>
    		</div>-->
            <div class="col-xs-12" >
            	<img src="{$_layoutParams.img}{$proveedor.logo}.jpg" class="img-responsive img-thumbnail" style=" ">
            </div>
            <!--<div class="col-xs-12">
            	<a href="{$proveedor.url}" target="_blank" title="{$proveedor.nombre}" style="color:#FFF;"><h6>{$proveedor.web}</h6></a>
            </div>-->
    	</div>
    </div>
    {/foreach}
    
</div>

<div class="row" style="height:350px;">
    
    <h2>Próximamente...</h2><br />
    
    {foreach item=proveedor from=$proveedoresProx}
	<div class="col-xs-6 col-sm-4 col-md-2" style="margin-bottom:20px;">
    	<div class="row" style="text-align:center; margin-right:10px;">
        	<!--<div class="col-xs-12">
            	<h3>{$proveedor.nombre}</h3>
    		</div>-->
            <div class="col-xs-12" >
            	<img src="{$_layoutParams.img}prox/{$proveedor.logo}.jpg" class="img-responsive img-thumbnail" style=" ">
            </div>
            <!--<div class="col-xs-12">
            	<a href="{$proveedor.url}" target="_blank" title="{$proveedor.nombre}" style="color:#FFF;"><h6>{$proveedor.web}</h6></a>
            </div>-->
    	</div>
    </div>
    {/foreach}

</div>