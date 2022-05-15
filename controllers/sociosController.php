<?php

class sociosController extends Controller
{

	private $socios;

    public function __construct()
    {
        parent::__construct();

		$this->socios = array (
			array(
				'id' => 'electrica-sb',
				'img' => 'foto4',
				'logo' => 'electrica-sb',
				'numFotos' => 6,
				'razonSocial' => 'Electrica SB',
				'tel' => '0220-4120012 | 011-26434637',
				'web' => 'www.electricasb.com',
				'correo' => 'info@electricasb.com',
				'ciudad' => 'Merlo',
				'provincia' => 'Buenos Aires',
				'calle' => 'Av. argentina 1702',
				'gmaps' =>	'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.0710600600546!2d-58.728839684768445!3d-34.678155980440316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc007c53296ad%3A0xa1a00a35b8f49fce!2sElectrica%20SB%20Sergio%20Bartoli!5e0!3m2!1ses!2sar!4v1648853518351!5m2!1ses!2sar',
				'marcado' => '
					<script type="application/ld+json">
						{
						"@context" : "http://schema.org",
						"@type" : "LocalBusiness",
						"name" : "Electrica SB",
						"image" : "http://www.prored.com.ar/views/socios/img/electrica-sb",
						"telephone" : "0220-4120012 | 011-26434637",
						"email" : "info@electricasb.com",
						"address" : {
						"@type" : "PostalAddress",
						"streetAddress" : "Av. argentina 1702",
						"addressLocality" : "Merlo",
						"addressRegion" : "Buenos Aires",
						"addressCountry" : "Argentina"
						},
						"url" : "http://www.prored.com.ar/socios/socio/electrica-sb"
						}
						</script>'
			),
			array(
				'id' => 'grelectro-canuelas',
				'img' => 'foto7',
				'logo' => 'grelectro',
				'numFotos' => 7,
				'razonSocial' => 'GR Electro Cañuelas',
				'tel' => '+54 (011) 15 3351-2177',
				'web' => 'www.grelectro.com',
				'correo' => 'comprascanuelas@grelectro.com',
				'ciudad' => 'Cañuelas',
				'provincia' => 'Buenos Aires',
				'calle' => 'Antoño Díaz 750',
				'gmaps' =>	'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3266.4083017634034!2d-58.77043808475835!3d-35.04652968034711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bd1fce4b5eba5b%3A0x6537c05e76ee04ab!2sGR%20Electro%20Ca%C3%B1uelas!5e0!3m2!1ses!2sar!4v1616158447148!5m2!1ses!2sar',
				'marcado' => '
					<script type="application/ld+json">
						{
						"@context" : "http://schema.org",
						"@type" : "LocalBusiness",
						"name" : "GR Electro Cañuelas",
						"image" : "http://www.prored.com.ar/views/socios/img/grelectro.jpg",
						"telephone" : "+54 (011) 15 3351-2177",
						"email" : "comprascanuelas@grelectro.com",
						"address" : {
						"@type" : "PostalAddress",
						"streetAddress" : "Antoño Díaz 750",
						"addressLocality" : "Cañuelas",
						"addressRegion" : "Buenos Aires",
						"addressCountry" : "Argentina"
						},
						"url" : "http://www.prored.com.ar/socios/socio/grelectro-canuelas"
						}
						</script>'
			),
			array(
				'id' => 'electro-iluminacion',
				'img' => 'foto2',
				'logo' => 'electro-iluminacion',
				'numFotos' => 6,
				'razonSocial' => 'Electro Iluminación GR',
				'tel' => '+54 (02323) 435556',
				'web' => '',
				'correo' => 'ventasiluminacion@grelectro.com',
				'ciudad' => 'Lujan',
				'provincia' => 'Buenos Aires',
				'calle' => '25 de mayo 547',
				'gmaps' =>	'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.6017469547846!2d-59.11583868477143!3d-34.5636375804699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc7df2ef245fc7%3A0xa17ffed084cfc484!2s25%20de%20Mayo%20547%2C%20B6700%20ALK%2C%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1573219690048!5m2!1ses!2sar',
				'marcado' => '
					<script type="application/ld+json">
	{
	"@context" : "http://schema.org",
	"@type" : "LocalBusiness",
	"name" : "Electro Iluminación GR",
	"image" : "http://www.prored.com.ar/views/socios/img/electro-iluminacion.jpg",
	"telephone" : "+54 (02323) 435556",
	"email" : "ventasiluminacion@grelectro.com",
	"address" : {
	"@type" : "PostalAddress",
	"streetAddress" : "25 de mayo 547",
	"addressLocality" : "Lujan",
	"addressRegion" : "Buenos Aires",
	"addressCountry" : "Argentina"
	},
	"url" : "http://www.prored.com.ar/socios/socio/electro-iluminacion"
	}
	</script>'
			),

			array(
				'id' => 'casa-sergio',
				'img' => 'foto12',
				'logo' => 'casa-sergio',
				'numFotos' => 14,
				'razonSocial' => 'Electricidad Casa Sergio',
				'tel' => '+54 (011) 4744-7149',
				'web' => 'https://web.facebook.com/casasergioelectricidad',
				'correo' => 'electricidadcasasergio@gmail.com',
				'ciudad' => 'San Fernando',
				'provincia' => 'Buenos Aires',
				'calle' => 'Av. Nicolás Avellaneda 2631',
				'gmaps' =>	'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14455.561581458023!2d-58.558763827175795!3d-34.449346411963454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bca55bef82b8bf%3A0xed91e19d6cc6714d!2sElectricidad%20Casa%20Sergio%20-%20Materiales%20El%C3%A9ctricos!5e0!3m2!1ses!2sar!4v1572882090046!5m2!1ses!2sar',
				'marcado' => '
					<script type="application/ld+json">
	{
	"@context" : "http://schema.org",
	"@type" : "LocalBusiness",
	"name" : "Electricidad Casa Sergio - Materiales Eléctricos",
	"image" : "http://www.prored.com.ar/views/socios/img/casa-sergio.jpg",
	"telephone" : "+54 (011) 4744-7149",
	"email" : "electricidadcasasergio@gmail.com",
	"address" : {
	"@type" : "PostalAddress",
	"streetAddress" : "Av. Nicolás Avellaneda 2631",
	"addressLocality" : "San Fernando",
	"addressRegion" : "Buenos Aires",
	"addressCountry" : "Argentina"
	},
	"url" : "http://www.prored.com.ar/socios/socio/casa-sergio"
	}
	</script>'
			),

			array(
						'id' => 'los-toldos',
						'img' => 'foto3',
						'logo' => 'los-toldos',
						'numFotos' => 10,
						'razonSocial' => 'Electro Los Toldos',
						'tel' => '+54 (02355) 15 - 417113 / 417135',
						'web' => '',
						'correo' => 'electro.lostoldos@gmail.com',
						'ciudad' => 'General Viamonte',
						'provincia' => 'Buenos Aires',
						'calle' => 'Dean Funes 863',
						'gmaps' =>	'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.1063595523146!2d-61.044418384802775!3d-35.00404258035772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bf4b5e1034d78b%3A0xc569d98b7a63e844!2sDe%C3%A1n%20Funes%20863%2C%20Los%20Toldos%2C%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1569259127466!5m2!1ses!2sar',
						'marcado' => '
							<script type="application/ld+json">
			{
			"@context" : "http://schema.org",
			"@type" : "LocalBusiness",
			"name" : "Electro Los Toldos",
			"image" : "http://www.prored.com.ar/views/socios/img/los-toldos.jpg",
			"telephone" : "+54 02355 15 - 417113",
			"email" : "electro.lostoldos@gmail.com",
			"address" : {
			"@type" : "PostalAddress",
			"streetAddress" : "Dean Funes 863",
			"addressLocality" : "General Viamonte",
			"addressRegion" : "Buenos Aires",
			"addressCountry" : "Argentina"
			},
			"url" : "http://www.prored.com.ar/socios/socio/los-toldos"
			}
			</script>
						'
					),

		    	array(
							'id' => 'grelectro',
							'img' => 'foto1',
							'logo' => 'grelectro',
							'numFotos' => 7,
							'razonSocial' => 'GR Electro',
							'tel' => '+54 (0237) 485 3824 - (02323) 43 5556',
							'web' => 'www.grelectro.com',
							'correo' => 'info@grelectro.com',
							'ciudad' => 'General Rodríguez',
							'provincia' => 'Buenos Aires',
							'calle' => '2 de abril 1078',
							'gmaps' =>	'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9983.573589349653!2d-58.94357832123027!3d-34.60786688534228!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe80bbb321225cab0!2sGR+Electro!5e0!3m2!1ses-419!2sar!4v1528760324283',
							'marcado' => '
								<script type="application/ld+json">
	{
	  "@context" : "http://schema.org",
	  "@type" : "LocalBusiness",
	  "name" : "GR Electro",
	  "image" : "http://www.prored.com.ar/views/socios/img/grelectro.jpg",
	  "telephone" : "+54 0237 485 3824",
	  "email" : "info@grelectro.com",
	  "address" : {
	    "@type" : "PostalAddress",
	    "streetAddress" : "2 de abril 1078",
	    "addressLocality" : "General Rodríguez",
	    "addressRegion" : "Buenos Aires",
	    "addressCountry" : "Argentina"
	  },
	  "url" : "http://www.prored.com.ar/socios/socio/grelectro"
	}
	</script>
							'
						),

						array(
									'id' => 'grelectro-sucursal',
									'img' => 'foto3',
									'logo' => 'grelectro-iluminacion',
									'numFotos' => 10,
									'razonSocial' => 'GR Electro Iluminación',
									'tel' => '+54 (02323) 15 602169',
									'web' => 'www.grelectro.com',
									'correo' => 'iluminacion@grelectro.com',
									'ciudad' => 'General Rodríguez',
									'provincia' => 'Buenos Aires',
									'calle' => 'Dr Luis Leloir 872',
									'gmaps' =>	'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.236493405283!2d-58.943090384770414!3d-34.598180880460944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc8fc036639713%3A0x2c229f773e6fa1c7!2sDr.%20Luis%20Leloir%20872%2C%20B1748%20Gral.%20Rodr%C3%ADguez%2C%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1572562877363!5m2!1ses!2sar',
									'marcado' => '
										<script type="application/ld+json">
			{
			  "@context" : "http://schema.org",
			  "@type" : "LocalBusiness",
			  "name" : "GR Electro Iluminación",
			  "image" : "http://www.prored.com.ar/views/socios/img/grelectro.jpg",
			  "telephone" : "+54 (02323) 15 602169",
			  "email" : "iluminacion@grelectro.com",
			  "address" : {
			    "@type" : "PostalAddress",
			    "streetAddress" : "Dr Luis Leloir 872",
			    "addressLocality" : "General Rodríguez",
			    "addressRegion" : "Buenos Aires",
			    "addressCountry" : "Argentina"
			  },
			  "url" : "http://www.prored.com.ar/socios/socio/grelectro-sucursal"
			}
			</script>'
								),

					array(
						'id' => 'rigelec',
						'img' => 'foto22',
						'logo' => 'rigelec',
						'numFotos' => 27,
						'razonSocial' => 'Rigelec',
						'tel' => '0345- 4219940 Linea Rotativa',
						'web' => 'www.rigelec.com.ar',
						'correo' => 'info@rigelec.com.ar',
						'ciudad' => 'Concordia',
						'provincia' => 'Entre Rios',
						'calle' => 'Las Heras 331',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.955098886008!2d-58.0251515848526!3d-31.38780158141364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95ade8113fed9bbf%3A0x9ae3b5bdb6a62f95!2sAv.+Las+Heras+331%2C+E3202+Concordia%2C+Entre+R%C3%ADos!5e0!3m2!1ses-419!2sar!4v1496799481048',
						'marcado' => '
							<script type="application/ld+json">
							{
							  "@context" : "http://schema.org",
							  "@type" : "LocalBusiness",
							  "name" : "Rigelec",
							  "image" : "http://www.prored.com.ar/views/socios/img/rigelec.jpg",
							  "telephone" : "+54 (0345) 421-9940",
							  "email" : "info@rigelec.com.ar",
							  "address" : {
								"@type" : "PostalAddress",
								"streetAddress" : "Las Heras 331",
								"addressLocality" : "Concordia",
								"addressRegion" : "Entre Rios",
								"addressCountry" : "Argentina"
							  },
							  "url" : "http://www.prored.com.ar/socios/socio/rigelec"
							}
							</script>
						'
					),

					array(
						'id' => 'electricidad-lavalle',
						'img' => 'foto1',
						'logo' => 'electricidad-lavalle',
						'numFotos' => 14,
						'razonSocial' => 'Electricidad Lavalle',
						'tel' => '+54 2314-427278 ',
						'web' => '',
						'correo' => 'electricidadlavalle@hotmail.com electricidadlavalle@yahoo.com.ar',
						'ciudad' => 'San Carlos Bolivar',
						'provincia' => 'Buenos Aires',
						'calle' => 'Av. Juan Manuel de Rosas 750',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3218.418222520237!2d-61.13160538472603!3d-36.22933328007022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDEzJzQ1LjYiUyA2McKwMDcnNDUuOSJX!5e0!3m2!1ses!2sar!4v1569258724964!5m2!1ses!2sar',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Electricidad Lavalle",
  "image" : "http://www.prored.com.ar/views/socios/img/electricidad-lavalle.jpg",
  "telephone" : "+54 2314-427278",
  "email" : "electricidadlavalle@hotmail.com",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Av. Juan Manuel de Rosas 750",
    "addressLocality" : "Bolivar",
    "addressRegion" : "Buenos Aires",
    "addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/electricidad-lavalle"
}
</script>
						'
					),

				  	array(
						'id' => 'homero',
						'img' => 'foto19',
						'logo' => 'homero',
						'numFotos' => 26,
						'razonSocial' => 'Homero & CIA',
						'tel' => '+54 0297 4481748',
						'web' => 'www.homerosrl.com.ar',
						'correo' => 'gustavo@homerosrl.com.ar',
						'ciudad' => 'Comodoro Rivadavia',
						'provincia' => 'Chubut',
						'calle' => 'Av H Yrigoyen 3226',
						'gmaps' =>	'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2777.06373856185!2d-67.53433608255617!3d-45.89003829999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbde5ab4c86a1d4d7%3A0x55c107a714b34db3!2sHomero+%26+Cia+SRL!5e0!3m2!1ses!2sar!4v1470079288808',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Homero & CIA",
  "image" : "http://www.prored.com.ar/views/socios/img/homero.jpg",
  "telephone" : "+54 0297 4481748",
  "email" : "gustavo@homerosrl.com.ar",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Av H Yrigoyen 3226",
    "addressLocality" : "Comodoro Rivadavia",
    "addressRegion" : "Chubut",
    "addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/homero"
}
</script>'),

	array(
		'id' => 'homero-sucursal',
		'img' => 'foto5',
		'logo' => 'homero-sucursal',
		'numFotos' => 5,
		'razonSocial' => 'Homero Sucursal',
		'tel' => '+54 0297 15 515-4118',
		'web' => 'homerodelsur.com.ar',
		'correo' => 'gustavo@homerosrl.com.ar',
		'ciudad' => 'Puerto San Julian',
		'provincia' => 'Santa Cruz',
		'calle' => 'San Martin 731',
		'gmaps' =>	'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5202.4483214147795!2d-67.7257128!3d-49.3100384!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbdc4034af4ffe747%3A0x5ac4b2c19dbfe54e!2sHomero%20Del%20Sur!5e0!3m2!1ses!2sar!4v1572563957385!5m2!1ses!2sar',
		'marcado' => '
			<script type="application/ld+json">
	{
	"@context" : "http://schema.org",
	"@type" : "LocalBusiness",
	"name" : "Homero Sucursal",
	"image" : "http://www.prored.com.ar/views/socios/img/homero.jpg",
	"telephone" : "+54 0297 15 515-4118",
	"email" : "gustavo@homerosrl.com.ar",
	"address" : {
	"@type" : "PostalAddress",
	"streetAddress" : "San Martin 731",
	"addressLocality" : "Santa Cruz",
	"addressRegion" : "Santa Cruz",
	"addressCountry" : "Argentina"
	},
	"url" : "http://www.prored.com.ar/socios/socio/homero-sucursal"
	}
	</script>'),

					array(
						'id' => 'horizonte',
						'img' => 'foto5',
						'logo' => 'horizonte',
						'numFotos' => 9,
						'razonSocial' => 'Horizonte',
						'tel' => '+54 0388-4253402 / 4257110',
						'web' => 'www.horizontesrl.com/tienda',
						'correo' => 'ventas@horizontesrl.com',
						'ciudad' => 'San Salvador de Jujuy',
						'provincia' => 'Jujuy',
						'calle' => 'Las heras N°760 - b° 1ro de Marzo',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1819.6324513790896!2d-65.28880715159346!3d-24.19750023085525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8a15301644f0411d!2sHZ+Horizonte!5e0!3m2!1ses!2sar!4v1470079573307',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Horizonte",
  "telephone" : "+54 0388-4253402 / 4257110",
  "email" : "ventas@horizontesrl.com",
  "address" : {
	"@type" : "PostalAddress",
	"streetAddress" : "Las heras N°760 - b° 1ro de Marzo",
	"addressLocality" : "San Salvador de Jujuy",
	"addressRegion" : "Jujuy",
	"addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/horizonte"
}
</script>
						'
					),

					array(
						'id' => 'horizonte-sucursal',
						'img' => 'foto2',
						'logo' => 'horizonte',
						'numFotos' => 3,
						'razonSocial' => 'Horizonte Sucursal',
						'tel' => '+54 (0388) 4280095 ',
						'web' => 'www.horizontesrl.com/tienda',
						'correo' => 'ventas@horizontesrl.com',
						'ciudad' => 'San Salvador de Jujuy',
						'provincia' => 'Jujuy',
						'calle' => 'La Candelaria N°240 Barrio alto Comedero',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3638.2594216212233!2d-65.28007748500936!3d-24.232703784353866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941b0625915c3145%3A0x57349317272135a1!2sHorizonte%20Materiales%20Electricos!5e0!3m2!1ses!2sar!4v1569284339053!5m2!1ses!2sar',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Horizonte Sucursal",
  "telephone" : "+54 (0388) 4280095",
  "email" : "ventas@horizontesrl.com",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "La Candelaria N°240 Barrio alto Comedero",
    "addressLocality" : "San Salvador de Jujuy",
    "addressRegion" : "Jujuy",
    "addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/horizonte-sucursal"
}
</script>
						'
					),

					array(
					    'id' => 'horizonte-luz',
					    'img' => 'foto4',
					    'logo' => 'horizonte-anosluz',
					    'numFotos' => 11,
					    'razonSocial' => 'Años Luz Horizonte',
					    'tel' => '+54 0388-4242111 / 4227777',
					    'web' => 'www.horizontesrl.com/tienda',
					    'correo' => 'comprashz@horizontesrl.com',
					    'ciudad' => 'San Salvador de Jujuy',
					    'provincia' => 'Jujuy',
					    'calle' => 'Gral. Necochea 248',
					    'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d765.1299228410072!2d-65.30418014136664!3d-24.18604490693721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941b0f417ac3dcff%3A0xdc4006ae68121f88!2sA+os+Luz+Horizonte+SRL!5e0!3m2!1ses!2sar!4v1470079671776',
					    'marcado' => '
					        <script type="application/ld+json">
					{
					"@context" : "http://schema.org",
					"@type" : "LocalBusiness",
					"name" : "Años Luz Horizonte",
					"telephone" : "+54 0388-4242111 / 4227777",
					"email" : "comprashz@horizontesrl.com",
					"address" : {
					"@type" : "PostalAddress",
					"streetAddress" : "Gral. Necochea 248",
					"addressLocality" : "San Salvador de Jujuy",
					"addressRegion" : "Jujuy",
					"addressCountry" : "Argentina"
					},
					"url" : "http://www.prored.com.ar/socios/socio/horizonte-luz"
					}
					</script>
					    '
					),

					array(
						'id' => 'horizonte-luz-sucursal',
						'img' => 'foto4',
						'logo' => 'horizonte-anosluz',
						'numFotos' => 6,
						'razonSocial' => 'Años Luz Horizonte Sucursal',
						'tel' => '+54 0388 4227777',
						'web' => 'www.horizontesrl.com/tienda',
						'correo' => 'comprasluz248@gmail.com',
						'ciudad' => 'San Salvador de Jujuy',
						'provincia' => 'Jujuy',
						'calle' => 'Urdininea 172',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.4532341662866!2d-65.3032611850102!3d-24.19090108437411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941b0f45adecfb53%3A0xd527ff373e92c99b!2sUrdininea%20172%2C%20San%20Salvador%20de%20Jujuy%2C%20Jujuy!5e0!3m2!1ses!2sar!4v1569284295426!5m2!1ses!2sar',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Años Luz Horizonte",
  "telephone" : "+54 0388 4227777",
  "email" : "comprasluz248@gmail.com",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Urdininea 172",
    "addressLocality" : "San Salvador de Jujuy",
    "addressRegion" : "Jujuy",
    "addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/horizonte-luz-sucursal"
}
</script>
						'
					),

					array(
						'id' => 'lograsso',
						'img' => 'foto9',
						'logo' => 'lograsso',
						'numFotos' => 24,
						'razonSocial' => 'Lograsso',
						'tel' => '+54 0221 4706527',
						'web' => 'www.lograssoiluminacion.com.ar',
						'correo' => 'ventas@lograssoiluminacion.com.ar',
						'ciudad' => 'La Plata',
						'provincia' => 'Buenos Aires',
						'calle' => 'Av. 44 entre 140 y 141 N° 2270',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3270.566722032804!2d-57.991484707710775!3d-34.94240191108335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a2e80a2626b97f%3A0xbd908a334eec0255!2sLo+Grasso+Iluminaci%C3%B3n!5e0!3m2!1ses!2sar!4v1470080040552',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Lograsso",
  "image" : "http://www.prored.com.ar/views/socios/img/lograsso.jpg",
  "telephone" : "54 0221 4706527",
  "email" : "ventas@lograssoiluminacion.com.ar",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Av. 44 entre 140 y 141 N° 2270",
    "addressLocality" : "La Plata",
    "addressRegion" : "Buenos Aires",
    "addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/lograsso"
}
</script>
						'
					),

					array(
						'id' => 'zelectricidad-santarosa',
						'img' => 'foto45',
						'logo' => 'zelectricidad',
						'numFotos' => 46,
						'razonSocial' => 'Z Electricidad Santa Rosa',
						'tel' => '+54 02954 416500',
						'web' => 'www.zelectricidad.com.ar',
						'correo' => 'ventassr@zelectricidad.com.ar',
						'ciudad' => 'Santa Rosa',
						'provincia' => 'La Pampa',
						'calle' => '9 Julio N°348',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1904.07975005528!2d-64.29672687944509!3d-36.619943063580735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c2cd0f4cd7fd3d%3A0x1198002753368dff!2sZ+Electricidad!5e0!3m2!1ses!2sar!4v1470080126180',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Z Electricidad Santa Rosa",
  "image" : "http://www.prored.com.ar/views/socios/img/zelectricidad.jpg",
  "telephone" : "+54 02954 416500",
  "email" : "ventassr@zelectricidad.com.ar",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "9 Julio N°348",
    "addressLocality" : "Santa Rosa",
    "addressRegion" : "La Pampa",
    "addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/zelectricidad-santarosa"
}
</script>
						'
					),

					array(
						'id' => 'zelectricidad-eduardo-castex',
						'img' => 'foto1',
						'logo' => 'zelectricidad',
						'numFotos' => 9,
						'razonSocial' => 'Z Electricidad Eduardo Castex',
						'tel' => '+54 02334 442956',
						'web' => 'www.zelectricidad.com.ar',
						'correo' => 'ventascastex@zelectricidad.com.ar',
						'ciudad' => 'Eduardo Castex',
						'provincia' => 'La Pampa',
						'calle' => 'Diagonal San Martin 750',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25850.5749421666!2d-64.30868687449487!3d-35.91462087898051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c352ed54f12e33%3A0x4afd5fe747818bc4!2sEduardo+Castex%2C+La+Pampa!5e0!3m2!1ses!2sar!4v1489175159827',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Z Electricidad Eduardo Castex",
  "image" : "http://www.prored.com.ar/views/socios/img/zelectricidad.jpg",
  "telephone" : "+54 02334 442956",
  "email" : "ventascastex@zelectricidad.com.ar",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Diagonal San Martin 750",
    "addressLocality" : "Eduardo Castex",
    "addressRegion" : "La Pampa",
    "addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/zelectricidad-eduardo-castex"
}
</script>
						'
					),

					array(
						'id' => 'zelectricidad-toay',
						'img' => 'foto3',
						'logo' => 'zelectricidad',
						'numFotos' => 6,
						'razonSocial' => 'Z Electricidad Toay',
						'tel' => '+54 02954 381155',
						'web' => 'www.zelectricidad.com.ar',
						'correo' => 'ventastoay@zelectricidad.com.ar',
						'ciudad' => 'Toay',
						'provincia' => 'La Pampa',
						'calle' => 'Roque Saenz Peña 1447',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3199.949310393225!2d-64.38334388415021!3d-36.675719777553404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95dd3376818d65cb%3A0x7adc8315c7684419!2sS%C3%A1enz+Pe%C3%B1a+1447%2C+L6303BPC+Toay%2C+La+Pampa!5e0!3m2!1ses!2sar!4v1470080432690',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Z Electricidad Toay",
  "image" : "http://www.prored.com.ar/views/socios/img/zelectricidad.jpg",
  "telephone" : "+54 02954 416500",
  "email" : "ventastoay@zelectricidad.com.ar",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Roque Saenz Peña 1447",
    "addressLocality" : "Toay",
    "addressRegion" : "La Pampa",
    "addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/zelectricidad-toay"
}
</script>
						'
					),

					array(
						'id' => 'zelectricidad-generalpico',
						'img' => 'foto3',
						'logo' => 'zelectricidad',
						'numFotos' => 12,
						'razonSocial' => 'Z Electricidad General Pico',
						'tel' => '+54 (02302) 332305',
						'web' => 'www.zelectricidad.com.ar',
						'correo' => 'consultas@zelectricidad.com.ar',
						'ciudad' => 'General Pico',
						'provincia' => 'La Pampa',
						'calle' => 'calle 7 1043',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.8479504351913!2d-63.75871718421861!3d-35.65611762144522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c37d583bba2b57%3A0xf08b58322a322c4e!2sElectricidad+Z!5e0!3m2!1ses!2sar!4v1470082455557',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Z Electricidad General Pico",
  "image" : "http://www.prored.com.ar/views/socios/img/zelectricidad.jpg",
  "telephone" : "+54 (02302) 332305",
  "email" : "consultas@zelectricidad.com.ar",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "calle 7 1043",
    "addressLocality" : "General Pico",
    "addressRegion" : "La Pampa",
    "addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/zelectricidad-generalpico"
}
</script>
						'
					),

					array(
						'id' => 'zelectricidad-trenquelauquen',
						'img' => 'foto4',
						'logo' => 'zelectricidad',
						'numFotos' => 6,
						'razonSocial' => 'Z Electricidad Trenque Lauquen',
						'tel' => '+54 02392-499222',
						'web' => 'www.zelectricidad.com.ar',
						'correo' => 'ventastl@zelectricidad.com.ar',
						'ciudad' => 'Trenque Lauquen',
						'provincia' => 'Buenos Aires',
						'calle' => 'Mitre 35',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4566.832965781473!2d-62.73652067402277!3d-35.965592693891516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c17c081aeece31%3A0xc7b04ad5652ab996!2sZ+Electricidad!5e0!3m2!1ses!2sar!4v1470083428837',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Z Electricidad Trenque Lauquen",
  "image" : "http://www.prored.com.ar/views/socios/img/zelectricidad.jpg",
  "telephone" : "+54 02392-499222",
  "email" : "ventastl@zelectricidad.com.ar",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Mitre 35",
    "addressLocality" : "Trenque Lauquen",
    "addressRegion" : "Buenos Aires",
    "addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/zelectricidad-trenquelauquen"
}
</script>
						'
					),

					array(
						'id' => 'zelectricidad-pehuajo',
						'img' => 'foto8',
						'logo' => 'zelectricidad',
						'numFotos' => 11,
						'razonSocial' => 'Z Electricidad Pehuajó',
						'tel' => '+54 02396 476026',
						'web' => 'www.zelectricidad.com.ar',
						'correo' => 'ricardo@zelectricidad.com.ar',
						'ciudad' => 'Pehuajó',
						'provincia' => 'Buenos Aires',
						'calle' => 'Jose Hernandez 420',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2657.9964184283613!2d-61.89538054470078!3d-35.813629901310044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c0f82c586ba0f3%3A0x4844bfb1b35ccf03!2sPehuaj%C3%B3%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1470106068638',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Z Electricidad Pehuajó",
  "image" : "http://www.prored.com.ar/views/socios/img/zelectricidad.jpg",
  "telephone" : "+54 02954 416500",
  "email" : "ricardo@zelectricidad.com.ar",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Jose Hernandez 420",
    "addressLocality" : "Pehuajó",
    "addressRegion" : "Buenos Aires",
    "addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/zelectricidad-pehuajo"
}
</script>
						'

					),

					array(
						'id' => '#',
						'img' => 'foto2',
						'logo' => 'prored',
						'numFotos' => 0,
						'razonSocial' => 'En Construcción',
						'tel' => '',
						'web' => '',
						'correo' => '',
						'ciudad' => '',
						'provincia' => '',
						'calle' => '',
						'gmaps' => '',
						'marcado' => ''
					),

					array(
						'id' => '#',
						'img' => 'foto2',
						'logo' => 'prored',
						'numFotos' => 0,
						'razonSocial' => 'En Construcción',
						'tel' => '',
						'web' => '',
						'correo' => '',
						'ciudad' => '',
						'provincia' => '',
						'calle' => '',
						'gmaps' => '',
						'marcado' => ''
					),
				  );
    }

    public function index(){
		$this->_view->assign('titulo', 'Socios - ProRed Argentina');
		$this->_view->assign('marcado', '' );
		$this->_view->assign('description', 'Listado de Socios ProRed Argentina - Distribuidores de materiales electricos de ProRed estratégicamente ubicados en las ciudades más importantes de
		Argentina. ');
		$this->_view->assign('keywords', 'ProRed Argentina','ProRed, organización, grupo, distribuidores materiales, electricos, ciudades, argentina, pro, red, socio, distribuidor, materiales, electricos');
		$this->_view->setCss(array("estilosIndex"));
		$this->_view->assign('socios', $this->socios );
        $this->_view->renderizar('index', 'socios');
	}

	public function socio(){
		$id = $this->getParams();
		$id = $id[0];
		if ($this->esValido($id, $this->socios)){
			$socio = $this->getElem($id,$this->socios);
			$this->_view->assign('titulo', $socio['razonSocial'] .' - ProRed Argentina');
			$this->_view->assign('marcado', $socio['marcado'] );
			$this->_view->assign('description', 'Nuestro socio en ProRed Argentina, ' .$socio['razonSocial'] . ' es distribuidor de Materiales electricos en ' .$socio['ciudad'] . ' ' . 'Argentina. ');
		$this->_view->assign('keywords', 'ProRed Argentina','ProRed,' . $socio['razonSocial'] . ',' .$socio['ciudad']. ',' .$socio['provincia']. ' organización, grupo, distribuidores materiales, electricos, ciudades, Argentina, pro, red');
			$this->_view->assign('socio', $socio );
        	$this->_view->renderizar('socio', 'socios');
		} else {
			$this->index();
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
