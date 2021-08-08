<html>
<body>
<fieldset>
<?php
session_start();
 include 'head.php';
 $data = file_get_contents("Lab4_data.json"); 
 $data = json_decode($data,true);
 foreach($data as $row)
 {
	 if($_SESSION['passkey']==$row['password'])
	 {                              $_SESSION['tname'] = $row['username'];
									$_SESSION['tmail']=$row['e-mail'];
									$_SESSION['tgender']=$row['gender'];
									$_SESSION['day']=$row['dd'];
									$_SESSION['month']=$row['mm'];
									$_SESSION['year']=$row['yyyy'];
									break;
	 }
 }
						  ?>
</fieldset>
<table>
<td>
<fieldset style="height:270px;width:300px">
<h3>Account</h3> &nbsp &nbsp 
<hr/>
<ul>
<li><a href="Account.php">Dashboard</a></li>
<li><a href="Profile.php">View Profile</a></li>
<li><a href="Edit Profile.php">Edit Profile</a></li>
<li><a href="Change Propic.php">Change Profile Picture</a></li>
<li><a href="Change Pass.php">Change Password</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</fieldset>
</td>
<td>
<fieldset style="height:270px">
<fieldset>    
<legend>Profile</legend>
Name: <?php echo $_SESSION['tname'];?>
Email: <?php echo $_SESSION['tmail'];?>
Gender: <?php echo $_SESSION['tgender'];?>
Date of Birth: <?php echo "".$_SESSION['day']."/".$_SESSION['month']."/".$_SESSION['year'].""?>
</fieldset>
</fieldset>
</td>
</table>
<fieldset>
<?php include 'footer.php'?>
</fieldset>
</body>

</html>