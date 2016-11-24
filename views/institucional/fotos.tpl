
<link href="../layout/prored/css/bootstrap.min.css" rel="stylesheet" type="text/css"> 

<h1>Nuestras galerias de fotos institucionales:</h1>


<div class="row" style="min-height:700px;">
	
    {foreach item=galery from=$galerias}
	<a href="{$_layoutParams.root}institucional/galeria/{$galery.id}" style="color:#FFF;" title="{$galery.nombre}">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    	<div class="row">
        	<div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
            	<h3>{$galery.nombre}</h3>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            	<div class="row" style="margin-bottom: 10px;">
                	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:0px; padding-right:5px;">
        				<img src="{$_layoutParams.root}views/institucional/fotos/thumbnails/foto{$galery.fotos[1]}.jpg" 
            			alt="Foto" class="img-responsive" style="float:right;" >
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:0px; padding-left: 5px;">
        				<img src="{$_layoutParams.root}views/institucional/fotos/thumbnails/foto{$galery.fotos[2]}.jpg" 
            			alt="Foto" class="img-responsive" style="float: left;" >
                    </div>
                </div>
    			<div class="row">
                	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:0px; padding-right:5px;">
        				<img src="{$_layoutParams.root}views/institucional/fotos/thumbnails/foto{$galery.fotos[3]}.jpg" 
            			alt="Foto" class="img-responsive" style="float:right;" >
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding:0px; padding-left: 5px;">
        				<img src="{$_layoutParams.root}views/institucional/fotos/thumbnails/foto{$galery.fotos[4]}.jpg" 
            			alt="Foto" class="img-responsive" style="float: left;" >
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            	<!--<p style="float:left;">{$galery.descripcion}</p>--> <h3 style="float:right; margin-right:10px;">Ver <span class="glyphicon glyphicon-camera" ></span></h3>
            </div>
        </div>
    </div>
    </a>
    {/foreach}

</div>