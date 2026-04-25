<?php 
  session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
    $password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$phone = $_POST['phone'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$address = $_POST['address'];
    $plan_choice = $_POST['plan_choice'];
		$currency_type = $_POST['currency_type'];
		$account_type = $_POST['account_type'];

		if(!empty($first_name) && !empty($last_name) && !empty($user_name) && !empty($email) && !empty($password) && !empty($confirm_password) && !empty($phone) && !is_numeric($country) && !is_numeric($state) && !empty($address) && !empty($plan_choice) && !empty($currency_type) && !empty($account_type))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into myuser (user_id,first_name,last_name,user_name,email,password,confirm_password,phone,country,state,address,plan_choice,currency_type,account_type) values ('$user_id','$first_name','$last_name','$user_name','$email','$password','$confirm_password','$phone','$country','$state','$address','$plan_choice','$currency_type','$account_type')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>capitalCORP</title>
        <!-- FAVIVON -->
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        <link rel="stylesheet" href="csss/incorpEX.css" />
        <link rel="stylesheet" href="csss/aos.cs" />
          <link rel="stylesheet" href="csss/stylle.css">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
           
        




    </style>
  </head>
  <body>




  <form method="post">
    
    <!-- Welcome Video-->
  <div class="video-container" data-aos="fade-up">
    <video autoplay muted playsinline loop>
      <source src="imgg/vid.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>
   
          <div class="video-content">
            <ul style="">
              <a href="index.html" style="">HOME</a>
              <a href="login.php" style="">LOGIN</a>
              <a href="contdsignup.php" style="">REGISTER</a>
            </ul>
            <br><br><br>
                  
      <h6 style="font-weight: 800;color:#000000;">capital<span style="background: linear-gradient(to right, #402bca,
        #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">CORP</span></h6>
      <h3 style="background: linear-gradient(to right, #402bca,
        #d625aa, #c77f3d, #d44c63); -webkit-text-fill-color: transparent; -webkit-background-clip: text;font-weight: 800;">GETTING STARTED</h3>
      <h5 style="color:#000000;font-weight:900;">COMPLETE YOUR REGISTRATION PROCESS!</h5>

      <label>FIRST NAME</label><br>
      <input type="text" name="first_name" style=""><br><br>
      <label>LAST NAME</label><br>
      <input type="text" name="last_name" style=""><br><br>
      <label>USER NAME</label><br>
      <input type="text" name="user_name" style=""><br><br>
      <label>EMAIL</label><br>
      <input type="email" name="email" style=""><br><br>
      <label>PASSWORD</label><br>
      <input type="password" name="password" style=""><br><br>
      <label>CONFIRM PASSWORD</label><br>
      <input type="password" name="confirm_password" style=""><br><br>
      <label>PHONE</label><br>
      <input type="text" name="phone" style=""><br><br>

          <!-- All countries -->
           <label>COUNTRY</label><br>
<!-- Code and Name -->
<select autocomplete="country" id="country" name="country" required>
  <option>Select country</option>
  <option value="AF">Afghanistan</option>
  <option value="AX">Åland Islands</option>
  <option value="AL">Albania</option>
  <option value="DZ">Algeria</option>
  <option value="AS">American Samoa</option>
  <option value="AD">Andorra</option>
  <option value="AO">Angola</option>
  <option value="AI">Anguilla</option>
  <option value="AQ">Antarctica</option>
  <option value="AG">Antigua and Barbuda</option>
  <option value="AR">Argentina</option>
  <option value="AM">Armenia</option>
  <option value="AW">Aruba</option>
  <option value="AU">Australia</option>
  <option value="AT">Austria</option>
  <option value="AZ">Azerbaijan</option>
  <option value="BS">Bahamas</option>
  <option value="BH">Bahrain</option>
  <option value="BD">Bangladesh</option>
  <option value="BB">Barbados</option>
  <option value="BY">Belarus</option>
  <option value="BE">Belgium</option>
  <option value="BZ">Belize</option>
  <option value="BJ">Benin</option>
  <option value="BM">Bermuda</option>
  <option value="BT">Bhutan</option>
  <option value="BO">Bolivia (Plurinational State of)</option>
  <option value="BA">Bosnia and Herzegovina</option>
  <option value="BW">Botswana</option>
  <option value="BV">Bouvet Island</option>
  <option value="BR">Brazil</option>
  <option value="IO">British Indian Ocean Territory</option>
  <option value="BN">Brunei Darussalam</option>
  <option value="BG">Bulgaria</option>
  <option value="BF">Burkina Faso</option>
  <option value="BI">Burundi</option>
  <option value="CV">Cabo Verde</option>
  <option value="KH">Cambodia</option>
  <option value="CM">Cameroon</option>
  <option value="CA">Canada</option>
  <option value="BQ">Caribbean Netherlands</option>
  <option value="KY">Cayman Islands</option>
  <option value="CF">Central African Republic</option>
  <option value="TD">Chad</option>
  <option value="CL">Chile</option>
  <option value="CN">China</option>
  <option value="CX">Christmas Island</option>
  <option value="CC">Cocos (Keeling) Islands</option>
  <option value="CO">Colombia</option>
  <option value="KM">Comoros</option>
  <option value="CG">Congo</option>
  <option value="CD">Congo, Democratic Republic of the</option>
  <option value="CK">Cook Islands</option>
  <option value="CR">Costa Rica</option>
  <option value="HR">Croatia</option>
  <option value="CU">Cuba</option>
  <option value="CW">Curaçao</option>
  <option value="CY">Cyprus</option>
  <option value="CZ">Czech Republic</option>
  <option value="CI">Côte d Ivoire</option>
  <option value="DK">Denmark</option>
  <option value="DJ">Djibouti</option>
  <option value="DM">Dominica</option>
  <option value="DO">Dominican Republic</option>
  <option value="EC">Ecuador</option>
  <option value="EG">Egypt</option>
  <option value="SV">El Salvador</option>
  <option value="GQ">Equatorial Guinea</option>
  <option value="ER">Eritrea</option>
  <option value="EE">Estonia</option>
  <option value="SZ">Eswatini (Swaziland)</option>
  <option value="ET">Ethiopia</option>
  <option value="FK">Falkland Islands (Malvinas)</option>
  <option value="FO">Faroe Islands</option>
  <option value="FJ">Fiji</option>
  <option value="FI">Finland</option>
  <option value="FR">France</option>
  <option value="GF">French Guiana</option>
  <option value="PF">French Polynesia</option>
  <option value="TF">French Southern Territories</option>
  <option value="GA">Gabon</option>
  <option value="GM">Gambia</option>
  <option value="GE">Georgia</option>
  <option value="DE">Germany</option>
  <option value="GH">Ghana</option>
  <option value="GI">Gibraltar</option>
  <option value="GR">Greece</option>
  <option value="GL">Greenland</option>
  <option value="GD">Grenada</option>
  <option value="GP">Guadeloupe</option>
  <option value="GU">Guam</option>
  <option value="GT">Guatemala</option>
  <option value="GG">Guernsey</option>
  <option value="GN">Guinea</option>
  <option value="GW">Guinea-Bissau</option>
  <option value="GY">Guyana</option>
  <option value="HT">Haiti</option>
  <option value="HM">Heard Island and Mcdonald Islands</option>
  <option value="HN">Honduras</option>
  <option value="HK">Hong Kong</option>
  <option value="HU">Hungary</option>
  <option value="IS">Iceland</option>
  <option value="IN">India</option>
  <option value="ID">Indonesia</option>
  <option value="IR">Iran</option>
  <option value="IQ">Iraq</option>
  <option value="IE">Ireland</option>
  <option value="IM">Isle of Man</option>
  <option value="IL">Israel</option>
  <option value="IT">Italy</option>
  <option value="JM">Jamaica</option>
  <option value="JP">Japan</option>
  <option value="JE">Jersey</option>
  <option value="JO">Jordan</option>
  <option value="KZ">Kazakhstan</option>
  <option value="KE">Kenya</option>
  <option value="KI">Kiribati</option>
  <option value="KP">Korea, North</option>
  <option value="KR">Korea, South</option>
  <option value="XK">Kosovo</option>
  <option value="KW">Kuwait</option>
  <option value="KG">Kyrgyzstan</option>
  <option value="LA">Lao Peoples Democratic Republic</option>
  <option value="LV">Latvia</option>
  <option value="LB">Lebanon</option>
  <option value="LS">Lesotho</option>
  <option value="LR">Liberia</option>
  <option value="LY">Libya</option>
  <option value="LI">Liechtenstein</option>
  <option value="LT">Lithuania</option>
  <option value="LU">Luxembourg</option>
  <option value="MO">Macao</option>
  <option value="MK">Macedonia North</option>
  <option value="MG">Madagascar</option>
  <option value="MW">Malawi</option>
  <option value="MY">Malaysia</option>
  <option value="MV">Maldives</option>
  <option value="ML">Mali</option>
  <option value="MT">Malta</option>
  <option value="MH">Marshall Islands</option>
  <option value="MQ">Martinique</option>
  <option value="MR">Mauritania</option>
  <option value="MU">Mauritius</option>
  <option value="YT">Mayotte</option>
  <option value="MX">Mexico</option>
  <option value="FM">Micronesia</option>
  <option value="MD">Moldova</option>
  <option value="MC">Monaco</option>
  <option value="MN">Mongolia</option>
  <option value="ME">Montenegro</option>
  <option value="MS">Montserrat</option>
  <option value="MA">Morocco</option>
  <option value="MZ">Mozambique</option>
  <option value="MM">Myanmar (Burma)</option>
  <option value="NA">Namibia</option>
  <option value="NR">Nauru</option>
  <option value="NP">Nepal</option>
  <option value="NL">Netherlands</option>
  <option value="AN">Netherlands Antilles</option>
  <option value="NC">New Caledonia</option>
  <option value="NZ">New Zealand</option>
  <option value="NI">Nicaragua</option>
  <option value="NE">Niger</option>
  <option value="NG">Nigeria</option>
  <option value="NU">Niue</option>
  <option value="NF">Norfolk Island</option>
  <option value="MP">Northern Mariana Islands</option>
  <option value="NO">Norway</option>
  <option value="OM">Oman</option>
  <option value="PK">Pakistan</option>
  <option value="PW">Palau</option>
  <option value="PS">Palestine</option>
  <option value="PA">Panama</option>
  <option value="PG">Papua New Guinea</option>
  <option value="PY">Paraguay</option>
  <option value="PE">Peru</option>
  <option value="PH">Philippines</option>
  <option value="PN">Pitcairn Islands</option>
  <option value="PL">Poland</option>
  <option value="PT">Portugal</option>
  <option value="PR">Puerto Rico</option>
  <option value="QA">Qatar</option>
  <option value="RE">Reunion</option>
  <option value="RO">Romania</option>
  <option value="RU">Russian Federation</option>
  <option value="RW">Rwanda</option>
  <option value="BL">Saint Barthelemy</option>
  <option value="SH">Saint Helena</option>
  <option value="KN">Saint Kitts and Nevis</option>
  <option value="LC">Saint Lucia</option>
  <option value="MF">Saint Martin</option>
  <option value="PM">Saint Pierre and Miquelon</option>
  <option value="VC">Saint Vincent and the Grenadines</option>
  <option value="WS">Samoa</option>
  <option value="SM">San Marino</option>
  <option value="ST">Sao Tome and Principe</option>
  <option value="SA">Saudi Arabia</option>
  <option value="SN">Senegal</option>
  <option value="RS">Serbia</option>
  <option value="CS">Serbia and Montenegro</option>
  <option value="SC">Seychelles</option>
  <option value="SL">Sierra Leone</option>
  <option value="SG">Singapore</option>
  <option value="SX">Sint Maarten</option>
  <option value="SK">Slovakia</option>
  <option value="SI">Slovenia</option>
  <option value="SB">Solomon Islands</option>
  <option value="SO">Somalia</option>
  <option value="ZA">South Africa</option>
  <option value="GS">South Georgia and the South Sandwich Islands</option>
  <option value="SS">South Sudan</option>
  <option value="ES">Spain</option>
  <option value="LK">Sri Lanka</option>
  <option value="SD">Sudan</option>
  <option value="SR">Suriname</option>
  <option value="SJ">Svalbard and Jan Mayen</option>
  <option value="SE">Sweden</option>
  <option value="CH">Switzerland</option>
  <option value="SY">Syria</option>
  <option value="TW">Taiwan</option>
  <option value="TJ">Tajikistan</option>
  <option value="TZ">Tanzania</option>
  <option value="TH">Thailand</option>
  <option value="TL">Timor-Leste</option>
  <option value="TG">Togo</option>
  <option value="TK">Tokelau</option>
  <option value="TO">Tonga</option>
  <option value="TT">Trinidad and Tobago</option>
  <option value="TN">Tunisia</option>
  <option value="TR">Turkey (Türkiye)</option>
  <option value="TM">Turkmenistan</option>
  <option value="TC">Turks and Caicos Islands</option>
  <option value="TV">Tuvalu</option>
  <option value="UM">U.S. Outlying Islands</option>
  <option value="UG">Uganda</option>
  <option value="UA">Ukraine</option>
  <option value="AE">United Arab Emirates</option>
  <option value="GB">United Kingdom</option>
  <option value="US">United States</option>
  <option value="UY">Uruguay</option>
  <option value="UZ">Uzbekistan</option>
  <option value="VU">Vanuatu</option>
  <option value="VA">Vatican City Holy See</option>
  <option value="VE">Venezuela</option>
  <option value="VN">Vietnam</option>
  <option value="VG">Virgin Islands, British</option>
  <option value="VI">Virgin Islands, U.S</option>
  <option value="WF">Wallis and Futuna</option>
  <option value="EH">Western Sahara</option>
  <option value="YE">Yemen</option>
  <option value="ZM">Zambia</option>
  <option value="ZW">Zimbabwe</option>
</select><br><br>
<!-- total - 252 -->

      <label>STATE</label><br>
      <input type="text" name="state" style=""><br><br>
      <label>ADDRESS</label><br>
      <input type="text" name="address" style=""><br><br>

      <label>PLAN</label><br>
      <select name="plan_choice" required>
        <option>--select plan--</option>
        <option value="STARTER PLAN:: min500 - max5,000:: 35% ">STARTER PLAN:: min500 - max5,000:: 35%</option>
        <option value="PREMIUM PLAN:: min5,000 - max20,000:: 50% ">PREMIUM PLAN:: min5,000 - max20,000:: 50%</option>
        <option value="DELUXE PLAN:: min10,000 - max100,000:: 70% ">DELUXE PLAN:: min10,000 - max100,000:: 70%</option>
        <option value="EXCLUSIVE PLAN:: min100,000 - UNLIMITED:: 85% ">EXCLUSIVE PLAN:: min100,000 - UNLIMITED:: 85%</option>  
    </select><br><br>

    <label>CURRENCY TYPE</label><br>
    <select name="currency_type" required>
      <option>--select plan--</option>
      <option value="$">Dollar $</option>
      <option value="€">European Euro €</option>
      <option value="£">British Pounds£</option>
      <option value="₹">Indian Rupees ₹</option>
      <option value="R">S.Africa Rands R</option>
      <option value="₽">Russian Ruble ₽</option>
  </select><br><br>

  <label>ACCOUNT TYPE</label><br>
    <select name="account_type" required>
      <option>--select plan--</option>
      <option value="FX Trading">FX Trading</option>
      <option value="Stock Trading">Stock Trading</option>
      <option value="Binary Option Trading">Binary Option Trading</option>
      <option value="Crypto Currency Investment">Crypto Currency Investment</option>
      <option value="Bitcoin Mining">Bitcoin Mining</option>
      <option value="Finiancial Save">Finiancial Save</option>
  </select><br><br>


  <input type="checkbox" style="width:15px;height:15px;">&nbsp;&nbsp;<small style="font-size:12px;font-weight:800;color:#000;">You agree to our &nbsp;&nbsp;<br><br><a href="" style="color:red;">Terms and Conditions</a></small> 
  <br><br>
  <!-- Google reCAPTCHA -->
  <div class="g-recaptcha" data-sitekey="6Lf6wjQrAAAAADIHZR52F6MD1Zk6lU6f_DSP8At9"></div>
  
  <br><br>

  <button type="submit" style="">REGISTER</button>
                  
          
     
    </div>
          
  </div>
  <!--End-->
</form>

<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement(
        {pageLanguage: 'en'}, 
        'google_translate_element'
      );
    }
  </script>
  <script>
    function showDiv() {
      var selected = document.getElementById("fruit").value;
    
      // Hide all divs first
      var divs = document.getElementsByClassName("fruit-info");
      for (var i = 0; i < divs.length; i++) {
        divs[i].style.display = "none";
      }
    
      // Show the selected one if it exists
      if (selected) {
        var divToShow = document.getElementById(selected);
        if (divToShow) {
          divToShow.style.display = "block";
        }
      }
    }
          
          
          function showINCOR2() {
  document.getElementById("incor1").style.display = "none";
                  document.getElementById("incor2").style.display = "block";
}
    </script>
  
  <script type="text/javascript" 
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
  </script>
<script src="jss/aos.js"></script>
<script src="jss/snow.js"></script>
<script src="jss/rainingcfd.js"></script>
  </body>
</html>