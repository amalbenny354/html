<!DOCTYPE html>
<html lang="en">
<head>
<title>Form Validation</title>
</head>
<body>

<?php

$name="";
$email="";
$phone="";
$address="";
$password="";
$confirm_password="";
$pattern="^[a-z0-9-]+(\.[a-z0-9-]+)*@[a-z0-9-]+(\.a-z0-9-]+)*(\.[a-z]{2,3})$^";
$pt = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$^";
 


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	extract($_POST);
	$valid=true;

if(empty($name))
{
echo "<script>alert('please enter name.')</script>";
$valid=false;
}

if(empty($email))
{
echo "<script>alert('please enter email.')</script>";
$valid=false;
}

if(!preg_match($pattern,$email))
{
echo "<script>alert('please enter valid email.')</script>";
$valid=false;
}

if(empty($phone))
{
echo "<script>alert('please enter phone')</script>";
$valid=false;
}

else
{
if(strlen($phone)!=10)
{
echo "<script>alert('please enter valid phone')</script>";
$valid=false;
}
}

if(empty($gender))
{
echo "<script>alert('please enter gender')</script>";
$valid=false;
}

if(empty($address))
{
echo "<script>alert('please enter address.')</script>";
$valid=false;
}

if(empty($password))
{
echo "<script>alert('please enter password.')</script>";
$valid=false;
}

if(!preg_match($pt,$password))
{
echo "<script>alert('please enter valid password.')</script>";
$valid=false;
}
if(($password)!=($confirm_password))
{
echo "<script>alert('plesae confirm the password')</script>";
$valid=false;
}

if($valid)
{
$name="";
$email="";
$phone="";
$address="";
$password="";
$confirm_password="";
echo "<script>alert('submission successfull!')</script>";
}

}

?>

<form method="post" action="#">
<table align="center">
<tr>
<td colspan="2"><h1 align="center">Registration Form</h1></td>
</tr>

</tr>
<td> Name:</td>
<td><input type="text" name="name" value="<?php echo $name;?>"></td>
</tr>

<tr>
<td>Email id</td>
<td><input type="text" name="email" value="<?php echo $email;?>"></td>
</tr>

<tr>
<td>Phone Number</td>
<td><input type="number" name="phone" value="<?php echo $phone;?>"></td>
</tr>

<tr>
<td>Gender</td>
<td>‌<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender value="other">other</td>
</tr>

<tr>
<td>Address</td>
<td><textarea name="address" value="<?php echo $address;?>"></textarea></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="password" value="<?php echo $password;?>"></td>
</tr>

<td>confirm Password</td>
<td><input type="password" name="confirm_password" value="<?php echo $confirm_password;?>"></td>

</tr>

<tr align="center">
<td colspan="2"><input type="submit" style="width:100%"></td>
</tr>
</form>
</body>
</html>
