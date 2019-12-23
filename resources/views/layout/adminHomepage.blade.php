<!DOCTYPE html>
<html>
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/slideshow.css">
<link rel="stylesheet" href="CSS/removeUnderline.css">
@yield('script')

<body>

<table border="0" width="100%">
    <tr height="15%" bgcolor="#23274C">
        <td width="20%"></td>
        <td valign="top"> <h2> <b> <font color="#CACBD5">Hospital </font><font color="white">Management System</font> </b> </h2>
            <td width="30%" valign="top" align="right">
                    <br/><br/>
                    <font color="white">Welcome, {{$user->name}} </font> <br>
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
                    <li><a href="#" class="rmvunderline">Home</a></li>
                    <li>Profile
                        <ul class="drop">
                        <div>
                        <li><a href="{{route('admin.profile')}}" class="rmvunderline">My Profile</a></li>
                        <li><a href="{{route('admin.changePassword')}}" class="rmvunderline">Change Password</a></li>
                        <li><a href="{{route('admin.changeProfilePicture')}}" class="rmvunderline">Change Profile picture</a></li>
                        </div>
                        </ul>
                    </li>
                    <li>Doctor's
                        <ul class="drop">
                        <div>
                        <li><a href="{{route('admin.addDoctorDepartment')}}" class="rmvunderline">Add Doctor Department</a></li>
                        <li><a href="{{route('admin.addDoctor')}}" class="rmvunderline">Add Doctor</a></li>
                        <li><a href="{{route('admin.addDoctorSchedule')}}" class="rmvunderline">Add Doctor's Schedule</a></li>
                        <li><a href="{{route('admin.doctorList')}}" class="rmvunderline">Doctor List</a></li>
                        <li><a href="{{route('admin.doctorDeleteRequestList')}}" class="rmvunderline">Doctor's Delete Request List</a></li>
                        </div>
                        </ul>
                    </li>
                    <li>Staff's
                        <ul class="drop">
                        <div>
                        <li><a href="{{route('admin.addStaff')}}" class="rmvunderline">Add Staff</a></li>
                        <li><a href="{{route('admin.addStaffSchedule')}}" class="rmvunderline">Add Staff's Schedule</a></li>
                        <li><a href="{{route('admin.staffList')}}" class="rmvunderline">Staff List</a></li>
                        <li><a href="{{route('admin.staffDeleteRequestList')}}" class="rmvunderline">Staff's Delete Request List</a></li>
                        </div>
                        </ul>
                    </li>
                    <li>User's
                        <ul class="drop">
                        <div>
                        <li><a href="{{route('admin.userList')}}" class="rmvunderline">User List</a></li>
                        </div>
                        </ul>
                    </li>
                    <li>Photo gallery
                        <ul class="drop">
                        <div>
                        <li><a href="{{route('admin.addPhotoGallery')}}" class="rmvunderline">Add Photo Gallery</a></li>
                        <li><a href="{{route('admin.photoGalleryList')}}" class="rmvunderline">Photo Gallery List</a></li>
                        </div>
                        </ul>
                    </li>
                    <li><a href="#" class="rmvunderline">Messages</a></li>
                    <li>Others
                        <ul class="drop">
                        <div>
                        <li><a id="btnPrint">Report Generate</a></li>
                        </div>
                        </ul>
                    </li>
                    <div id="marker"></div>
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

<script type="text/javascript" src="js/slideShow.js"></script>
@yield('Report')


</body>
</html>
