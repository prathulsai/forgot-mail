<?php  
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
}
   
$to_email = $_POST['mail'];
$subject = 'Testing PHP Mail';
$message = getName(6);
$headers = 'From: noreply @ company . com';
mail($to_email,$subject,$message,$headers);
$GLOBALS['rand']=$message;
header("Location:verify.php");
?>
