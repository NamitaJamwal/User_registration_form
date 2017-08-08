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
      header ("refresh:1; url=data.php");
  	}else
  	{
  		echo  'mysqli_error()';
  	}
  }
  $country = array("AF" => "Afghanistan",
  "AX" => "Åland Islands",
  "AL" => "Albania",
  "DZ" => "Algeria",
  "AS" => "American Samoa",
  "AD" => "Andorra",
  "AO" => "Angola",
  "AI" => "Anguilla",
  "AQ" => "Antarctica",
  "AG" => "Antigua and Barbuda",
  "AR" => "Argentina",
  "AM" => "Armenia",
  "AW" => "Aruba",
  "AU" => "Australia",
  "AT" => "Austria",
  "AZ" => "Azerbaijan",
  "BS" => "Bahamas",
  "BH" => "Bahrain",
  "BD" => "Bangladesh",
  "BB" => "Barbados",
  "BY" => "Belarus",
  "BE" => "Belgium",
  "BZ" => "Belize",
  "BJ" => "Benin",
  "BM" => "Bermuda",
  "BT" => "Bhutan",
  "BO" => "Bolivia",
  "BA" => "Bosnia and Herzegovina",
  "BW" => "Botswana",
  "BV" => "Bouvet Island",
  "BR" => "Brazil",
  "IO" => "British Indian Ocean Territory",
  "BN" => "Brunei Darussalam",
  "BG" => "Bulgaria",
  "BF" => "Burkina Faso",
  "BI" => "Burundi",
  "KH" => "Cambodia",
  "CM" => "Cameroon",
  "CA" => "Canada",
  "CV" => "Cape Verde",
  "KY" => "Cayman Islands",
  "CF" => "Central African Republic",
  "TD" => "Chad",
  "CL" => "Chile",
  "CN" => "China",
  "CX" => "Christmas Island",
  "CC" => "Cocos (Keeling) Islands",
  "CO" => "Colombia",
  "KM" => "Comoros",
  "CG" => "Congo",
  "CD" => "Congo, The Democratic Republic of The",
  "CK" => "Cook Islands",
  "CR" => "Costa Rica",
  "CI" => "Cote D'ivoire",
  "HR" => "Croatia",
  "CU" => "Cuba",
  "CY" => "Cyprus",
  "CZ" => "Czech Republic",
  "DK" => "Denmark",
  "DJ" => "Djibouti",
  "DM" => "Dominica",
  "DO" => "Dominican Republic",
  "EC" => "Ecuador",
  "EG" => "Egypt",
  "SV" => "El Salvador",
  "GQ" => "Equatorial Guinea",
  "ER" => "Eritrea",
  "EE" => "Estonia",
  "ET" => "Ethiopia",
  "FK" => "Falkland Islands (Malvinas)",
  "FO" => "Faroe Islands",
  "FJ" => "Fiji",
  "FI" => "Finland",
  "FR" => "France",
  "GF" => "French Guiana",
  "PF" => "French Polynesia",
  "TF" => "French Southern Territories",
  "GA" => "Gabon",
  "GM" => "Gambia",
  "GE" => "Georgia",
  "DE" => "Germany",
  "GH" => "Ghana",
  "GI" => "Gibraltar",
  "GR" => "Greece",
  "GL" => "Greenland",
  "GD" => "Grenada",
  "GP" => "Guadeloupe",
  "GU" => "Guam",
  "GT" => "Guatemala",
  "GG" => "Guernsey",
  "GN" => "Guinea",
  "GW" => "Guinea-bissau",
  "GY" => "Guyana",
  "HT" => "Haiti",
  "HM" => "Heard Island and Mcdonald Islands",
  "VA" => "Holy See (Vatican City State)",
  "HN" => "Honduras",
  "HK" => "Hong Kong",
  "HU" => "Hungary",
  "IS" => "Iceland",
  "IN" => "India",
  "ID" => "Indonesia",
  "IR" => "Iran, Islamic Republic of",
  "IQ" => "Iraq",
  "IE" => "Ireland",
  "IM" => "Isle of Man",
  "IL" => "Israel",
  "IT" => "Italy",
  "JM" => "Jamaica",
  "JP" => "Japan",
  "JE" => "Jersey",
  "JO" => "Jordan",
  "KZ" => "Kazakhstan",
  "KE" => "Kenya",
  "KI" => "Kiribati",
  "KP" => "Korea, Democratic People's Republic of",
  "KR" => "Korea, Republic of",
  "KW" => "Kuwait",
  "KG" => "Kyrgyzstan",
  "LA" => "Lao People's Democratic Republic",
  "LV" => "Latvia",
  "LB" => "Lebanon",
  "LS" => "Lesotho",
  "LR" => "Liberia",
  "LY" => "Libyan Arab Jamahiriya",
  "LI" => "Liechtenstein",
  "LT" => "Lithuania",
  "LU" => "Luxembourg",
  "MO" => "Macao",
  "MK" => "Macedonia, The Former Yugoslav Republic of",
  "MG" => "Madagascar",
  "MW" => "Malawi",
  "MY" => "Malaysia",
  "MV" => "Maldives",
  "ML" => "Mali",
  "MT" => "Malta",
  "MH" => "Marshall Islands",
  "MQ" => "Martinique",
  "MR" => "Mauritania",
  "MU" => "Mauritius",
  "YT" => "Mayotte",
  "MX" => "Mexico",
  "FM" => "Micronesia, Federated States of",
  "MD" => "Moldova, Republic of",
  "MC" => "Monaco",
  "MN" => "Mongolia",
  "ME" => "Montenegro",
  "MS" => "Montserrat",
  "MA" => "Morocco",
  "MZ" => "Mozambique",
  "MM" => "Myanmar",
  "NA" => "Namibia",
  "NR" => "Nauru",
  "NP" => "Nepal",
  "NL" => "Netherlands",
  "AN" => "Netherlands Antilles",
  "NC" => "New Caledonia",
  "NZ" => "New Zealand",
  "NI" => "Nicaragua",
  "NE" => "Niger",
  "NG" => "Nigeria",
  "NU" => "Niue",
  "NF" => "Norfolk Island",
  "MP" => "Northern Mariana Islands",
  "NO" => "Norway",
  "OM" => "Oman",
  "PK" => "Pakistan",
  "PW" => "Palau",
  "PS" => "Palestinian Territory, Occupied",
  "PA" => "Panama",
  "PG" => "Papua New Guinea",
  "PY" => "Paraguay",
  "PE" => "Peru",
  "PH" => "Philippines",
  "PN" => "Pitcairn",
  "PL" => "Poland",
  "PT" => "Portugal",
  "PR" => "Puerto Rico",
  "QA" => "Qatar",
  "RE" => "Reunion",
  "RO" => "Romania",
  "RU" => "Russian Federation",
  "RW" => "Rwanda",
  "SH" => "Saint Helena",
  "KN" => "Saint Kitts and Nevis",
  "LC" => "Saint Lucia",
  "PM" => "Saint Pierre and Miquelon",
  "VC" => "Saint Vincent and The Grenadines",
  "WS" => "Samoa",
  "SM" => "San Marino",
  "ST" => "Sao Tome and Principe",
  "SA" => "Saudi Arabia",
  "SN" => "Senegal",
  "RS" => "Serbia",
  "SC" => "Seychelles",
  "SL" => "Sierra Leone",
  "SG" => "Singapore",
  "SK" => "Slovakia",
  "SI" => "Slovenia",
  "SB" => "Solomon Islands",
  "SO" => "Somalia",
  "ZA" => "South Africa",
  "GS" => "South Georgia and The South Sandwich Islands",
  "ES" => "Spain",
  "LK" => "Sri Lanka",
  "SD" => "Sudan",
  "SR" => "Suriname",
  "SJ" => "Svalbard and Jan Mayen",
  "SZ" => "Swaziland",
  "SE" => "Sweden",
  "CH" => "Switzerland",
  "SY" => "Syrian Arab Republic",
  "TW" => "Taiwan, Province of China",
  "TJ" => "Tajikistan",
  "TZ" => "Tanzania, United Republic of",
  "TH" => "Thailand",
  "TL" => "Timor-leste",
  "TG" => "Togo",
  "TK" => "Tokelau",
  "TO" => "Tonga",
  "TT" => "Trinidad and Tobago",
  "TN" => "Tunisia",
  "TR" => "Turkey",
  "TM" => "Turkmenistan",
  "TC" => "Turks and Caicos Islands",
  "TV" => "Tuvalu",
  "UG" => "Uganda",
  "UA" => "Ukraine",
  "AE" => "United Arab Emirates",
  "GB" => "United Kingdom",
  "US" => "United States",
  "UM" => "United States Minor Outlying Islands",
  "UY" => "Uruguay",
  "UZ" => "Uzbekistan",
  "VU" => "Vanuatu",
  "VE" => "Venezuela",
  "VN" => "Viet Nam",
  "VG" => "Virgin Islands, British",
  "VI" => "Virgin Islands, U.S.",
  "WF" => "Wallis and Futuna",
  "EH" => "Western Sahara",
  "YE" => "Yemen",
  "ZM" => "Zambia",
  "ZW" => "Zimbabwe");

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


    <label class="control-label" >Gender:</label>
    <div class="row" value="<?php echo $check['Gender'];?>">
      <div class="col-md-6" >
        <label class="radio-inline"  >
          <input type="radio" name="gender" value="Male" id="optradio" checked>Male
        </label>
        <label class="radio-inline">
          <input type="radio" name="gender" value="Female" id="optradio">Female
        </label>
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Country:</label>
          <select name="country">
            <?php
            foreach($country as $key => $value) {
              ?>
              <option value="<?= $key ?>" title="<?= htmlspecialchars($value) ?>"><?= htmlspecialchars($value) ?></option>
              <?php
            }
            ?>
          </select>

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
