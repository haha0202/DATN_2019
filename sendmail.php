<?php 

	include  "PHPMailer-master/src/PHPMailer.php";
	include  "PHPMailer-master/src/Exception.php";
	include  "PHPMailer-master/src/OAuth.php";
	include  "PHPMailer-master/src/POP3.php";
	include  "PHPMailer-master/src/SMTP.php";
	 
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
    //$gmail=$_SESSION['login']['mail'];
    // echo "<pre>";
    // print_r($gmail);die;
    // echo "</pre>";
    
	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'hahahoho2296@gmail.com';                 // SMTP username
    $mail->Password = 'haha0373274024';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->CharSet  = "utf-8";
    $mail->setFrom('hahahoho2296@gmail.com', 'dược phẩm Linh Khuê Đường');
    // $mail->addAddress('nangthanh2296@gmail.com', 'Joe User');     // Add a recipient
    $mail->addAddress('nangthanh2296@gmail.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Xác nhận mua hàng';
    $mail->Body    = ' Cảm ơn bạn đã mua hàng của chúng tôi <b> Đọc kỹ hướng dẫn sử dụng trước khi dùng!</b>';
    $mail->AltBody = '';

    $mail->send();
    echo 'Message has been sent';

} catch (Exception $e) {
	
}
?>