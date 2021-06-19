<!doctype html>
<html>
<body>
<?php $name = $pass = $name_error = $pass_error = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
   if(empty($_POST["uname"]))
     $name_error = "Username is required";
   else
   {
     $name = $_POST["uname"];
    if(!preg_match("/^[a-zA-Z-0-9_]{2,}$/",$name))
        $name_error = "Password is invalid";
      else
        $name_error = "";
   }
    if(empty($_POST["pass"]))
     $pass_error = "Passowrd is required";
   else
   {
     $pass = $_POST["pass"];
    if(!preg_match("/^(?=.*?[A-Za-z])(?=.*?[$@#%]).{8,}$/",$_POST["pass"]))
        $pass_error = "Password must contain at least one special character and  must 8 characters password";
      else
        $pass_error = "";
   
   }
 }
 ?>
<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>
<legend>LOGIN</legend>
Username:<input type = "text" name="uname"><?php echo $name_error?><br><br>
Password:<input type = "password" name="pass"><?php echo $pass_error?>
<hr/>
<input type = "checkbox">Remember me<br><br>
<input type = "submit"><a href="https://www.aiub.edu/">Forgot Password?</a>

</fieldset>
</form>
<?php
 echo $name,$pass;
 ?>
</body></html>