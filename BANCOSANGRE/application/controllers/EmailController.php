<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';
require 'third_party/PHPMailer/src/Exception.php';
require 'third_party/PHPMailer/src/PHPMailer.php';
require 'third_party/PHPMailer/src/SMTP.php';


class EmailController extends CI_Controller
{
    private $mailer;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Admin/BloodManagementModel');

        $this->mailer = new PHPMailer(true);

        
        $this->mailer->isSMTP();
        $this->mailer->Host = 'smtp.gmail.com';
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = 'cosas.ni01@gmail.com'; 
        $this->mailer->Password = '@RaYa0810+'; 
        $this->mailer->SMTPSecure = 'tls';
        $this->mailer->Port = 587;

        $this->mailer->setFrom('bloodbank@gmail.com', 'Banco de Sangre'); 
        $this->mailer->isHTML(true);

    }

    public function index()
{
    $lowest_blood_type = $this->BloodManagementModel->get_lowest_blood_type();

    $donors = $this->BloodManagementModel->get_donors_by_blood_type($lowest_blood_type['type'], $lowest_blood_type['rh_factor']);

    $subject = "URGENTE! DONAR ES VIDA";

    $body = "
    Estimado/a donante,

    Esperamos que este mensaje le encuentre bien. Nos dirigimos a usted con gran urgencia y sinceridad para informarle sobre una situación crítica en nuestro banco de sangre.

    Hemos identificado que su tipo de sangre es uno de los que escasean en nuestras reservas actuales. En estos momentos, su donación de sangre podría marcar la diferencia entre la vida y la muerte para alguien en necesidad urgente.

    Por favor, considere generosamente la posibilidad de donar sangre en nuestro centro. Su acto de solidaridad y compasión puede salvar vidas y brindar esperanza a aquellos que luchan por su salud.

    Recuerde que donar sangre es un gesto noble y altruista que tiene un impacto directo en la vida de quienes lo necesitan. Juntos, podemos hacer una diferencia significativa en nuestra comunidad.

    Agradecemos de antemano su valiosa contribución y estamos disponibles para cualquier pregunta o inquietud que pueda tener. Por favor, no dude en comunicarse con nosotros para obtener más información sobre cómo puede ayudar.

    Gracias por su atención y consideración.

    Atentamente,
    Bloodbank.com
    ";

    foreach ($donors as $donor) {
        $this->sendEmail($donor['email'], $subject, $body);
    }

    echo "Los emails han sido enviados";
}

    

    public function sendEmail($to, $subject, $body)
    {
        try {
            $this->mailer->addAddress($to);

            $this->mailer->Subject = $subject;
            $this->mailer->Body = $body;

            $this->mailer->send();

            $this->mailer->clearAddresses();
            $this->mailer->clearAttachments();

            return true; 
        } catch (Exception $e) {
            return false; 
        }
    }
}
