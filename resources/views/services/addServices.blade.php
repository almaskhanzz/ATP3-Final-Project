@extends('layout.staffSecondaryPage')   

<!-- Content -->
@section('Content') 
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Add Services</span>
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
            <label>Service Name</label>
            <input type="text" name="sname" class="w3-input w3-border w3-hover-border-black" style="width:100%;" placeholder="Please enter service name" />
        </div>
        <div class="w3-section">
            <label>Price</label>
            <input type="text" name="price" class="w3-input w3-border w3-hover-border-black" style="width:100%;" placeholder="Please enter service price" />
        </div>
        <div class="w3-section">
            <label>Description</label>
            <input type="text" name="description" class="w3-input w3-border w3-hover-border-black" style="width:100%;" placeholder="Please enter description" />
        </div>
        <br><br>
        <input type="submit" name="submit" style="width:100%;" value="Add Services" class="btn" />
    </form>

</div><br><br><br><br>
@endsection

@section('title')
Add Services
@endsection

