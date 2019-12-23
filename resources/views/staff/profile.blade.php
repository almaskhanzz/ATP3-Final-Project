@extends('layout.staffSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">My Profile</span>
    </div>
    <div class="w3-container">
        <div class="w3-section" align="center">
            <label></label>
            <img src="\{{$staff->pic}}" height="300" width="400">
        </div>
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
    </div>
    
    <form class="w3-container" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
        
        <div class="w3-section">
            <label>First Name</label>
            <input type="text" name="firstName" class="w3-input w3-border w3-hover-border-black" placeholder="Please enter First name" value="{{$staff->firstname}}"/>
        </div>
        <div class="w3-section">
            <label>Last Name</label>
            <input type="text" name="lastName" class="w3-input w3-border w3-hover-border-black" placeholder="Please enter First name" value="{{$staff->lastname}}"/>
        </div>
        <div class="w3-section">
            <label>Email</label>
            <input type="text" name="email" class="w3-input w3-border w3-hover-border-black" placeholder="Please enter email name" value="{{$staff->email}}"/>
        </div>
        <input type="submit" name="submit" style="width:100%;" value="Update Profile" class="btn" />
    </form>

</div><br><br>
@endsection

@section('title')
My Profile
@endsection