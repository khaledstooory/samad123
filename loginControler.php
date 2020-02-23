<?php   
@session_start();
if(isset($_SESSION['username']))
{
header('Location:index.php'); 
die();
}
?>
<?php
if(isset($_POST['login']))
{
$username=$_POST["username"];
$password=$_POST["password"];
if($username=="admin" && $password="123")
 header("Location: index.php");
else
echo "Please Try again incorrect password or username";
}
if(isset($_POST['back']))
{
header("Location: index.php");
}
?>

