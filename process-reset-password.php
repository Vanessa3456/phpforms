<?php
$token=$_POST["token"];
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
$sql="UPDATE users SET password=? ,reset_token_hash=NULL, reset_token_expires_at=null WHERE id=?";
$stmt=$mysqli->prepare($sql);
$stmt->bind_param("ss",$pass,$user["id"]);
$stmt->execute();

echo "Password updated successfully";
?>