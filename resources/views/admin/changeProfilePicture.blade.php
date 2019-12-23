@extends('layout.adminSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">My Profile Picture</span>
    </div>
    <div class="w3-container">
        <div class="w3-section" align="center">
            <label></label>
            <img src="\{{$admin->pic}}" height="300" width="400">
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
            <label>Picture</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="file" name="picture" >
        </div>
        <input type="submit" name="submit" style="width:100%;" value="Update Profile Picture" class="btn" />
    </form>

</div><br><br>
@endsection

@section('title')
Change Profile Picture
@endsection