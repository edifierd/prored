<?php


class proveedoresController extends Controller
{

	private $proveedores;

	private $prox;

	public function __construct()
	{
		parent::__construct();

		$this->proveedores = array (
			array(
				'nombre' => 'ABB',
				'logo' => 'abb',
				'web' => 'new.abb.com',
				'url' => 'http://new.abb.com/south-america'
			),

			array(
				'nombre' => 'Argenplas',
				'logo' => 'argenplas',
				'web' => 'www.argenplas.net',
				'url' => 'http://www.argenplas.net/'
			),

			array(
				'nombre' => 'Artelum',
				'logo' => 'artelum',
				'web' => 'www.artelum.com.ar',
				'url' => 'http://www.artelum.com.ar'
			),

			array(
				'nombre' => 'ETA-BAW',
				'logo' => 'baw',
				'web' => 'www.etaelectro.com',
				'url' => 'http://www.etaelectro.com/'
			),

			array(
				'nombre' => 'Cambre',
				'logo' => 'cambre',
				'web' => 'www.cambre.com.ar',
				'url' => 'http://www.cambre.com.ar/'
			),

			array(
				'nombre' => 'CEDAM',
				'logo' => 'cedam',
				'web' => 'www.cedam.com.ar',
				'url' => 'http://www.cedam.com.ar/catalogos.html'
			),

			array(
				'nombre' => 'Exultt',
				'logo' => 'exultt',
				'web' => 'www.exultt.com.ar',
				'url' => 'http://www.exultt.com.ar/exultt/'
			),

			array(
				'nombre' => 'Facb SA',
				'logo' => 'facb',
				'web' => 'www.facbsa.com.ar',
				'url' => 'http://www.facbsa.com.ar'
			),

			array(
				'nombre' => 'Gen-Rod',
				'logo' => 'genrod',
				'web' => 'www.genrod.com.ar',
				'url' => 'http://www.genrod.com.ar'
			),

			array(
				'nombre' => 'Homeplast',
				'logo' => 'homeplast',
				'web' => 'www.homeplast.com',
				'url' => '#'
			),

			array(
				'nombre' => 'IMSA',
				'logo' => 'imsa',
				'web' => 'imsa.com.ar',
				'url' => 'http://imsa.com.ar/imsa2015/index.php'
			),

			array(
				'nombre' => 'JELUZ',
				'logo' => 'jeluz',
				'web' => 'www.jeluz.net',
				'url' => 'http://www.jeluz.net/'
			),

			array(
				'nombre' => 'LCT',
				'logo' => 'lct',
				'web' => 'www.lct.com.ar',
				'url' => 'http://www.lct.com.ar/'
			),

			array(
				'nombre' => 'Lucciola',
				'logo' => 'lucciola',
				'web' => 'www.lucciola.com.ar',
				'url' => 'http://www.lucciola.com.ar'
			),

			array(
				'nombre' => 'Osram',
				'logo' => 'osram',
				'web' => 'www.osram-latam.com',
				'url' => 'http://www.osram-latam.com/osram_latam/'
			),

			array(
				'nombre' => 'Panasonic',
				'logo' => 'panasonic',
				'web' => 'www.panasonic.com',
				'url' => 'http://www.panasonic.com/ar/'
			),

			array(
				'nombre' => 'Philips',
				'logo' => 'philips',
				'web' => 'www.philips.com.ar',
				'url' => 'http://www.philips.com.ar/'
			),

			array(
				'nombre' => 'Siemens',
				'logo' => 'siemens',
				'web' => 'www.siemens.com',
				'url' => 'http://www.aan.siemens.com/argentina/Pages/SiemensenArgentina.aspx'
			),

			array(
				'nombre' => 'Tacsa',
				'logo' => 'tacsa',
				'web' => 'www.tacsa.com.ar',
				'url' => 'http://tacsa.com.ar/sitio/'
			),

			array(
				'nombre' => 'Ticar',
				'logo' => 'ticar',
				'web' => 'www.ticar.com.ar',
				'url' => 'http://www.ticar.com.ar/default.asp'
			),

			array(
				'nombre' => 'Zoloda',
				'logo' => 'zoloda',
				'web' => 'www.zoloda.com.ar',
				'url' => 'http://www.zoloda.com.ar/es/#nosotros'
			),

			array(
				'nombre' => 'Schneider',
				'logo' => 'schneider',
				'web' => 'www.schneider-electric.com',
				'url' => 'http://www.schneider-electric.com/site/home/index.cfm/ar/'
			),

			array(
				'nombre' => 'Candil',
				'logo' => 'candil',
				'web' => 'www.candililuminacion.com.ar',
				'url' => 'http://www.candililuminacion.com.ar/home.aspx'
			),

			array(
				'nombre' => 'Nuban',
				'logo' => 'nuban',
				'web' => 'www.nuban.com.ar',
				'url' => 'http://nuban.com.ar'
			)

		);

		$this->prox = array (


			array(
				'nombre' => 'Interlec',
				'logo' => 'interlec',
				'web' => 'www.interelec.com.ar',
				'url' => 'http://www.interelec.com.ar/'
			),

			array(
				'nombre' => 'Microcontrol',
				'logo' => 'microcontrol',
				'web' => 'www.microcontrol.com.ar',
				'url' => 'http://www.microcontrol.com.ar'
			),

			array(
				'nombre' => 'Samet',
				'logo' => 'samet',
				'web' => 'www.samet.com.ar',
				'url' => 'http://www.samet.com.ar'
			)

		);
	}

	public function index(){

		$this->_view->assign('titulo', 'Proveedores  - ProRed Argentina');
		$this->_view->assign('description', 'ProRed Argentina cuenta con una amplia variedad de proveedores y se encuentra constantemente ampliando y expandiendo.');
		$this->_view->assign('keywords', 'ProRed Argentina','ProRed, organización, grupo, distribuidores materiales, electricos, ciudades, argentina, pro, red, proveedores, productos, venta');
		$this->_view->assign('marcado','
		<script type="application/ld+json">
		{
			"@context" : "http://schema.org",
			"@type" : "LocalBusiness",
			"name" : "Nuestras Marcas",
			"image" : "http://www.prored.com.ar/views/layout/prored/img/logo.png",
			"address" : {
				"@type" : "PostalAddress",
				"addressCountry" : "Argentina"
			},
			"url" : "http://www.prored.com.ar/proveedores"
		}
		</script>
		');
		$this->_view->assign('proveedores', $this->proveedores );
		$this->_view->assign('proveedoresProx', $this->prox );
		$this->_view->renderizar('index','proveedores');

	}

}

?>
