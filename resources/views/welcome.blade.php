<!DOCTYPE html>
<html>
<title>Hospital Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/slideshow.css">
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
                    <li><a href="#" class="rmvunderline">Home</a></li>
                    <li><a href="#about" class="rmvunderline">About</a></li>
                    <li><a href="#contact" class="rmvunderline">Contact</a></li>
                    <!-- <div id="marker"></div> -->
                </ul>
            </nav>
        </td>
        <td width="20%"></td>
    </tr>
</table>

            

<!-- Content -->
<div class="w3-content">  
  <div class="w3-center w3-padding-64">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Photo Gallery</span>
  </div>

  <!-- Slideshow -->
  <div class="w3-container">
    <div class="slideshow-container">
      @foreach($photos as $s)
        <div class="mySlides fade">
          <img src="{{$s->pic}}" style="width:100%;height:540px;"><br><br><br>
          <div class="text"><strong>{{$s->title}}</strong></div>
        </div> 
      @endforeach
    </div>
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
  </div>

  <!-- Grid -->
  <div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">MEET OUR DOCTORS!</span>
    </div>

    @foreach($doctors as $s)
    <div class="w3-third w3-margin-bottom">
      <div class="w3-card-4">
        <img src="\{{$s->pic}}" alt="John" style="width:100%;height:320px">
        <div class="w3-container">
          <h3>{{$s->name}}</h3>
          <p class="w3-opacity">{{$s->department}}</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <!-- Contact -->
  <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact Us</span>
  </div>

  <form class="w3-container">
    {{csrf_field()}}
    <div class="w3-section">
      <label>Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" required>
    </div>
    <div class="w3-section">
      <label>Email</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email" required>
    </div>
    <div class="w3-section">
      <label>Subject</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Subject" required>
    </div>
    <div class="w3-section">
      <label>Message</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" required>
    </div>
    <input type="submit" class="w3-button w3-block w3-black" name="" value="Send">
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
