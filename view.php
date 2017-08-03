<?php
require_once ('connect.php');
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
      <table width="1200" border="1" cellpadding="1" cellspacing="5">
        <tr>
          <th><center>ID</center></th>
          <th><center>First Name</center></th>
          <th><center>Last Name</center></th>
          <th><center>Gender</center></th>
          <th><center>Date of Birth</center></th>
          <th><center>Registration Date</center></th>
          <th><center>Action</center></th>
        </tr>

<?php
$select = "SELECT * FROM `user` ";
$record = mysqli_query($connection,$select);
while($data = mysqli_fetch_array($record))
{
?>
  <tr>
    <td><center><?php echo $data['ID']; ?></center></center></td>
    <td><center><?php echo $data['First Name']; ?></center></td>
    <td><center><?php echo $data['Last Name']; ?></center></td>
    <td><center><?php echo $data['Gender']; ?></center></td>
    <td><center><?php echo $data['Date of Birth']; ?></center></td>
    <td><center><?php echo $data['Created Date']; ?></center></td>
    <td><center><a href="record.php?ID=<?php echo $data['ID']; ?>">View</a>
        <a href="edit.php?ID=<?php echo $data['ID']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true">Edit</span></a>
        <a href="delete.php?ID=<?php echo $data['ID']; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true">Delete</span></a></center></td>
  <tr>
<?php
}
?>
  </table>
  <br>
  <div class="row">
    <div class="col-md-12">
      <center><a href="index.php"><input type="submit" name="done" class="btn btn-success btn-send" value="Add User"></a></center>
    </div>
  </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
