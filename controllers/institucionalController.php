<?php

class institucionalController extends Controller
{

	private $galerias;

    public function __construct()
    {
        parent::__construct();

		$this->galerias = array (
						array(
							'id' => 1,
							'nombre' => 'Grupo',
							'descripcion' => '20/05/2015',
							'fotos' => array( 42,34,35,36,37,38,39,40,41,43,44,45,46,47,48,49,50,56 )
						),

						array(
							'id' => 2,
							'nombre' => 'Fabrica Gen-Rod',
							'descripcion' => '20/05/2015',
							'fotos' => array( 10,11,14,22,25,26,29,30,31,32,33 )
						),

						array(
							'id' => 3,
							'nombre' => 'Fabrica Homeplast',
							'descripcion' => '20/05/2015',
							'fotos' => array( 1,3,5,6,7,8,9 )
						),

						array(
							'id' => 4,
							'nombre' => 'Fabrica San Justo',
							'descripcion' => '18/11/2014',
							'fotos' => array( 51,52,53,54,55 )
						)
				   );
    }

	public function index(){
		$this->nosotros();
	}

    public function nosotros(){

        $this->_view->assign('titulo', 'Sobre Nosotros - ProRed Argentina');
		$this->_view->assign('description', 'ProRed Argentina es una organización conformada por distribuidores de materiales eléctricos estratégicamente ubicados en las ciudades más importantes de
		Argentina. Nuestro objetivo es ofrecer y satisfacer soluciones tecnológicas tanto de equipos como de infraestructura como asesoría y consultoría para proveer un servicio completo a la altura y necesidades de nuestros clientes.');
		$this->_view->assign('keywords', 'ProRed, organización, grupo, distribuidores materiales, electricos, ciudades, argentina, pro, red, mision, vision, valores, nombre, valores , trabajo, crecimiento, responsabilidad social, austeridad, objetivos, empresa');
		$this->_view->assign('marcado', '
									<script type="application/ld+json">
									{
									  "@context" : "http://schema.org",
									  "@type" : "Article",
									  "name" : "Los Valores de nuestra cultura corporativa",
									  "author" : {
										"@type" : "Person",
										"name" : "ProRed"
									  },
									  "datePublished" : "2016-08-07",
									  "image" : "http://www.prored.com.ar/views/layout/prored/img/logo.png",
									  "articleSection" : "es una organización conformada por distribuidores de materiales eléctricos estratégicamente ubicados en las ciudades más importantes de Argentina. Los socios son Importantes, Prestigiosos, y se comportan Honesta y Honradamente, conservando su vinculo tanto de amistad como comercial, compartiendo información, recursos, servicios con un fin en común, la satisfacción al cliente",
									  "articleBody" : "Trabajo</H3>\n\t\t<P>Trabajo es cualquier actividad humana que satisface una necesidad, ya sea económica, emocional o de crecimiento personal. <BR/><BR/>\n\t\tPara nosotros el trabajo es un valor porque sólo a través de él podemos cubrir nuestras necesidades y, al mismo tiempo, servir a los demás. <BR/><BR/>\n\t\tEl trabajo es la oportunidad que nos brinda la vida para transformar y mejorar el ambiente en que vivimos. Las obras más meritorias y trascendentes de las personas se han conseguido mediante \n        el trabajo. Con él se desarrolla y se debe apoyar fervientemente la creatividad, la sensibilidad artística, la inventiva, así como las formas más enriquecedoras de las relaciones humanas, \n        priorizando la comunicación y el conocimiento. <BR/><BR/>\n\t\tTrabajar en grupo es un privilegio y por ello, nuestro quehacer personal debe poner en juego lo mejor de nosotros. <BR/><BR/>\n        </P>\n        \n\t\t<H3>Crecimiento</H3>\n\t\t<P>En nuestra Empresa estamos convencidos que cada individuo, conforme a sus capacidades, debe mantener una superación y un desarrollo a lo largo de toda su existencia. Las personas, al igual\n        que las empresas, son seres en potencia y en desarrollo.  La vida nos da la posibilidad de seguir creciendo y con ello desarrollando nuestras capacidades. <BR/><BR/>\n\t\tAl aumentar nuestras habilidades y conocimientos personales, nuestra Empresa tendrá mayor capacidad para ofrecer más y mejores servicios, en consecuencia nuestro país incrementará el número \n        de satisfacciones y oportunidades que brinda a su población. <BR/><BR/>\n\t\tEl crecimiento se consigue mediante un esfuerzo conjunto y sostenido, fomentando la conformación de alianzas con proveedores, interactuando con los demás. Manteniendo el foco en los \n        resultados, se obtiene: una mejor empresa, un empleado satisfecho que termina contribuyendo a una mejor familia en nuestros negocios. Finalmente, esto se trasmite al ciudadano, creando un \n        clima amigable en la comercialización logrando permanentemente nuevas oportunidades de negocios. <BR/><BR/>\n\t\t</P>\n        \n        <H3>Responsabilidad Social </H3>\n\t\t<P>Hoy día, en un mundo sin fronteras, es imposible vivir de manera aislada. Lo cierto es que toda actividad, llámese personal o colectiva, repercute en la sociedad, por ende, se necesita \t\t\n        compromiso y actitud de servicio hacia la comunidad siendo eficiente en los procesos. Desarrollamos e implementamos para los integrantes del grupo, un software de gestión común para todos, el\n        cual nos permite estar actualizados y comunicados continuamente. <BR/><BR/>\n\t\tRealizar bien nuestro trabajo, cumplir lo pactado con nuestros clientes, socios y proveedores, respetar la legislación vigente y cuidar los recursos, sean financieros, humanos o materiales, \n        son formas de practicar este valor. La responsabilidad social nos lleva a buscar constantemente el bien común. Esto comprende un rango muy amplio de conductas que van desde el cumplimiento de\n        las normas y leyes más generales de nuestro país, hasta el cuidado de las fuentes de energía renovables y no renovables y el medio ambiente. <BR/><BR/>\n\t\tProRed destaca su responsabilidad social. La Empresa está consciente del país en que opera, sus desafíos, problemas y oportunidades. Por ello busca colaborar con las metas de desarrollo \n        económico, social y cultural del país. <BR/><BR/>\n\t\t</P>\n        \n        <H3>Austeridad</H3>\n        <P>\n        Ser austero significa cuidar y utilizar eficientemente los recursos que poseemos. Con ello evitamos desperdicios, implica gastar en lo necesario y prescindir de lo inútil o superfluo. \n        <BR/><BR/>\n\t\tLa austeridad no es una limitación, sino una posibilidad para crear, aprovechar, imaginar y crecer. Lo que una vez se consideró desecho puede ser el insumo de una nueva idea. \n        <BR/><BR/>\n\t\tEn este sentido es importante enfatizar que Nuestros Valores están interrelacionados y se complementan mutuamente. La fuerza de nuestros valores se encuentra no sólo en el sentido de cada \t\n        uno, sino en su interacción, por lo tanto, no podemos pensar en tener responsabilidad social sin la práctica de la austeridad.",
									  "url" : "http://www.prored.com.ar/institucional/nosotros"
									}
									</script>
							');
        $this->_view->renderizar('nosotros','institucional');

	}

	public function logo(){

        $this->_view->assign('titulo', 'Logo y Desarrollo - ProRed Argentina');
		$this->_view->assign('description', 'Somos ProRed Argentina, como primer elemento de identificación, base para una efectiva construcción de marca, el isologo de ProRed debía representar visualmente conceptos y valores de la red de distribución. Se apeló a una combinación de símbolo y logotipo de formas puras, reconocibles, diferenciadoras y fácilmente recordables, que aportaran flexibilidad a la hora de su aplicación en distintas situaciones de uso y en diversos soportes, sin perder su identidad primaria. Asimismo, se tuvo en cuenta su eventual articulación con la denominación escrita o logotipo de los distintos asociados. ');
		$this->_view->assign('keywords', 'ProRed Argentina','ProRed, organización, grupo, distribuidores materiales, electricos, ciudades, argentina, pro, red, logo, desarrollo, logo y desarollo, fotos, empresa');
		$this->_view->assign('marcado', '
									<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Article",
  "name" : "Logo y desarrollo ProRed",
  "author" : {
    "@type" : "Person",
    "name" : "ProRed"
  },
  "datePublished" : "2016-08-05",
  "image" : "http://www.prored.com.ar/views/index/img/proredSignificado.png",
  "articleSection" : "Como primer elemento de identificación, base para una efectiva construcción de marca, el isologo de ProRed debía representar visualmente conceptos y valores de la red de distribución. Se apeló a una combinación de símbolo y logotipo de formas puras, reconocibles, diferenciadoras y fácilmente recordables, que aportaran flexibilidad a la hora de su aplicación en distintas situaciones de uso y en diversos soportes, sin perder su identidad primaria. Asimismo, se tuvo en cuenta su eventual articulación con la denominación escrita o logotipo de los distintos asociados.",
  "articleBody" : "A través de un diagrama conformado por las iniciales del nombre, el símbolo persigue la representación visual de una red única, abarcadora, y abierta a la \t\t\t\n                    expansión, dinámica y en permanente crecimiento.\n                    La síntesis de elementos que conforman el símbolo reflejan austeridad, seriedad, confianza, respaldo y progreso, sin caer en la solemnidad ni en la rigidez sino, \n                    por el contrario, reforzando el concepto de dinamismo.<BR/><BR/></P>\n               \t\t</DIV>\n            \t</DIV>\n            </DIV>\n            <DIV class=\"col-md-6\">\n            \t<DIV class=\"panel panel-info\">\n                \t<DIV class=\"panel-heading\"><H5><B>Colores</B></H5></DIV>\n                \t<DIV class=\"panel-body\">\n                \t<P style=\"font-size:14px;\"> El isologo emplea dos colores (azul y verde), reforzando así el concepto de austeridad y facilitando, a la vez, su aplicación en las más diversas condiciones \t\n                \ttécnicas.\n                \tEl AZUL (Pantone 280) connota autoridad, consolidación, poder, éxito, seguridad, dignidad y confianza.\n                \tEl VERDE (Pantone 354) representa frescura, renovación, tranquilidad y armonía, y se encuentra estrechamente vinculado al concepto de responsabilidad para con el \n                \tMedio Ambiente. </P>\n                \t</DIV>\n            \t</DIV>\n            </DIV>\n        </DIV>\n        \n        <DIV class=\"row\">\n        \t<DIV class=\"col-md-12\">\n            \t<DIV class=\"panel panel-info\">\n                \t<DIV class=\"panel-heading\"><H5><B>Logotipo</B></H5></DIV>\n                \t<DIV class=\"panel-body\">\n                \t<P style=\"font-size:14px;\">El logotipo se resolvió a través de la combinación de mayúsculas y minúsculas que, junto con el uso de dos colores, evidencian\n                    la conformación del nombre a partir de dos partículas: PRO RED.\n                \tPRO, del latín prode (provecho), el objetivo final de la red para cada uno de sus socios; el beneficio que supone para estos. A \n                    la vez, puede vincularse al concepto de profesional.<BR/>\n                \tRED, como organización, conjunto de individuos relacionados para un determinado fin; donde cada uno de ellos es de vital \n                    importancia para el todo.\n                \tLa elección tipográfica de una paloseco (simple y sin serif) refuerza la idea de modernidad, tecnología y vanguardia. La familia \n                    tipográfica utilizada resulta \t\n                \tlegible, descontracturada, y de estructura redondeada en sus caracteres, lo que la vincula formalmente con el símbolo. La misma \n                    fue modificada para darle carácter y \n                \thacerla distintiva.",
  "url" : "http://www.prored.com.ar/institucional/logo"
}
</script>
							');
        $this->_view->renderizar('logo','institucional');

	}

	public function fotos(){

        $this->_view->assign('titulo', 'Galeria de fotos - ProRed Argentina');
		$this->_view->assign('galerias', $this->galerias);
		$this->_view->assign('description', 'ProRed Argentina Fotos es el lugar donde puede conocer con mas profundidad. Accediendo a todo el ontenido multimedia en fotos de nuestras galerias.');
		$this->_view->assign('keywords', 'ProRed Argentina','ProRed, organización, grupo, distribuidores materiales, electricos, ciudades, argentina, pro, red, fotos, grupo, galeria, galeria imagenes');
		$this->_view->assign('marcado', '
									<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Article",
  "name" : "Nuestras galerias de fotos institucionales",
  "image" : "http://www.prored.com.ar/views/layout/prored/img/logo.png",
  "articleSection" : "Grupo - Gen-Rod - Homeplast",
  "articleBody" : "Grupo</H3>\n            </DIV>\n            <DIV class=\"col-xs-12 col-sm-12 col-md-12\">\n            \t<DIV class=\"row\" style=\"margin-bottom: 10px;\">\n                \t<DIV class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\" style=\"padding:0px; padding-right:5px;\">\n        \t\t\t\t<IMG src=\"http://www.prored.com.ar/views/institucional/fotos/thumbnails/foto35.jpg\" alt=\"Foto\" class=\"img-responsive\" style=\"float:right;\"/>\n                    </DIV>\n                    <DIV class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\" style=\"padding:0px; padding-left: 5px;\">\n        \t\t\t\t<IMG src=\"http://www.prored.com.ar/views/institucional/fotos/thumbnails/foto36.jpg\" alt=\"Foto\" class=\"img-responsive\" style=\"float: left;\"/>\n                    </DIV>\n                </DIV>\n    \t\t\t<DIV class=\"row\">\n                \t<DIV class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\" style=\"padding:0px; padding-right:5px;\">\n        \t\t\t\t<IMG src=\"http://www.prored.com.ar/views/institucional/fotos/thumbnails/foto37.jpg\" alt=\"Foto\" class=\"img-responsive\" style=\"float:right;\"/>\n                    </DIV>\n                    <DIV class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\" style=\"padding:0px; padding-left: 5px;\">\n        \t\t\t\t<IMG src=\"http://www.prored.com.ar/views/institucional/fotos/thumbnails/foto38.jpg\" alt=\"Foto\" class=\"img-responsive\" style=\"float: left;\"/>\n                    </DIV>\n                </DIV>\n            </DIV>\n            <DIV class=\"col-xs-12 col-sm-12 col-md-12\">\n            \t <H3 style=\"float:right; margin-right:10px;\">Ver <SPAN class=\"glyphicon glyphicon-camera\"></SPAN></H3>\n            </DIV>\n        </DIV>\n    </DIV>\n    </A>\n    \t<A href=\"http://www.prored.com.ar/institucional/galeria/2\" style=\"color:#FFF;\">\n\t<DIV class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4\">\n    \t<DIV class=\"row\">\n        \t<DIV class=\"col-xs-12 col-sm-12 col-md-12\" style=\"text-align:center;\">\n            \t<H3>Fabrica Gen-Rod</H3>\n            </DIV>\n            <DIV class=\"col-xs-12 col-sm-12 col-md-12\">\n            \t<DIV class=\"row\" style=\"margin-bottom: 10px;\">\n                \t<DIV class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\" style=\"padding:0px; padding-right:5px;\">\n        \t\t\t\t<IMG src=\"http://www.prored.com.ar/views/institucional/fotos/thumbnails/foto11.jpg\" alt=\"Foto\" class=\"img-responsive\" style=\"float:right;\"/>\n                    </DIV>\n                    <DIV class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\" style=\"padding:0px; padding-left: 5px;\">\n        \t\t\t\t<IMG src=\"http://www.prored.com.ar/views/institucional/fotos/thumbnails/foto12.jpg\" alt=\"Foto\" class=\"img-responsive\" style=\"float: left;\"/>\n                    </DIV>\n                </DIV>\n    \t\t\t<DIV class=\"row\">\n                \t<DIV class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\" style=\"padding:0px; padding-right:5px;\">\n        \t\t\t\t<IMG src=\"http://www.prored.com.ar/views/institucional/fotos/thumbnails/foto13.jpg\" alt=\"Foto\" class=\"img-responsive\" style=\"float:right;\"/>\n                    </DIV>\n                    <DIV class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\" style=\"padding:0px; padding-left: 5px;\">\n        \t\t\t\t<IMG src=\"http://www.prored.com.ar/views/institucional/fotos/thumbnails/foto14.jpg\" alt=\"Foto\" class=\"img-responsive\" style=\"float: left;\"/>\n                    </DIV>\n                </DIV>\n            </DIV>\n            <DIV class=\"col-xs-12 col-sm-12 col-md-12\">\n            \t <H3 style=\"float:right; margin-right:10px;\">Ver <SPAN class=\"glyphicon glyphicon-camera\"></SPAN></H3>\n            </DIV>\n        </DIV>\n    </DIV>\n    </A>\n    \t<A href=\"http://www.prored.com.ar/institucional/galeria/3\" style=\"color:#FFF;\">\n\t<DIV class=\"col-xs-12 col-sm-6 col-md-6 col-lg-4\">\n    \t<DIV class=\"row\">\n        \t<DIV class=\"col-xs-12 col-sm-12 col-md-12\" style=\"text-align:center;\">\n            \t<H3>Fabrica Homeplast</H3>\n            </DIV>\n            <DIV class=\"col-xs-12 col-sm-12 col-md-12\">\n            \t<DIV class=\"row\" style=\"margin-bottom: 10px;\">\n                \t<DIV class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\" style=\"padding:0px; padding-right:5px;\">\n        \t\t\t\t<IMG src=\"http://www.prored.com.ar/views/institucional/fotos/thumbnails/foto2.jpg\" alt=\"Foto\" class=\"img-responsive\" style=\"float:right;\"/>\n                    </DIV>\n                    <DIV class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\" style=\"padding:0px; padding-left: 5px;\">\n        \t\t\t\t<IMG src=\"http://www.prored.com.ar/views/institucional/fotos/thumbnails/foto3.jpg\" alt=\"Foto\" class=\"img-responsive\" style=\"float: left;\"/>\n                    </DIV>\n                </DIV>\n    \t\t\t<DIV class=\"row\">\n                \t<DIV class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\" style=\"padding:0px; padding-right:5px;\">\n        \t\t\t\t<IMG src=\"http://www.prored.com.ar/views/institucional/fotos/thumbnails/foto4.jpg\" alt=\"Foto\" class=\"img-responsive\" style=\"float:right;\"/>\n                    </DIV>\n                    <DIV class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\" style=\"padding:0px; padding-left: 5px;\">\n        \t\t\t\t<IMG src=\"http://www.prored.com.ar/views/institucional/fotos/thumbnails/foto5.jpg\" alt=\"Foto\" class=\"img-responsive\" style=\"float: left;\"/>\n                    </DIV>\n                </DIV>\n            </DIV>\n            <DIV class=\"col-xs-12 col-sm-12 col-md-12\">\n            \t <H3 style=\"float:right; margin-right:10px;\">Ver",
  "url" : "http://www.prored.com.ar/institucional/fotos"
}
</script>
							');
        $this->_view->renderizar('fotos','institucional');

	}

	public function galeria($id){
		$id = $this->getParams();
		$id = $id[0];
		if ($this->esValido($id, $this->galerias)){
			$this->_view->setCss(array('blueimp-gallery.min'));
			$this->_view->setCss(array('bootstrap-image-gallery.min'));
			$this->_view->setJs(array('jquery.blueimp-gallery.min'));
			$this->_view->setJs(array('bootstrap-image-gallery.min'));
			$galeria = $this->getElem($id,$this->galerias);
			$this->_view->assign('galeria', $galeria );
			$this->_view->assign('titulo', $galeria['nombre']. ' - Galeria de fotos' );
			$this->_view->assign('marcado', '');
        	$this->_view->renderizar('galeria','institucional');
		} else {
			$this->fotos();
		}


	}

	private function esValido($id, $socios){
		foreach ($socios as $valor){
			if($valor['id'] == $id)
				return true;
		}
		return false;
	}

	private function getElem($id, $socios){
		foreach ($socios as $valor){
			if($valor['id'] == $id)
				return $valor;
		}
		return false;
	}


}

?>
