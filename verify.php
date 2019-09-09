<?php
if(isset($_POST['enter'])){
$A=$GLOBALS['rand'];
if($A==$_POST['rand']){

header('Location:reset.php');

}

}
?>

<html>
<form action='verify.php' method='POST'>
<input type='text' name='rand'>
<input type='submit' name='enter'>
</form>
</html>