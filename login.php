<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('sunny786' => 'sunny786','sunny786' => 'sunny786','sunny786' => 'sunny786');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login page</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="placeholder.css">
</head>


<body style="background-color: #ccc;">
      <br><br>
   <div class="container">
       <div class="panel panel-warning">
           <div class="panel-heading">
               <h4 style="text-align: center;">A Personal Bot Site By Saqlain Abbas</h4>
           </div>
       </div></div>
   
<div class="container">
    
    <div class="panel panel-primary">
        <div class="panel-heading"><center><h1 style="color: white;"><i><b>Login To Continue</b></i></h1></center></div>
        <div class="panel-body">
        	<center>
<form action="" method="post" name="Login_Form">
<div class="form-group">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    </div>
      <!-- UserName Field -->
    <div class="form-group">
    	<label for="Username"><i>Username</i> : </label>
        <input style="color: white; background-color: #078edd; padding: 5px; text-align: center;" class="form-control" id="Username" type="text" name="Username" placeholder="Enter Username">
    </div>  <br>
    <!-- Password Field  -->
    <div class="form-group">
        <label for="Password"><i>Password </i>: </label>

        <input  style="color: white; background-color: #078edd; padding: 5px; text-align: center;" class="form-control" type="password" id="Password" name="Password" placeholder="Enter Password">
    </div> <br>
    <div class="form-group">
        <button class="btn btn-success form-control" type="submit" name="Submit" style="padding: 2px;">LOGIN</button>
    </div>
    </div>
        </div>
            </div>
</form></center>
      <div class="container">
    <div class="panel panel-success">
        <div class="panel-footer"><center><h4>Visit <a href="//www.saqlainabbas.tk" target="_blank">www.saqlainabbas.tk</h4></center></div>
    </div></div>
</body>
</html>