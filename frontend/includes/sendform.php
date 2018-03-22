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
    if( $_POST['name'] != '' && $_POST['nameorg'] != '' && $_POST['clasif'] != '' && $_POST['actprinc'] != '' && $_POST['purpose'] != '' && $_POST['actesp'] != '') {

        $name = $_POST['name'];
        $nameorg = $_POST['nameorg'];
        $clasif = $_POST['clasif'];
        $actprinc = $_POST['actprinc'];
        $purpose = $_POST['purpose'];
        $actesp = $_POST['actesp'];
        $urlmedia = $_POST['urlmedia'];
        $benef = $_POST['benef'];
        $geo = $_POST['geo'];
        $publi = $_POST['publi'];
        $priv = $_POST['priv'];
        $metric = $_POST['metric'];
        $nameenc = $_POST['nameenc'];
        $position = $_POST['position'];
        $contmail = $_POST['contmail'];
        $urlweb = $_POST['urlweb'];
        $phone = $_POST['phone'];

        $subject = "Nueva Ficha Involucrate de tu Web Mapa IPS";

        $botcheck = '';

        $toemail = 'diego@elaniin.com'; // Your Email Address
        $toname = 'Diego A.'; // Your Name

        if( $botcheck == '' ) {

            $mail->SetFrom( "diego@elaniin.com" , "Nueva Ficha" );
            //$mail->AddReplyTo( "diego.andino93@gmail.com" , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            $name = isset($name) ? "Nombre: $name<br><br>" : '';
            $nameorg = isset($nameorg) ? "Nombre de la organización: $nameorg<br><br>" : '';
            $clasif = isset($clasif) ? "Clasificación de la organización: $clasif<br><br>" : '';
            $actprinc = isset($actprinc) ? "Actividades Principales: $actprinc<br><br>" : '';
            $purpose = isset($purpose) ? "Proposito del proyecto: $purpose<br><br>" : '';
            $actesp = isset($actesp) ? "Actividades específicas: $actesp<br><br>" : '';
            $urlmedia = isset($urlmedia) ? "Link del video explícativo: $urlmedia<br><br>" : '';
            $benef = isset($benef) ? "Cantidad de beneficiarios directos al proyecto: $benef<br><br>" : '';
            $geo = isset($geo) ? "Aréa Geografica: $geo<br><br>" : '';
            $publi = isset($publi) ? "Insituciones públicas: $publi<br><br>" : '';
            $priv = isset($priv) ? "Instituciones privadas: $priv<br><br>" : '';
            $metric = isset($metric) ? "Indicadores o metricas para la medición del impacto: $metric<br><br>" : '';
            $nameenc = isset($nameenc) ? "Nombre de la persona encargada del proyecto: $nameenc<br><br>" : '';
            $position = isset($position) ? "Cargo adentro de la organización: $position<br><br>" : '';
            $contmail = isset($contmail) ? "Correo de contacto: $contmail<br><br>" : '';
            $urlweb = isset($urlweb) ? "Url de la organización: $urlweb<br><br>" : '';
            $phone = isset($phone) ? "Teléfono: $phone<br><br>" : '';
            for($i=1; $i<=20; $i++){
                if(!empty($_POST[$i])){
                    if($i==1){
                        $objetivos=$_POST[$i];
                    }
                    else{
                        $objetivos=$objetivos.", ".$_POST[$i];
                    }
                }
            }
            $fullobjetivos="Objetivos de desarrollo sostenible a los que contribuye: ".$objetivos."<br><br>";

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$name $nameorg $clasif $actprinc $fullobjetivos $purpose $actesp $urlmedia $benef $geo $publi $priv $metric $nameenc $position $contmail $urlweb $phone  $referrer";

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
//echo "<script>window.location = 'http://toolboxsv.com/dev/Mapa-ips/frontend/index.php'</script>";
echo "<script>window.location = 'http://toolboxsv.com/dev/Mapa-ips/frontend/contacto.php?s=ci'</script>";
?>