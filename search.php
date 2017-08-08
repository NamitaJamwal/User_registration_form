<?php

require_once ('connect.php');
if(isset($_POST['search']))
{
  $ID=$_POST['ID'];
  $query="SELECT * FROM `user` WHERE `ID` = '$ID' ";
  $result=mysqli_query($connection,$query);

if(mysqli_num_rows($result) > 0)
{
  while($row= mysqli_fetch_array($result))
  {
    $firstname=$row['First Name'];
    $lastname=$row['Last Name'];
    $email=$row['Email'];
    $gender=$row['Gender'];
    $country=$row['Country'];
    $website=$row['Website'];
    $bio=$row['Bio'];
    $dateofbirth=$row['Date of Birth'];
  }
}else{
   echo "Undefined ID";
    $firstname="";
    $lastname="";
    $email="";
    $gender="";
    $country="";
    $website="";
    $bio="";
    $dateofbirth="";
  }
mysqli_free_result($result);
}else{
  $firstname="";
  $lastname="";
  $email="";
  $gender="";
  $country="";
  $website="";
  $bio="";
  $dateofbirth="";
}
  ?>

<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View Data</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
        <body>
          <div class="conatiner padding-top-10">
            <div class="panel-default">
              <div class="panel-heading">
                <b><center>REGISTRATION </center></b>
              </div>
              <div class="panel-body">
      <form action="search.php" method="post">

      <div class="row">
        <div class="col-md-6">
          <input type="text" class="form-control" name="ID" placeholder="ID"><br>
        </div>
      </div>

        <label for="firstName" class="control-label">Name:</label>
        <div class="row">
          <div class="col-md-6">
            <input type="text" class="form-control" name="firstname" value="<?php echo $firstname;?>" placeholder="First Name" />
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <input type="text" class="form-control" name="lastname" value="<?php echo $lastname;?>" placeholder="Last Name"/>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Date of Birth:</label>
              <input type="date" class="form-control" name="dateofbirth" value="<?php echo $dateofbirth;?>" placeholder="Date of Birth" >
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label > Email ID: </label>
              <input id="form_email" type="email" name="email" class="form-control" value="<?php echo $email;?>" placeholder="example@domain.com ">
            </div>
          </div>
        </div><br>

        <label class="control-label">Gender:</label>
        <div class="row">
          <div class="col-md-6">
            <label class="radio-inline">
              <input type="radio" name="gender" value="<?php echo $gender;?>" checked>Male
            </label>
            <label class="radio-inline">
              <input type="radio" name="gender" value="<?php echo $gender;?>">Female
            </label>
          </div>
        </div><br>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Country:</label>
                <input type="text" class="form-control" name="country" value="<?php echo $country;?>">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Website:</label>
              <input type="textbox" class="form-control" name="website" value="<?php echo $website; ?>" placeholder="Website">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Bio:</label>
              <input type="textbox" class="form-control" name="bio" value="<?php echo $bio; ?>" placeholder="Bio"/>
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
            <input type="submit" name="search" class="btn btn-success btn-send" value="Find">
          </div>
        </div>
      </form>
</div>
</div>
</div>
</body>
</html>
