<!DOCTYPE html>
<html>
<title>Hospital Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/removeUnderline.css">

<body>

<table border="0" width="100%">
    <tr height="15%" bgcolor="#23274C">
        <td width="20%"></td>
        <td valign="top"> <h2> <b> <font color="#CACBD5">Hospital </font><font color="white">Management System</font> </b> </h2>
            <td width="30%" valign="top" align="right">
                    <br/><br/><br/>
                <a class="rmvunderline" href="{{route('signIn.index')}}"><font color="white">Sign In</font></a>&nbsp;&nbsp;<font color="white">|</font>&nbsp;&nbsp;
                <a class="rmvunderline" href="{{route('signUp.index')}}"><font color="white">Sign Up</font></a><br/>
            </td>
        </td>
        <td width="20%"></td>
    </tr>
</table>
<table border="0" width="100%" class="w3-container">
    <tr height="7" bgcolor="#616174">
        <td width="20%"></td>
        <td>
            <nav>
                <ul id="main">
                    <li><a href="/" class="rmvunderline">Home</a></li>
                    <!-- <div id="marker"></div> -->
                </ul>
            </nav>
        </td>
        <td width="20%"></td>
    </tr>
</table>

            

<!-- Content -->
<div class="w3-content">  
    <!-- Login -->
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Sign Up</span>
    </div>
    <!-- show error of validation -->
    <div class="w3-container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <font color="red"><strong>Whoops!</strong> There were some problems with your input.</font><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li><font color="red">{{ $error }}</font></li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <!-- submit for post request -->
    <form class="w3-container" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="w3-section">
            <label>First name</label>
            <input type="text" name="firstName" class="w3-input w3-border w3-hover-border-black" style="width:100%;" placeholder="Please enter your First name" />
        </div>
        <div class="w3-section">
            <label>Last name</label>
            <input type="text" name="lastName" class="w3-input w3-border w3-hover-border-black" style="width:100%;" placeholder="Please enter your last name" />
        </div>
        <div class="w3-section">
            <label>Date of birth</label>
            <input type="date" name="birthday" class="w3-input w3-border w3-hover-border-black" />
        </div>
        <div class="w3-section">
            <label>Gender</label><br>
            <input type="radio" class="w3-radio" name="gender" value="Male" />Male &nbsp;&nbsp;
            <input type="radio" class="w3-radio" name="gender" value="Female" />Female 
        </div>
        <div class="w3-section">
            <label>Phone number</label><br>
            <input type="text" name="phnNo" value="+880" size="3" style="height:40px;" readonly /><input type="text"  name="phoneNumber" id="phnNo1" size="96" style="height:40px;" > 
        </div>
        <div class="w3-section">
            <label>Email</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="email" placeholder="Please enter your email">
        </div>
        <div class="w3-section">
            <label>City</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="city" placeholder="Please enter your city" />
        </div>
        <div class="w3-section">
            <label>Location</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="location" placeholder="Please enter your location" />
        </div>
        <div class="w3-section">
            <label>Profile Picture</label>
            <input type="file" class="w3-input w3-border w3-hover-border-black" name="profilePicture" >
        </div>
        <div class="w3-section">
            <label>Password</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="password" name="password" placeholder="Please enter your password">
        </div>
        <div class="w3-section">
            <label>Confirm Password</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="password" name="confirmPassword" placeholder="Please re-enter your password">
        </div>
        <input type="submit" class="w3-button w3-block w3-black" name="signup" value="Sign Up">
    </form>

</div><br><br>

<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Hospital Management</a></p>
</footer>

<script type="text/javascript" src="js/slideShow.js"></script>

</body>
</html>
