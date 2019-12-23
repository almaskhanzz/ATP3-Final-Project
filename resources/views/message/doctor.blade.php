@extends('layout.staffSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content">
    <div class="w3-container">
    <br><br><br>
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
            <label>From</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="from" value="{{$user->email}}" readonly>
        </div>
        <div class="w3-section">
            <label>To</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="to" value="{{$doctor->email}}" readonly>
        </div>
        <div class="w3-section">
            <label>Text</label>
            <textarea rows="3" cols="60" type="text"  name="text" class="w3-input w3-border w3-hover-border-black" placeholder="Please enter Something" ></textarea>
        </div>
        <input type="submit" name="submit" style="width:100%;" value="Send" class="btn" />
    </form>

</div><br><br>
@endsection

@section('title')
Messages
@endsection