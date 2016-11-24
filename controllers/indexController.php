<?php

class indexController extends Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        //print_r($this->_view->getLayoutPositions());
		//$this->_view->assign('widget', $this->_view->widget('menu', 'getMenu'));
        $this->_view->assign('titulo', 'Inicio - ProRed Argentina');
		$this->_view->assign('marcado', '
								<script type="application/ld+json">
								{
								"@context" : "http://schema.org",
								"@type" : "LocalBusiness",
								"name" : "ProRed",
								"image" : "http://www.prored.com.ar/views/layout/prored/img/logo.png",
								"telephone" : "221 15 6030069",
								"email" : "contacto@prored.com.ar",
								"address" : {
								"@type" : "PostalAddress",
								"addressLocality" : "La Plata",
								"addressRegion" : "Buenos Aires",
								"addressCountry" : "Argentina",
								"postalCode" : "1900"
								},
								"url" : "http://www.prored.com.ar/"
								}
								</script>
							');
		$this->_view->assign('description', 'ProRed Argentina es una organización conformada por distribuidores de materiales eléctricos estratégicamente ubicados en las ciudades más importantes de 
		Argentina. Los socios son Importantes, Prestigiosos, y se comportan Honesta y Honradamente, conservando su vinculo tanto de amistad como comercial, compartiendo información, recursos,
		servicios con un fin en común, la satisfacción al cliente.');
		$this->_view->assign('keywords', 'ProRed Argentina','ProRed, organización, grupo, distribuidores materiales, electricos, ciudades, argentina, pro, red, mision, vision, valores, nombre');
		$this->_view->setCss(array('estilos'));
		$this->_view->setJs(array('funciones'));
        $this->_view->renderizar('index', 'inicio');
    }
	
}

?>