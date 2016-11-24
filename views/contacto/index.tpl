  
<h2>{$titulo}</h2>

<div class="row panel panel-default" style="border-width:5px; border-color:#000; ">
	<div class="panel-body" style="background-color: #FFF; color: #000;">
		<div class="col-xs-12 col-sm-12 col-md-5">
        	<form method="post" action="{$_layoutParams.root}contacto/enviar" enctype="multipart/form-data">  
            
            <div class="form-group">
  				<label class="control-label" for="nombre">Apellido *</label>
  				<input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese su apellido" value="{$campos.apellido|default:""}">
                <span class="help-block"></span>
			</div>
            
            <div class="form-group">
  				<label class="control-label" for="nombre">Nombre *</label>
  				<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre" value="{$campos.nombre|default:""}">
                <span class="help-block"></span>
			</div>
            
            <div class="form-group">
  				<label class="control-label" for="nombre">Razon Social *</label>
  				<input type="text" class="form-control" name="razonSocial" id="razonSocial" placeholder="Ingrese su Razon Social" value="{$campos.razonSocial|default:""}">
                <span class="help-block"></span>
			</div>
            
            <div class="form-group">
  				<label class="control-label" for="nombre">Localidad *</label>
  				<input type="text" class="form-control" name="localidad" id="localidad" placeholder="Ingrese su localidad" value="{$campos.localidad|default:""}">
                <span class="help-block"></span>
			</div>
            
            <div class="form-group">
  				<label class="control-label" for="nombre">Teléfono *</label>
  				<input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingrese su teléfono" value="{$campos.telefono|default:""}">
                <span class="help-block"></span>
			</div>
            
            <div class="form-group">
  				<label class="control-label" for="nombre">Correo *</label>
  				<input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo" value="{$campos.correo|default:""}">
                <span class="help-block"></span>
			</div>
            <!-- Datos Ocultos -->
            <input type="hidden" name="tipoContacto" value="{$titulo}">
            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 hidden-xs hidden-sm">
        	<div class="row">
            	<div class="col-md-12">
                	<p style="font-weight: bold;">
                    <u>Datos contacto adicionales:</u> <br /><br />
                	<span class="glyphicon glyphicon-map-marker"></span> 122 N°103 esquina 34 - La Plata <br />
           			<span class="glyphicon glyphicon-phone"></span> Tel: +54 221 15 6030069<br />
            		<span class="glyphicon glyphicon-envelope"></span> Correo: contacto@prored.com.ar<br />
                    </p>
                </div>
                <div class="col-md-12">
                	<iframe src=		      							"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1945.942935018112!2d-57.95157508308845!3d-34.88955988906148!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1469139373605" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        
         <div class="col-xs-12">
    	 	<div class="form-group">
  				<label class="control-label" for="nombre">Consulta</label>
  				<textarea class="form-control" rows="5" name="consulta" style="resize:none;" placeholder="Ingrese su consulta"> {$campos.consulta|default:""} </textarea>
                <span class="help-block"></span>
		 	</div>
		 </div>
         <div class="col-xs-2" style="color:red; font-size:12px; padding:7px;"> * Campos obligatorios </div>
         <div class="col-xs-10">
         	<div class="form-group" style="text-align:center">
                <button class="btn btn-primary" id="btnvalidar"><i class="icon-ok icon-white"> </i> Contactar</button>
        	 </div>
             </form>
         </div>
	</div> 
</div>

<div class="row visible-xs visible-sm"> <!-- Vista del mapa en tamaño movil-->
	<div class="col-xs-12 col-sm-12">
    <p style="font-weight: bold;">
    	<u>Datos contacto adicionales:</u> <br /><br />
    	<span class="glyphicon glyphicon-map-marker"></span> 122 N°103 esquina 34 - La Plata <br />
    	<span class="glyphicon glyphicon-phone"></span> Tel: +54 221 15 6030069<br />
    	<span class="glyphicon glyphicon-envelope"></span> Correo: contacto@prored.com.ar<br />
    </p>
    </div>
    <div class="col-md-12">
                	<iframe src=		      							"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1945.942935018112!2d-57.95157508308845!3d-34.88955988906148!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1469139373605" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>

