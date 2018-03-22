<?php

require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');

$mail = new PHPMailer();


//$mail->SMTPDebug = 3;                               // Enable verbose debug output
//$mail->isSMTP();                                      // Set mailer to use SMTP
//$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//$mail->SMTPAuth = true;                               // Enable SMTP authentication
//$mail->Username = 'soportetecnicoendomed@gmail.com';                 // SMTP username
//$mail->Password = 'soporte.00';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//$mail->Port = 587;                                    // TCP port to connect to

$message = "";
$status = "false";

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if( $_POST['name'] != '' AND $_POST['email'] != '' AND $_POST['org'] != '' AND $_POST['phone'] != '' AND $_POST['message'] != '') {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $org = $_POST['org'];
        $phone = $_POST['phone'];
		$message = $_POST['message'];

        $subject = "Nuevo contacto de tu Web Mapa IPS";

        $botcheck = '';

        $toemail = 'diego@elaniin.com'; // Your Email Address
        $toname = 'Diego A.'; // Your Name

        if( $botcheck == '' ) {

            $mail->SetFrom( $email , $name );
            //$mail->AddReplyTo( "diego.andino93@gmail.com" , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            $name = isset($name) ? "Nombre: $name<br><br>" : '';
            $email = isset($email) ? "Email: $email<br><br>" : '';
            $org = isset($org) ? "Organización: $org<br><br>" : '';
            $phone = isset($phone) ? "Teléfono: $org<br><br>" : '';
            $message = isset($message) ? "Mensaje: $message<br><br>" : '';

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$name $email $org $phone $message $referrer";

            $mail->MsgHTML( $body );
            $sendEmail = $mail->Send();

            if( $sendEmail == true ):
                $message = 'We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.';
                $status = "true";
            else:
                $message = 'Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />' . $mail->ErrorInfo . '';
                $status = "false";
            endif;
        } else {
            $message = 'Bot <strong>Detected</strong>.! Clean yourself Botster.!';
            $status = "false";
        }
    } else {
        $message = 'Please <strong>Fill up</strong> all the Fields and Try Again.';
        $status = "false";
    }
} else {
    $message = 'An <strong>unexpected error</strong> occured. Please Try Again later.';
    $status = "false";
}

$status_array = array( 'message' => $message, 'status' => $status);
//echo json_encode($status_array);
echo "<script>window.location = 'http://toolboxsv.com/dev/Mapa-ips/frontend/index.php'</script>";
?>