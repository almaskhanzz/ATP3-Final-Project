@extends('layout.adminSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <img src="\{{$staff->pic}}" height="200" width="200">
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
            <label>Name</label>
            <input type="text" name="firstName" class="w3-input w3-border w3-hover-border-black" value="{{$staff->firstname}} {{$staff->lastname}}" readonly/>
        </div>
        <div class="w3-section">
            <label>Date of birth</label>
            <input type="text" name="birthday" class="w3-input w3-border w3-hover-border-black" value="{{$staff->dob}}" readonly/>
        </div>
        <div class="w3-section">
            <label>Gender</label><br>
            <input type="text" name="gender" class="w3-input w3-border w3-hover-border-black" value="{{$staff->gender}}" readonly/>
        </div>
        <div class="w3-section">
            <label>Phone number</label><br>
            <input type="text" name="phnNo" class="w3-input w3-border w3-hover-border-black" value="{{$staff->phone}}" readonly/>
        </div>
        <div class="w3-section">
            <label>Email</label>
            <input class="w3-input w3-border w3-hover-border-black" type="text" name="email" value="{{$staff->email}}" readonly>
        </div>
        <div class="w3-section">
            <label>Salary</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="salary" value="{{$staff->salary}}" placeholder="Please enter salary"/>
        </div>
        <input type="submit" name="submit" style="width:100%;" value="Update" class="btn" />
    </form>

</div><br><br>
@endsection

@section('title')
Staff Profile
@endsection