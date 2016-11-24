

<div class="row">

    {foreach item=socio from=$socios}
    	<a href="{$_layoutParams.root}socios/socio/{$socio.id}">
		<div class="col-xs-12 col-sm-4 col-md-4">
    		<div class="row socio" style="height:auto">
        		<div class="col-xs-12 col-sm-12 col-md-12 logo">
            		<img src="{$_layoutParams.img}{$socio.logo}.jpg" class="img-responsive img-rounded imagen"/>
            	</div>
            	<div class="col-xs-12 col-sm-12 col-md-12" style="background-color:#CCC; height:100%;">
            		<h3><b>{$socio.razonSocial}</b></h3>
            	</div>
            	<div class="col-xs-12 col-sm-12 col-md-12 ubicacion">
            		<h5 style="float:left; color: #18B05B;">{$socio.ciudad}<br /><b>{$socio.provincia}</b></h5>
                	<h4 style="float:right;" >
                		<span class="glyphicon glyphicon-zoom-in"></span> 
                    	<span style=" color:#00C;">Ver más</span>
                	</h4>
            	</div>
        	</div>
		</div>
    	</a>
    {/foreach}

</div>






	
  