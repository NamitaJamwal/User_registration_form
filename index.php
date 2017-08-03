<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Registration Form</title>

    <!-- Bootstrap -->
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
          <form action="process.php" method="post">
            <label for="firstName" class="control-label">Name:</label>
            <div class="row">
              <div class="col-md-6">
                <input type="text" class="form-control" name="firstname" id="firstName" placeholder="First Name" required="required" data-error="This field is required."/>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <input type="text" class="form-control" name="lastname" id="lastName" placeholder="Last Name" required="required" data-error="This field is required."/>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Date of Birth:</label>
                  <input type="date" class="form-control" name="dateofbirth" id="exampleInputDOB1" placeholder="Date of Birth" required="required" data-error="This field is required.">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label > Email ID: </label>
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="example@domain.com " required="required" data-error="Valid email is required.">
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
                    <input type="hidden" name="country" value="">
                    <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
                      <span class="bfh-selectbox-option input-medium" data-option=""></span>
                      <b class="caret"></b>
                    </a>
                    <div class="bfh-selectbox-options">
                      <input type="text"  name="country" class="bfh-selectbox-filter">
                      <div role="listbox">
                        <ul role="option"></ul>
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
                  <input type="textbox" class="form-control" name="website" placeholder="Website" required="required" data-error="This field is required.">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Bio:</label>
                  <input type="textbox" class="form-control" name="bio" placeholder="Bio" required="required" data-error="This field is required."/>
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
                <input type="submit" name="done" class="btn btn-success btn-send" value="Submit">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="country.js"></script>

    <link rel="shortcut icon" href="http://faviconist.com/icons/be7b568b1a766b3888e5326879e1a9b8/favicon.ico" />
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-formhelpers-countries.flags.css"/>
    <link rel="stylesheet" href="css/bootstrap-formhelpers.min.css"/>
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/bootstrap-formhelpers.min.js"></script>
    <script src="js/bootstrap-formhelpers-countries.js"></script>


    <link rel="stylesheet" href="css/bootstrap-formhelpers-countries.flags.css"/>
    <link rel="stylesheet" href="css/bootstrap-formhelpers.min.css"/>


    <script src="js/bootstrap-formhelpers.min.js"></script>
    <script src="js/bootstrap-formhelpers-countries.js"></script>

  </body>
</html>
