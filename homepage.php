<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
header("Pragma: no-cache");  // HTTP/1.0
header("Expires: 0");  

include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <div style="text-align:center; padding:15%;">
        <p style="font-size:50px; font-weight:bold;">
            Hello <?php
                    if (isset($_SESSION['email'])) {
                        $email = $_SESSION['email'];
                        $query=mysqli_query($conn,"Select users.* from 'users' where user.email='$email'");
                        while($row=mysqli_fetch_array($query)){
                            echo $row['firstname']. ''.$row['lastname'];
                        }
                    }
                    else{
                        echo 'Guest';
                    }

                    ?>
                    :)
        </p>
    </div>
</body>

</html>
<?php 
?>