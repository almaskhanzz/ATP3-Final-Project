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
            <label>Date of birth</label>
            <input type="date" name="birthday" class="w3-input w3-border w3-hover-border-black" />
        </div>
        <div class="w3-section">
            <label>Service Name</label>
            <input type="text" name="sname" class="w3-input w3-border w3-hover-border-black" style="width:100%;" placeholder="Please enter service name" />
        </div>
        <input type="submit" name="submit" style="width:100%;" value="Add Appointment" class="btn" />
    </form>

</div><br><br><br><br><br>
@endsection

@section('title')
Add Appointment
@endsection