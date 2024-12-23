<?php 
$token=$_GET["token"];
$token_hash=hash("sha256",$token);
$mysqli=require __DIR__."/connect.php";
$sql="Select * from users where reset_token_hash=?";

$stmt=$mysqli->prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result=$stmt->get_result();

$user=$result->fetch_assoc();

if($user==null){
    die("token not found");
    
}
if(strtotime($user["reset_token_expires_at"])){
    die("token expired");
}
echo "valid token";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset password</title>

</head>
<body>
    
<h1> Reset Password </h1>
<form method="post" action="process-reset-password.php">
    <input type="hidden" name="token" value ="<?=htmlspecialchars($token)?>">
    <label for="password">New Password:</label>
    <input type="password" id="password" name="password" required>
    <label for="password-confirm">Confirm Password:</label>
    <input type="password" id="password-confirm" name="password-confirm" required>

    <button>Send</button>


</form>

</body>
</html>