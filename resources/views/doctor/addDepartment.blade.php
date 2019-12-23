@extends('layout.adminSecondaryPage')   

<!-- Content -->
@section('Content') 
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Add New Doctor's Department</span>
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
            <label>Department</label>
            <input type="text" name="department" class="w3-input w3-border w3-hover-border-black" style="width:100%;" placeholder="Please enter department name" />
        </div>
        <br><br>
        <input type="submit" name="submit" style="width:100%;" value="Add Doctor Department" class="btn" />
    </form>

</div><br><br><br><br>
@endsection

@section('title')
Add Doctor's Department
@endsection

