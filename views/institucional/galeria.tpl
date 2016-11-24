<h1>Fotos de {$galeria.nombre}:</h1><br>

<div id="links" style="min-height:700px; margin-bottom:45px;">
    {foreach item=foto from=$galeria.fotos}
		<a href="{$_layoutParams.root}views/institucional/fotos/foto{$foto}.jpg" data-gallery>
        	<img src="{$_layoutParams.root}views/institucional/fotos/thumbnails/foto{$foto}.jpg" 
            alt="Foto" style="width:180px; height:auto; margin-bottom: 5px;">
    	</a>
    {/foreach}
</div>

<br>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Anterior
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Siguiente
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>