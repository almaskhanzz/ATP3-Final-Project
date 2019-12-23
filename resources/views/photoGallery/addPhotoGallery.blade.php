@extends('layout.adminSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Add Photo gallery</span>
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
        <div class="w3-section">
            <label>Title</label>
            <textarea rows="3" cols="60" type="text"  name="title" class="w3-input w3-border w3-hover-border-black" placeholder="Please enter Title" ></textarea>
        </div>
        <div class="w3-section">
            <label>Description</label>
            <textarea rows="10" cols="100" type="text" name="des" class="w3-input w3-border w3-hover-border-black" placeholder="Please enter Description" ></textarea>
        </div>
        <input type="submit" name="submit" style="width:100%;" value="Add Photo gallery" class="btn" />
    </form>

</div><br><br>
@endsection

@section('title')
Add Photo Gallery
@endsection
