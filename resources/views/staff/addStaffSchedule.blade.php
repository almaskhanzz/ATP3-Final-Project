@extends('layout.adminSecondaryPage')   

<!-- Content -->
@section('Content') 
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Add Staff's Schedule</span>
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
    
    <form class="w3-container" method="post">
    {{csrf_field()}}
        <div class="w3-section">
            <label>Staff's Name</label>
            <select name="staffsName" class="w3-input w3-border w3-hover-border-black">
                <option value="0" disabled="true" selected="true">---Select Staff's Name---</option>
                @foreach($staffs as $s)
                <option value="{{$s->firstname}} {{$s->lastname}}">{{$s->firstname}} {{$s->lastname}}</option>
                @endforeach
            </select>
        </div>
        <div class="w3-section">
            <label>Slot</label>
            <select name="time" class="w3-input w3-border w3-hover-border-black">
                <option value="0" disabled="true" selected="true">---Select Time---</option>
                <option value="8:00AM-11:00AM">8:00AM-4:00PM</option>
                <option value="11:00AM-2:00PM">4:00PM-12:00AM</option>
                <option value="2:00PM-5:00PM">12:00AM-8:00AM</option>
            </select>
        </div>
        <div class="w3-section">
            <label>Room No</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="room" placeholder="Please enter room number">
        </div>
        <input type="submit" name="submit" style="width:100%;" value="Add Staff's Schedule" class="btn" />
    </form>

</div><br><br>
@endsection


@section('title')
Add Staff's Schedule
@endsection

