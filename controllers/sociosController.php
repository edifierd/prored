<?php

class sociosController extends Controller
{    

	private $socios;
	
    public function __construct() 
    {
        parent::__construct();
		
		$this->socios = array (
			
			array(
 						'id' => 'homero',
 						'img' => 'foto19',
 						'logo' => 'homero',
 						'numFotos' => 19,
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
  "url" : "http://www.prored.com.ar/socios/socio/homero"
  </script>'),
					
					array(
						'id' => 'rigelec',
						'img' => 'foto22',
						'logo' => 'rigelec',
						'numFotos' => 22,
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
						'id' => 'todoluz',
						'img' => 'foto10',
						'logo' => 'todoluz',
						'numFotos' => 12,
						'razonSocial' => 'Todoluz',
						'tel' => '+54 (0298) 442-5640 / 442-4996 / 443-3050 <br> Fax y Lineas rotativas',
						'web' => 'www.todoluz.com.ar',
						'correo' => 'todoluz@todoluz.com.ar',
						'ciudad' => 'General Roca',
						'provincia' => 'Río Negro',
						'calle' => 'Av. J. A. Roca 525',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12395.753215589062!2d-67.5780976!3d-39.0395261!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x960a1d3661760ddf%3A0x779425eef6904c8a!2sAv.+Gral.+Julio+Argentino+Roca+525%2C+Gral.+Roca%2C+R%C3%ADo+Negro!5e0!3m2!1ses!2sar!4v1489167516805',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Todo Luz",
  "image" : "http://www.prored.com.ar/views/socios/img/todoluz.jpg",
  "telephone" : "+54 (0298) 442-5640",
  "email" : "todoluz@todoluz.com.ar",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Av. J. A. Roca 525",
    "addressLocality" : "General Roca",
    "addressRegion" : "Río Negro",
    "addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/todoluz"
}
</script>
						'
					),
					
					array(
						'id' => 'electricidad-lavalle',
						'img' => 'foto15',
						'logo' => 'electricidad-lavalle',
						'numFotos' => 18,
						'razonSocial' => 'Electricidad Lavalle',
						'tel' => '+54 2314-427278 ',
						'web' => '',
						'correo' => 'electricidadlavalle@hotmail.com electricidadlavalle@yahoo.com.ar',
						'ciudad' => 'Bolivar',
						'provincia' => 'Buenos Aires',
						'calle' => 'Materiales Eléctricos y Construcción:<br> Bartolome Mitre 550 entre Las Heras y Alvear <br> Próximamente: Juan Manuel de Rosas 750',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d804.568936655362!2d-61.113622170763605!3d-36.23279499875433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bfe31693447227%3A0xbe1b08ddea1a95d9!2sBartolom%C3%A9+Mitre+521%2C+B6550BMF+San+Carlos+de+Bolivar%2C+Buenos+Aires%2C+Argentina!5e0!3m2!1ses!2sus!4v1490209304484',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Electrolum",
  "image" : "http://www.prored.com.ar/views/socios/img/electricidad-lavalle.jpg",
  "telephone" : "+54 2314-427278",
  "email" : "electricidadlavalle@hotmail.com",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Bartolomé Mitre 550",
    "addressLocality" : "General Lavalle",
    "addressRegion" : "Buenos Aires",
    "addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/electricidad-lavalle"
}
</script>
						'
					),
					
					
					array(
						'id' => 'electricidad-lavalle-iluminacion',
						'img' => 'foto1',
						'logo' => 'electricidad-lavalle',
						'numFotos' => 13,
						'razonSocial' => 'Electricidad Lavalle (Iluminación)',
						'tel' => '+54 2314-427278 ',
						'web' => '',
						'correo' => 'electricidadlavalle@hotmail.com electricidadlavalle@yahoo.com.ar',
						'ciudad' => 'Bolivar',
						'provincia' => 'Buenos Aires',
						'calle' => 'Sarmiento 758 entre Almirante Brown y Av. Belgrano',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d804.6122114182825!2d-61.113165670747556!3d-36.228586898754386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bfe3148b8b8af3%3A0x55568786d75324d7!2sDomingo+Faustino+Sarmiento+769%2C+B6550CKO+San+Carlos+de+Bolivar%2C+Buenos+Aires%2C+Argentina!5e0!3m2!1ses!2sus!4v1490209485032',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Electrolum",
  "image" : "http://www.prored.com.ar/views/socios/img/electricidad-lavalle.jpg",
  "telephone" : "+54 02972 428222",
  "email" : "electricidadlavalle@hotmail.com",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Sarmiento 758",
    "addressLocality" : "General Lavalle",
    "addressRegion" : "Buenos Aires",
    "addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/electrolum"
}
</script>
						'
					),
					

					array(
						'id' => 'electrolum',
						'img' => 'foto3',
						'logo' => 'electrolum',
						'numFotos' => 19,
						'razonSocial' => 'Electrolum',
						'tel' => '+54 02972 428222',
						'web' => '',
						'correo' => 'electrolum@smandes.com.ar',
						'ciudad' => 'San Martin De los Andes',
						'provincia' => 'Neuquén',
						'calle' => 'Perito Moreno 910, esquina Belgrano',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1524.7264742194805!2d-71.35152825757842!3d-40.15446783145114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96110e76f6fdfe83%3A0xcadb25afa6170d9e!2sElectrolum!5e0!3m2!1ses!2sar!4v1470079433575',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Electrolum",
  "image" : "http://www.prored.com.ar/views/socios/img/electrolum.jpg",
  "telephone" : "+54 02972 428222",
  "email" : "electrolum@smandes.com.ar",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Perito Moreno 910, esquina Belgrano",
    "addressLocality" : "San Martin De los Andes",
    "addressRegion" : "Neuquén",
    "addressCountry" : "Argentina"
  },
  "url" : "http://www.prored.com.ar/socios/socio/electrolum"
}
</script>
						'
					),
					
					array(
						'id' => 'horizonte',
						'img' => 'foto5',
						'logo' => 'horizonte',
						'numFotos' => 9,
						'razonSocial' => 'Horizonte',
						'tel' => '+54 0388-4253402 / 4257110',
						'web' => '',
						'correo' => 'ventas@horizontejujuy.arnetblz.com.ar<br>servicios@horizontejujuy.arnetblz.com.ar',
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
  "email" : "ventas@horizontejujuy.arnetblz.com.ar",
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
						'id' => 'horizonte-luz',
						'img' => 'foto4',
						'logo' => 'horizonte-añosluz',
						'numFotos' => 11,
						'razonSocial' => 'Horizonte Años Luz',
						'tel' => '+54 0388-4242111 / 4227777',
						'web' => '',
						'correo' => 'horizontenecochea@horizontesrl.arnetblz.com.ar',
						'ciudad' => 'San Salvador de Jujuy',
						'provincia' => 'Jujuy',
						'calle' => 'Gral. Necochea 248',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d765.1299228410072!2d-65.30418014136664!3d-24.18604490693721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941b0f417ac3dcff%3A0xdc4006ae68121f88!2sA+os+Luz+Horizonte+SRL!5e0!3m2!1ses!2sar!4v1470079671776',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Horizonte Años Luz",
  "telephone" : "+54 0388-4242111 / 4227777",
  "email" : "horizontenecochea@horizontesrl.arnetblz.com.ar",
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
						'img' => 'foto41',
						'logo' => 'zelectricidad',
						'numFotos' => 43,
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
						'numFotos' => 6,
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
						'numFotos' => 5,
						'razonSocial' => 'Z Electricidad Toay',
						'tel' => '+54 02954 416500',
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
						'numFotos' => 11,
						'razonSocial' => 'Z Electricidad General Pico',
						'tel' => '+54 02954 416500',
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
  "telephone" : "+54 02954 416500",
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
						'img' => 'foto1',
						'logo' => 'zelectricidad',
						'numFotos' => 9,
						'razonSocial' => 'Z Elec. Trenque Lauquen',
						'tel' => '+54 02391 43-0834',
						'web' => 'www.zelectricidad.com.ar',
						'correo' => 'consultastl@zelectricidad.com.ar',
						'ciudad' => 'Trenque Lauquen',
						'provincia' => 'Buenos Aires',
						'calle' => 'Villegas 34',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4566.832965781473!2d-62.73652067402277!3d-35.965592693891516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c17c081aeece31%3A0xc7b04ad5652ab996!2sZ+Electricidad!5e0!3m2!1ses!2sar!4v1470083428837',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Z Electricidad Trenque Lauquen",
  "image" : "http://www.prored.com.ar/views/socios/img/zelectricidad.jpg",
  "telephone" : "+54 02391 43-0834",
  "email" : "consultastl@zelectricidad.com.ar",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Villegas 34",
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
						'img' => 'foto6',
						'logo' => 'zelectricidad',
						'numFotos' => 9,
						'razonSocial' => 'Z Electricidad Pehuajó',
						'tel' => '+54 02954 416500',
						'web' => 'www.zelectricidad.com.ar',
						'correo' => 'consultasph@zelectricidad.com.ar',
						'ciudad' => 'Pehuajó',
						'provincia' => 'Buenos Aires',
						'calle' => 'Zanni 407 Esquina del Valle',
						'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2657.9964184283613!2d-61.89538054470078!3d-35.813629901310044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c0f82c586ba0f3%3A0x4844bfb1b35ccf03!2sPehuaj%C3%B3%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1470106068638',
						'marcado' => '
							<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Z Electricidad Pehuajó",
  "image" : "http://www.prored.com.ar/views/socios/img/zelectricidad.jpg",
  "telephone" : "+54 02954 416500",
  "email" : "consultasph@zelectricidad.com.ar",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Zanni 407 Esquina del Valle",
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
					
					array(
						'id' => '#',
						'img' => 'foto19',
						'logo' => 'prored',
						'numFotos' => 19,
						'razonSocial' => 'Homero & CIA',
						'tel' => '+54 0297 4481748',
						'web' => 'www.homerosrl.com.ar',
						'correo' => 'gustavo@homerosrl.com.ar',
						'ciudad' => '',
						'provincia' => '',
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
</script>
						' 
					)
					
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
