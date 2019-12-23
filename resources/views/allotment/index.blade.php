@extends('layout.staffSecondaryPage')  

<!-- Content -->
@section('Content')
<div class="w3-content">
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
    <br>
    <form class="w3-container" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
        
        
        <div class="w3-section">
            <label>Patient Name</label>
            <select name="name" class="w3-input w3-border w3-hover-border-black">
                <option value="0" disabled="true" selected="true">---Select Patient Name---</option>
                @foreach($users as $d)
                <option value="{{$d->firstname}} {{$d->lastname}}">{{$d->firstname}} {{$d->lastname}}</option>
                @endforeach
            </select>
        </div>
        <div class="w3-section">
            <label>Bed No</label>
            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="bedNo" >
        </div>
        <input type="submit" name="submit" style="width:100%;" value="Add Allotment" class="btn" />
    </form>

</div><br><br><br><br><br>
@endsection

@section('title')
Add Allotment
@endsection