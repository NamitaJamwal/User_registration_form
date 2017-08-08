<?php
require_once ('connect.php');

$ID = $_GET['ID'];
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
      <table width="1235" border="2" cellpadding="1" cellspacing="1">
        <tr>
          <th><center>ID</center></th>
          <th><center>First Name</center></th>
          <th><center>Last Name</center></th>
          <th><center>Eamil</center></th>
          <th><center>Gender</center></th>
          <th><center>Date of Birth</center></th>
          <th><center>Country</center></th>
          <th><center>Website</center></th>
          <th><center>Bio </center></th>
          <th><center>Registration Date</center></th>
        </tr>

<?php
$select = "SELECT * FROM `user` WHERE `ID`=$ID";
$record = mysqli_query($connection,$select);
while($data = mysqli_fetch_array($record))
{
?>
  <tr>
    <td><center><?php echo $data['ID']; ?></center></center></td>
    <td><center><?php echo $data['First Name']; ?></center></td>
    <td><center><?php echo $data['Last Name']; ?></center></td>
    <td><center><?php echo $data['Email']; ?></center></td>
    <td><center><?php echo $data['Gender']; ?></center></td>
    <td><center><?php echo $data['Date of Birth']; ?></center></td>
    <td><center><?php echo $data['Country']; ?></center></td>
    <td><center><?php echo $data['Website']; ?></center></td>
    <td><center><?php echo $data['Bio']; ?></center></td>
    <td><center><?php echo $data['Created Date']; ?></center></td>
  <tr>
<?php
}
?>
  </table>
</body>
</html>
