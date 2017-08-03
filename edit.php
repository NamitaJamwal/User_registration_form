<?php
require_once ('connect.php');

  $ID = $_GET['ID'];

$m = mysqli_query($connection,"SELECT * FROM `user` WHERE `ID` = '$ID' ");
$check = mysqli_fetch_array($m);

  if(isset($_POST['done']))
  {
  	$FirstName = $_POST['firstname'];
  	$LastName = $_POST['lastname'];
  	$DateofBirth =$_POST['dateofbirth'];
  	$Email = $_POST['email'];
  	$Gender = $_POST['gender'];
  	$Country = $_POST['country'];
  	$Website = $_POST['website'];
  	$Bio = $_POST['bio'];

  $UpdateSql= "UPDATE `user` SET `First Name`='$FirstName',`Last Name`='$LastName',`Gender`='$Gender',`Date of Birth`='$DateofBirth',`Country`='$Country',`Email`='$Email',`Website`='$Website',`Bio`='$Bio', `Created Date`=NOW() WHERE `ID` = '$ID' ";
  $update = mysqli_query($connection,$UpdateSql); //or die(mysqli_error($connection));
  if($update)
  	{
  		echo  'Data Updated';
      header("location:view.php");
  	}else
  	{
  		echo  'mysqli_error()';
  	}
  }
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>
  <div class="conatiner padding-top-10">
    <div class="panel-default">
      <div class="panel-heading">
        <b><center>REGISTRATION </center></b>
      </div>
      <div class="panel-body">
<form  method="post">
  <label for="firstName" class="control-label">Name:</label>
    <div class="row">
      <div class="col-md-6">
        <input type="text" class="form-control" name="firstname" value="<?php echo $check['First Name']; ?>"  placeholder="First Name" required="required" data-error="This field is required."/>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <input type="text" class="form-control" name="lastname" value="<?php echo $check['Last Name']; ?>" placeholder="Last Name" required="required" data-error="This field is required."/>
      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Date of Birth:</label>
          <input type="date" class="form-control" name="dateofbirth" value="<?php echo $check['Date of Birth']; ?>" id="exampleInputDOB1" placeholder="Date of Birth" required="required" data-error="This field is required.">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label > Email ID: </label>
          <input id="form_email" type="email" name="email" class="form-control" value="<?php echo $check['Email'];?>" placeholder="example@domain.com " required="required" data-error="Valid email is required.">
        </div>
      </div>
    </div><br>

    <label class="control-label">Gender:</label>
    <div class="row">
      <div class="col-md-6">
        <label class="radio-inline">
          <input type="radio" name="gender" id="optradio" value="male" checked>Male
        </label>
        <label class="radio-inline">
          <input type="radio" name="gender" id="optradio" value="female">Female
        </label>
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Country:</label>
          <div class="bfh-selectbox bfh-countries" data-country="US" data-flags="true">
            <input type="hidden"  name="country" value="">
            <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
              <span class="bfh-selectbox-option input-medium" data-option=""></span>
              <b class="caret"></b>
            </a>
            <div class="bfh-selectbox-options">
              <input type="text"  name="country" class="bfh-selectbox-filter" value="<?php echo $check['Country'];?>">
              <div role="listbox">
                <ul role="option">
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Website:</label>
          <input type="textbox" class="form-control" name="website" value="<?php echo $check['Website']; ?>" placeholder="Website" required="required" data-error="This field is required.">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Bio:</label>
          <input type="textbox" class="form-control" name="bio" value="<?php echo $check['Bio']; ?>" placeholder="Bio" required="required" data-error="This field is required."/>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <input type="hidden" class="form-control" name="id">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <input type="submit" name="done" class="btn btn-success btn-send" value="Update">
      </div>
    </div>
  </form>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
