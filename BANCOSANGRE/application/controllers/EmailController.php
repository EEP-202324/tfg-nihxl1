<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

class EmailController extends CI_Controller
{
    private $mailer;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Admin/BloodManagementModel');
        $this->load->library('phpmailer_lib');
    }

    function index()
    {


        require APPPATH.'third_party/PHPMailer/src/Exception.php';
        require APPPATH.'third_party/PHPMailer/src/PHPMailer.php';
        require APPPATH.'third_party/PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);

        $mail->isSMTP();

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // $mail->Host = 'smtp.zelenza.com'; // Reemplaza con tu servidor SMTP
        // $mail->SMTPAuth = true;
        //$mail->Port = 25; // Puerto SMTP

        $mail->isSMTP();
        $mail->Host = "smtp.office365.com";
        $mail->Port = 587;
        $mail->SMTPAuth = true;

        $mail->Username = 'bancosangre-inf0@hotmail.com'; // Reemplaza con tu dirección de correo
        $mail->Password = 'BancoSangreInf0!'; // Reemplaza con tu contraseña de correo
        

        $mail->setFrom('bancosangre-inf0@hotmail.com', 'PRUEBA DANI');
        $mail->addAddress('nihalktitu@gmail.com');
        $mail->Subject = 'PRUEBA DANI';
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Body = 'HOLA MUNDO <h1>HOLA CHICOS</h1><b>zelenza</b>';
 
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }

    }

}