<?php


class contactoController extends Controller
{    
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function index($campos = ''){
		
        $this->_view->assign('titulo', 'Contacto - ProRed Argentina');
		$this->_view->assign('description', 'ProRed Argentina tiene su sede en la ciudad de La Plata y estratégicamente ubicado en varias provincias de Argentina. Contamos con este formulario de contacto y nuestro correo contacto@prored.com.ar para que pueda ponerse en contacto con nosotros por cualquier inquietud. Contamos también con número de teléfono y estamos en las redes sociales.');
		$this->_view->assign('keywords', 'ProRed Argentina', 'ProRed, La PLata, Argentina, contacto, telefono, correo, redes sociales, facebook, direccion');
		$this->_view->assign('marcado', '');
		$this->_view->assign('campos', $campos);
		$this->_view->setJs(array('validacion'));
        $this->_view->renderizar('index','contacto');
		
	}
	
	public function sumate($campos = ''){
        $this->_view->assign('titulo', 'Sumate a la Red  - ProRed Argentina');
		$this->_view->assign('description', 'Unase a nuestra red. En ProRed Argentina lo etsamos esperando. Tenemos nuestra sede en la ciudad de La Plata y estratégicamente ubicado en varias provincias de Argentina. Contamos con este formulario de contacto y nuestro correo contacto@prored.com.ar para que pueda ponerse en contacto con nosotros por cualquier inquietud. Contamos también con número de teléfono y estamos en las redes sociales.');
		$this->_view->assign('keywords', 'ProRed Argentina','ProRed, La PLata, Argentina, contacto, sumate, sumate a la red, red, productos, electricos, telefono, correo, redes sociales, facebook, direccion');
		$this->_view->assign('marcado', '');
		$this->_view->assign('campos', $campos);
		$this->_view->setJs(array('validacion'));
        $this->_view->renderizar('index','contacto');
		
	}
	
	
	public function enviar(){
	
		if(!$this->getTexto('apellido')){
            $this->_view->assign('_error', 'Debe introducir su Apellido.');
            $this->redireccionarContacto($_POST);
            exit;
        } else if(preg_match('[^A-Za-zñÑ ]', $this->getPostParam('apellido'))) {
			$this->_view->assign('_error', 'El apellido introducido no es un Apellido valido.');
            $this->redireccionarContacto($_POST);
            exit;
		}
		
		if(!$this->getTexto('nombre')){
            $this->_view->assign('_error', 'Debe introducir su Nombre.');
            $this->redireccionarContacto($_POST);
            exit;
        } else if(preg_match('[^A-Za-zñÑ ]', $this->getPostParam('nombre'))) {
			$this->_view->assign('_error', 'El nombre introducido no es un nombre valido.');
            $this->redireccionarContacto($_POST);
            exit;
		}
		
		if(!$this->getAlphaNum('razonSocial')){
            $this->_view->assign('_error', 'Debe introducir su Razon Social');
            $this->redireccionarContacto($_POST);
            exit;
        }
		
		if(!$this->getTexto('localidad')){
            $this->_view->assign('_error', 'Debe introducir su Localidad');
            $this->redireccionarContacto($_POST);
            exit;
        } else if(preg_match('[^A-Za-zñÑ ]', $this->getPostParam('localidad'))) {
			$this->_view->assign('_error', 'La localidad introducida no es una localidad valida.');
            $this->redireccionarContacto($_POST);
            exit;
		}
		
		if(!$this->getTexto('telefono')){
            $this->_view->assign('_error', 'Debe introducir su Telefono. Ingrese solo números.');
            $this->redireccionarContacto($_POST);
            exit;
        } else if(preg_match('[^0-9 ]', $this->getPostParam('telefono'))) {
			$this->_view->assign('_error', 'El teléfono introducido no es un teléfono valido. Ingrese solo números.');
            $this->redireccionarContacto($_POST);
            exit;
		}
		
		if(!$this->validarEmail($this->getPostParam('correo'))){
            $this->_view->assign('_error', 'Debe introducir su Correo.');
            $this->redireccionarContacto($_POST);
            exit;
        }
		
		
		$this->getLibrary('PHPMailer');
		$this->getLibrary('SMTP');
		$this->getLibrary('Exception');
		
		$mail = new PHPMailer(true);
		try{
			//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host       = 'c1720206.ferozo.com';                  // Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = 'no-reply@prored.com.ar';               // SMTP username
			$mail->Password   = 'Redpro2020';                           // SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
			$mail->Port       = 465; 

			$mail->From = 'no-reply@prored.com.ar';
			$mail->FromName = 'No reply - Contacto ProRed' . $this->getPostParam('tipoContacto');
			$mail->Subject = 'Mensaje de ' . $this->getPostParam('apellido') . ' ' . $this->getPostParam('nombre') ;
			$mail->Body = '<p>
							<h3> ' . $this->getPostParam('apellido') . ' ' . $this->getPostParam('nombre') . ' envio el siguiente mensaje en: ' . $this->getPostParam('tipoContacto') . '</h3><br> 
								 ' . $this->getTexto('consulta') . '<br><br>
								 <u>Sus datos para contactarlo son:</u> <br>
								 <ul>	
									<li>Nombre: ' . $this->getPostParam('nombre') . '</li>
									<li>Apellido: ' . $this->getPostParam('apellido') . '</li>
									<li>Razon Social: ' . $this->getPostParam('razonSocial') . '</li>
									<li>Localidad: ' . $this->getPostParam('localidad') . '</li>
									<li>Telefono: ' . $this->getPostParam('telefono') . '</li>
									<li>Correo: ' . $this->getPostParam('correo') . '</li>
								 </ul>
						   </p>' ;
			$mail->AltBody = 'Su servidor de correo no soporta html';

			$mail->AddAddress("contacto@prored.com.ar");
			$mail->AddBCC("fedproducciones@gmail.com");
			$mail->AddBCC("albbil3@hotmail.com");
			
			if($mail->send()) {
				$this->_view->assign('_mensaje', 'Su mensaje ha sido enviado correctamente. Pronto sera contactado.');
			} else {
				$this->_view->assign('_error', 'Hubo un error al enviar el mensaje. Por favor intentelo nuevamente <br><br>' . $mail->ErrorInfo );
			}
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}		
		
		$mail = new PHPMailer(true);
		try {
			//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host       = 'c1720206.ferozo.com';                  // Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = 'contacto@prored.com.ar';               // SMTP username
			$mail->Password   = 'Redpro2020';                           // SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
			$mail->Port       = 465; 

			$mail->From = 'contacto@prored.com.ar';
			$mail->FromName = 'Contacto ProRed Argentina';
			$mail->Subject = 'Aviso de entrega de mensaje de contacto';
			$mail->Body = '<p style="text-align:center;">
							<h2>Gracias por enviarnos tu consulta.</h2> <br>
							
							Lo antes posible sera contactado por nosotros desde ProRed para enviarle la respuesta a su mensaje.<br><br>
							
							www.prored.com.ar<br><br>
							
							<i>Por favor no responda este correo</i>
						  </p>' ;


			$mail->AltBody = 'Su servidor de correo no soporta html';
			$mail->AddAddress($this->getPostParam('correo'));
			$mail->send();

		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}		
		
		$this->redireccionarContacto();
	}
	
	private function redireccionarContacto($campos = ''){
		if ($this->getPostParam('tipoContacto') == 'Sumate a la Red'){
			$this->sumate($campos);
		} else {
			$this->index($campos);
		}
	}
}

?>