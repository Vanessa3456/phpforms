<?php 
if (isset($_POST["email"])) {
    $email = $_POST["email"];

    $token=bin2hex(random_bytes(16));

    $token_hash=hash("sha256",$token);

    $expire_at = date("Y-m-d H:i:s", time() + 60 * 60); // token will be valid for 1 hour

    $mysqli= require __DIR__ . '/connect.php';

    $sql="UPDATE users
    SET reset_token_hash=?,
    reset_token_expires_at =?
    WHERE email=?";

    $stmt=$mysqli->prepare($sql);

    $stmt->bind_param("sss", $token_hash , $expire_at,$email);

    $stmt->execute();

    if($stmt ->affected_rows){
        $mail = require __DIR__ . "/mailer.php";

       $mail->setFrom("vanessarosepaul7@gmail.com");
       $mail->addAddress($email);
       $mail->Subject="Password reset";
       $mail->isHTML(true); // Set email format to HTML

       $mail->Body=<<<END
       Click <a href="http://localhost/loginassignment/reset-password.php?token=$token">here</a> to reset your password.
       END;
       try{
        $mail->send();
       }catch(Exception $e){
        echo  "Message could not be sent.Mailer Error :{$mail->ErrorInfo}";

    }

    
    }
    echo "Message sent,please check your inbox";
}
?>
