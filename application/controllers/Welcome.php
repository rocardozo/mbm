<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//carga el autoload de la carpeta vendor
require_once 'vendor/autoload.php';

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Welcome extends CI_Controller {
	


//*
// Esta función me carga la sección Empresa
//*
	public function index()
	{
		$this->load->view('head_view');
		$data = array(
			'activo' => 1
			);
		$this->load->view('menu_view', $data);
		$this->load->view('empresa_view');
		$this->load->view('footer_view');
	}



//*
// Esta función me carga la sección Servicios
//*
	public function servicios()
	{
		$this->load->view('head_view');
		$data = array(
			'activo' => 2
			);
		$this->load->view('menu_view', $data);
		$this->load->view('servicios_view');
		$this->load->view('footer_view');
	}



//*
// Esta función me carga la sección Soluciones
//*
	public function soluciones()
	{
		$this->load->view('head_view');
		$data = array(
			'activo' => 3
			);
		$this->load->view('menu_view', $data);
		$this->load->view('soluciones_view');
		$this->load->view('footer_view');
	}



//*
// Esta función me carga la sección Contacto 
//*
	public function contacto()
	{
		$this->load->view('head_view');
		$data = array(
			'activo' => 4
			);
		$this->load->view('menu_view', $data);

		$data2 = array(
			'error'  => $this->session->flashdata('error'),
			'exito'  => $this->session->flashdata('exito') 
		);
		$this->load->view('contacto_view', $data2);
		$this->load->view('footer_view');
	}



//*
// Esta funcion envia un mail a ventas@antanetsa.com.ar
//*

	public function enviar_mail()
	{
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$asunto = $_POST['asunto'];
		$mensaje = $_POST['mensaje'];

		//---Enviar mail usando phpmailer---//

		

	    // Instantiation and passing `true` enables exceptions
	    $mail = new PHPMailer(true);

	    try {
	        //Server settings
	        $mail->SMTPDebug = 2;                // habilita el debug de la conversacion entre el cliente y el servidor
	        $mail->isSMTP();                                      // Set mailer to use SMTP
	        $mail->Host       = 'mail.lulapedidos.com.ar';  // Specify main and backup SMTP servers
	        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	        $mail->Username   = 'soporte@antanetsa.com.ar';                     // SMTP username
	        $mail->Password   = 'P09Gj1sNsW2HqmBy';                               // SMTP password
	        $mail->SMTPSecure = 'true';
	        // Enable TLS encryption, `ssl` also accepted
	        $mail->Port       = 587;   // TCP port to connect to
	        $mail->SMTPSecure = 'tls';
	        
	        $mail->SMTPOptions = array(
	            'ssl' => array(
	                'verify_peer' => false,
	                'verify_peer_name' => false,
	                'allow_self_signed' => true
	            )
	        );            
	        
	        //de
	        $mail->setFrom('soporte@antanetsa.com.ar', 'WEB MBM SISTEMAS!!!');
	        //para
	        $mail->addAddress('rodrigocardozo86@gmail.com');     // Add a recipient
	        //$mail->addAddress('ellen@example.com');               // Name is optional
	        //responder a 
	        $mail->addReplyTo($email);
	        //$mail->addCC('cc@example.com');
	        //$mail->addBCC('bcc@example.com');

	        // Attachments
	        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	        // Content
	        $mail->isHTML(true);                                  // Set email format to HTML
	        $mail->Subject = $asunto;
	        $mail->Body    = "Nombre: $nombre <br>
							  Correo: $email <br>
							  Mensaje: $mensaje <br>";

	        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	        $mail->send();
	        //echo 'Message has been sent';
	        $this->session->set_flashdata('exito', 'Email enviado exitosamente...');
	            
	    } catch (Exception $e) {
	        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	        $this->session->set_flashdata('error', 'El mensaje no pudo ser enviado, reintente mas tarde...');
	    }
			
		//---- Fin de envio de mail----//
		redirect(base_url().'welcome/contacto');
	}




}
