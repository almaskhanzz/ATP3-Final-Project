@extends('layout.adminSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Add New Staff</span>
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
            <label>First name</label>
            <input type="text" name="firstName" class="w3-input w3-border w3-hover-border-black" style="width:100%;" placeholder="Please First name" />
        </div>
        <div class="w3-section">
            <label>Last name</label>
            <input type="text" name="lastName" class="w3-input w3-border w3-hover-border-black" style="width:100%;" placeholder="Please last name" />
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
            <input type="text" name="phnNo" value="+880" size="4" style="height:40px;" readonly /><input type="text"  name="phoneNumber" id="phnNo1" size="96" style="height:40px;" > 
        </div>
        <div class="w3-section">
            <label>Email</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="email" placeholder="Please enter email">
        </div>
        <div class="w3-section">
            <label>Salary</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="salary" placeholder="Please enter salary" />
        </div>
        <div class="w3-section">
            <label>Profile Picture</label>
            <input type="file" class="w3-input w3-border w3-hover-border-black" name="profilePicture" >
        </div>
        <div class="w3-section">
            <label>Password</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="password" name="password" placeholder="Please enter password">
        </div>
        <input type="submit" name="submit" style="width:100%;" value="Add Staff" class="btn" />
    </form>

</div><br><br>
@endsection

@section('title')
Add Staff
@endsection

