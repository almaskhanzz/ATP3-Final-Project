@extends('layout.adminSecondaryPage')   

<!-- Content -->
@section('Content') 
<div class="w3-content"> 
    <div class="w3-center w3-padding-64" id="login">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Add Doctor's Schedule</span>
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
            <label>Department</label>
            <select name="department" id="department" class="w3-input w3-border w3-hover-border-black">
                <option value="0" disabled="true" selected="true">---Select Department---</option>
                @foreach($department as $d)
                <option value="{{$d->department}}">{{$d->department}}</option>
                @endforeach
            </select>
        </div>
        <div class="w3-section">
            <label>Doctor</label>
            <select name="doctor" id="doctor" class="w3-input w3-border w3-hover-border-black">
                <option value="">Select Doctor</option>
            </select>
        </div>
        <div class="w3-section">
            <label>First Slot</label>
            <select name="time1" class="w3-input w3-border w3-hover-border-black">
                <option value="0" disabled="true" selected="true">---Select Time---</option>
                <option value="8:00AM-11:00AM">8:00AM-11:00AM</option>
                <option value="11:00AM-2:00PM">11:00AM-2:00PM</option>
                <option value="2:00PM-5:00PM">2:00PM-5:00PM</option>
                <option value="5:00PM-8:00PM">5:00PM-8:00PM</option>
                <option value="8:00PM-11:00PM">8:00PM-11:00PM</option>
            </select>
        </div>
        <div class="w3-section">
            <label>Room No</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="room1" placeholder="Please enter room number">
        </div>
        <div class="w3-section">
            <label>Second Slot</label>
            <select name="time2" class="w3-input w3-border w3-hover-border-black">
                <option value="0" disabled="true" selected="true">---Select Time---</option>
                <option value="8:00AM-11:00AM">8:00AM-11:00AM</option>
                <option value="11:00AM-2:00PM">11:00AM-2:00PM</option>
                <option value="2:00PM-5:00PM">2:00PM-5:00PM</option>
                <option value="5:00PM-8:00PM">5:00PM-8:00PM</option>
                <option value="8:00PM-11:00PM">8:00PM-11:00PM</option>
            </select>
        </div>
        <div class="w3-section">
            <label>Room No</label>
            <input type="text" class="w3-input w3-border w3-hover-border-black" name="room2" placeholder="Please enter room number" />
        </div>
        <div class="w3-section">
            <label>Third Slot</label>
            <select name="time3" class="w3-input w3-border w3-hover-border-black">
                <option value="0" disabled="true" selected="true">---Select Time---</option>
                <option value="8:00AM-11:00AM">8:00AM-11:00AM</option>
                <option value="11:00AM-2:00PM">11:00AM-2:00PM</option>
                <option value="2:00PM-5:00PM">2:00PM-5:00PM</option>
                <option value="5:00PM-8:00PM">5:00PM-8:00PM</option>
                <option value="8:00PM-11:00PM">8:00PM-11:00PM</option>
            </select>
        </div>
        <div class="w3-section">
            <label>Room No</label>
            <input class="w3-input w3-border w3-hover-border-black" type="text" name="room3" placeholder="Please enter room number">
        </div>
        <input type="submit" name="submit" style="width:100%;" value="Add Doctor's Schedule" class="btn" />
    </form>

</div><br><br>
@endsection


@section('Search')
<script type="text/javascript" src="\js/dynamicDropdownForDoctorSchedule.js"></script>
@endsection


@section('title')
Add Doctor's Schedule
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection

