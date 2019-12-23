<!DOCTYPE html>
<html>
<title>@yield('title')</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="\CSS/style.css">
    <link rel="stylesheet" href="\CSS/removeUnderline.css">
    <link rel="stylesheet" href="\CSS/customButton.css">
</head>

<body>

<table border="0" width="100%">
    <tr height="15%" bgcolor="#23274C">
        <td width="20%"></td>
        <td valign="top"> <h2> <b> <font color="#CACBD5">Hospital </font><font color="white">Management System</font> </b> </h2>
            <td width="30%" valign="top" align="right">
                    <br/><br/>
                     <br>
                <a class="rmvunderline" href="{{route('signOut.index')}}"><font color="red">Sign Out</font></a><br/>
            </td>
        </td>
        <td width="20%"></td>
    </tr>
</table>
<table border="0" width="100%" class="w3-container">
    <tr height="7" bgcolor="#616174">
        <td width="10%"></td>
        <td>
            <nav>
                <ul id="main">
                    <li><a href="{{route('staff.index')}}" class="rmvunderline">Home</a></li>
                    <li>Profile
                        <ul class="drop">
                        <div>
                        <li><a href="{{route('staff.profile')}}" class="rmvunderline">My Profile</a></li>
                        <li><a href="{{route('staff.changePassword')}}" class="rmvunderline">Change Password</a></li>
                        <li><a href="{{route('staff.changeProfilePicture')}}" class="rmvunderline">Change Profile picture</a></li>
                        </div>
                        </ul>
                    </li>
                    <li>Doctor
                        <ul class="drop">
                        <div>
                        <li><a href="{{route('staff.staff_doctorList')}}" class="rmvunderline">Doctor List</a></li>
                        </div>
                        </ul>
                    </li>
                    <li>Patient
                        <ul class="drop">
                        <div>
                        <li><a href="{{route('staff.staff_userList')}}" class="rmvunderline">Patient List</a></li>
                        </div>
                        </ul>
                    </li>
                    <li>Appointment
                        <ul class="drop">
                        <div>
                        <li><a href="{{route('staff.appointment')}}" class="rmvunderline">Add Appointment</a></li>
                        <li><a href="{{route('staff.appointmentShow')}}" class="rmvunderline">Appointment List</a></li>
                        </div>
                        </ul>
                    </li>
                    <li>Allotment
                        <ul class="drop">
                        <div>
                        <li><a href="{{route('staff.allotment')}}" class="rmvunderline">Add Allotment</a></li>
                        <li><a href="{{route('staff.allotmentShow')}}" class="rmvunderline">Allotment List</a></li>
                        </div>
                        </ul>
                    </li>
                    <li>Services
                        <ul class="drop">
                        <div>
                        <li><a href="{{route('staff.createServices')}}" class="rmvunderline">Add Services</a></li>
                        <li><a href="{{route('staff.servicesList')}}" class="rmvunderline">Service List</a></li>
                        </div>
                        </ul>
                    </li>
                    
                    <li>Messages
                        <ul class="drop">
                        <div>
                        <li><a href="{{route('staff.messages')}}" class="rmvunderline">Messages</a></li>
                        </div>
                        </ul>
                    </li>
                    <div id="marker">
                    </div>
                </ul>
            </nav>
        </td>
        <td width="10%"></td>
    </tr>
</table>

            

<!-- Content -->
@yield('Content')

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
  <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <font color="#23274C"><strong>Hospital Management System</strong></font></p>
</footer>

@yield('Search')

</body>
</html>
