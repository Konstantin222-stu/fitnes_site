<?php
$headers =	'From: no-reply@example.com' . "\r\n" .
			'Reply-To: webmaster@example.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
    if (isset($_POST['to']))
        if (mail($_POST['to'], " ", " ", $headers)) {
            echo '<font color=red><b>письмо отправлено</b></font>';
            header("Location: index.html");
        } else {
            echo '<font color=red><b>что-то пошло не так...</b></font>';
            header("Location: index.html");
        }
?>