<?php
if (isset($_POST['site_form_id'])) {$site_form_id = $_POST['site_form_id'];}
if (isset($_POST['sait'])) {$sait = $_POST['sait'];}
if (isset($_POST['ima_kl'])) {$ima_kl = $_POST['ima_kl'];}
if (isset($_POST['telefon_lida'])) {$telefon_lida = $_POST['telefon_lida'];}
if (isset($_POST['ip_lida'])) {$ip_lida = $_POST['ip_lida'];}
if (isset($_POST['1_referer'])) {$1_referer = $_POST['1_referer'];}
if (isset($_POST['utm_source'])) {$utm_source = $_POST['utm_source'];}
if (isset($_POST['utm_medium'])) {$utm_medium = $_POST['utm_medium'];}
if (isset($_POST['utm_campaign'])) {$utm_campaign = $_POST['utm_campaign'];}
if (isset($_POST['utm_term'])) {$utm_term = $_POST['utm_term'];}
if (isset($_POST['utm_content'])) {$utm_content = $_POST['utm_content'];}
if (isset($_POST['utm_keyword'])) {$utm_keyword = $_POST['utm_keyword'];}
if (isset($_POST['str_perehoda'])) {$str_perehoda = $_POST['str_perehoda'];}
if (isset($_POST['metka'])) {$metka = $_POST['metka'];}

/*header("Content-type: text/html; charset=utf-8");
*/
$to = 'vspox23@gmail.com';

$date = date("d.m.Y");
$time = date("H:i");

$subject = "Заявка ".$sait." ".$date." ".$time;

    $message = '
    <html>
    <head>
    <title>'.$subject.'</title>
    </head>
    <body>
    <p>Имя покупателя: '.$ima_kl.'</p>
	<p>Телефон покупателя: '.$telefon_lida.'</p>
    </body>
    </html>';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf8\r\n";

$headers .= "From: ".$sait." <info@".$sait.">\r\n";
$headers .= "Reply-To: info@".$sait."\r\n";

$headers .= "X-Mailer: PHP/" . phpversion();

// if(!empty($_POST['ima_kl']) && !empty($_POST['telefon_lida'])) {

// mail($to, $subject, $message, $headers);

// }

header( 'Location: /success.php', true, 303 );
?>






		
