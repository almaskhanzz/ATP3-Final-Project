@extends('layout.staffSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content">  
    <!-- Login -->
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Change Password</span>
    </div>
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
        
        <div class="alert alert-danger">
        <font color="red">{{session('msg')}}</font>
        </div>
    </div>
    
    <form class="w3-container" method="post">
        {{csrf_field()}}
        <div class="w3-section">
            <label>Old Password</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="password" name="oldPassword" >
        </div>
        <div class="w3-section">
            <label>New Password</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="password" name="newPassword" >
        </div>
        <div class="w3-section">
            <label>Confirm Password</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="password" name="confirmPassword" >
        </div>
        <input type="submit" name="submit" style="width:100%;" value="Change Password" class="btn" />
    </form>

</div><br><br>
@endsection

@section('title')
Change Password
@endsection

