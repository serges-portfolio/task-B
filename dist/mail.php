<?php
if (isset($_POST['site_form_id'])) {$site_form_id = $_POST['site_form_id'];}
if (isset($_POST['sait'])) {$sait = $_POST['sait'];}
if (isset($_POST['ima_kl'])) {$ima_kl = $_POST['ima_kl'];}
if (isset($_POST['telefon_lida'])) {$telefon_lida = $_POST['telefon_lida'];}
if (isset($_POST['ip_lida'])) {$ip_lida = $_POST['ip_lida'];}
if (isset($_POST['1_referer'])) {$referer = $_POST['1_referer'];}
if (isset($_POST['utm_source'])) {$utm_source = $_POST['utm_source'];}
if (isset($_POST['utm_medium'])) {$utm_medium = $_POST['utm_medium'];}
if (isset($_POST['utm_campaign'])) {$utm_campaign = $_POST['utm_campaign'];}
if (isset($_POST['utm_term'])) {$utm_term = $_POST['utm_term'];}
if (isset($_POST['utm_content'])) {$utm_content = $_POST['utm_content'];}
if (isset($_POST['utm_keyword'])) {$utm_keyword = $_POST['utm_keyword'];}
if (isset($_POST['str_perehoda'])) {$str_perehoda = $_POST['str_perehoda'];}
if (isset($_POST['metka'])) {$metka = $_POST['metka'];}
if (isset($_POST['help_doc_name'])) {$help_doc_name = $_POST['help_doc_name'];}
if (isset($_POST['help_doc_phone'])) {$help_doc_phone = $_POST['help_doc_phone'];}
if (isset($_POST['help_doc_email'])) {$help_doc_email = $_POST['help_doc_email'];}
if (isset($_POST['callback_name'])) {$callback_name = $_POST['callback_name'];}
if (isset($_POST['callback_question'])) {$callback_question = $_POST['callback_question'];}
if (isset($_POST['callback_tel'])) {$callback_tel = $_POST['callback_tel'];}
if (isset($_POST['calculate'])) {$calculate = $_POST['calculate'];}


header("Content-type: text/html; charset=utf-8");

$to = 'vspox23@gmail.com'; /* Почта, на которую будут приходить заявки*/

$date = date("d.m.Y");
$time = date("H:i");

$subject = "Заявка ".$sait." ".$date." ".$time;

    $message = '
    <html>
    <head>
    <title>'.$subject.'</title>
    </head>
    <body>
    <h2>Консультация дизайнера</h2>
    <p>Имя покупателя: '.$ima_kl.'</p>
	<p>Телефон покупателя: '.$telefon_lida.'</p>
	<h2>Запрос на рабочую документацию</h2>
	<p>Имя покупателя: '.$help_doc_name.'</p>
	<p>Телефон покупателя: '.$help_doc_phone.'</p>
	<p>Почта покупателя: '.$help_doc_email.'</p>
	<h2>Оставшиеся вопросы</h2>
	<p>Имя клиента: '.$callback_name.'</p>
	<p>Вопрос клиента: '.$callback_question.'</p>
	<p>Телефон клиента: '.$callback_tel.'</p>
    </body>
    </html>';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf8\r\n";

$headers .= "From: ".$sait." <info@".$sait.">\r\n";
$headers .= "Reply-To: info@".$sait."\r\n";

$headers .= "X-Mailer: PHP/" . phpversion();

 if(!empty($_POST['ima_kl']) && !empty($_POST['telefon_lida'])) {

 mail($to, $subject, $message, $headers);

 }

 if(!empty($_POST['help_doc_name']) && !empty($_POST['help_doc_phone']) && !empty($_POST['help_doc_email']))
        {

        mail($to, $subject, $message, $headers);

        }

 if(!empty($_POST['callback_name']) && !empty($_POST['callback_question']) && !empty($_POST['callback_tel']))
        {

        mail($to, $subject, $message, $headers);

        }

header( 'Location: ./success.php', true, 303 );
?>




		
